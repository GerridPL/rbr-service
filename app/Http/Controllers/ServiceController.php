<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\CommentService;
use Illuminate\Support\Facades\Http;

class ServiceController extends Controller
{
    public function getComments()
    {
        dd(Http::get("http://127.0.0.1:8005/api/comments"));
//        $CommentService = new CommentService();
//        $response = $CommentService->getCommentsFromApi();
//        dd($response);
        //return response()->json ($CommentService->getCommentsFromApi());
        //return response()->json(["message" => "Success"], 200)
    }
}
