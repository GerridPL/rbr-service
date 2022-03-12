<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Http\Request;
use App\Http\Services\CommentService;
use App\Http\Services\PostService;
use App\Models\Post;
use App\Models\Comment;
use App\Http\Services\ConnectionService;
use Illuminate\Support\Facades\Http;

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

    public function addRandomPost()
    {
        $faker = Factory::create();
        $post = [
            'title' => $faker-> sentence($nbWords = 2, $variableNbWords = true),
            'content' => $faker -> sentence($nbWords = 10, $variableNbWords = true),
            'author' => 1
        ];
        $connectionService = new ConnectionService();
        $address = $connectionService->getAddress();
        $response = Http::accept('application/json')->post("$address/posts", $post);
    }

    public function addCommentYes()
    {
        //Get Posts for pick one of them
        $PostService = new PostService();
        $posts = [];
        $response = $PostService->getPostsFromApi();
        foreach ($response as $post)
        {
            $post_object = new Post($post);
            $posts[] = $post_object;
        }
        $number = array_rand($posts, $num = 1);

        //Create comment, and send json
        $comment = [
            'post_id' => $posts[$number]->id,
            'content' => 'Tak',
            'author' => 1
        ];
        $connectionService = new ConnectionService();
        $address = $connectionService->getAddress();
        $response = Http::accept('application/json')->post("$address/comments", $comment);
    }
}
