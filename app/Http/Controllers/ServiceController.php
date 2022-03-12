<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\CommentService;
use App\Http\Services\PostService;
use App\Models\Post;
use App\Models\Comment;

class ServiceController extends Controller
{
    public function getComments()
    {
        $CommentService = new CommentService();
        $comments = [];
        $response = ($CommentService->getCommentsFromApi());
        foreach ($response as $comment)
        {
            $comment_object = new Comment($comment);
            $comments[] = $comment_object;
        }
        return view('comments', compact('comments'));
    }

    public function getPosts()
    {
        $PostService = new PostService();
        $posts = [];
        $response = $PostService->getPostsFromApi();
        foreach ($response as $post)
        {
            $post_object = new Post($post);
            $posts[] = $post_object;
        }
        return view('posts', compact('posts'));
    }
}
