<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\CommentService;
use App\Http\Services\PostService;
use Illuminate\Support\Facades\Http;

class ServiceController extends Controller
{
    public function getComments()
    {
        $CommentService = new CommentService();
        $comments = ($CommentService->getCommentsFromApi());
        dd($comments);
        return view('comments', compact('comments'));
    }

    public function getPosts()
    {
        $PostService = new PostService();
        dd($PostService->getPostsFromApi());
    }
}
