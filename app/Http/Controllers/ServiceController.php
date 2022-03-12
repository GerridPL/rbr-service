<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\CommentService;
use App\Http\Services\PostService;
use Illuminate\Support\Facades\Http;

class ServiceController extends Controller
{
    public function getComments(): string
    {
        $CommentService = new CommentService();
        return $CommentService->getCommentsFromApi();
    }

    public function getPosts(): string
    {
        $PostService = new PostService();
        return $PostService->getPostsFromApi();
    }
}
