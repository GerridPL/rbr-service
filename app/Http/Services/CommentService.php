<?php

namespace App\Http\Services;
use Illuminate\Support\Facades\Http;

class CommentService extends ConnectionService
{
    public function getCommentsFromApi(): string
    {
        //$address = $this->getAddress();
        //$response = Http::get("$address/comments");
        return Http::get("http://localhost:8002/api/comments");
        //return $response->body();
    }
}
