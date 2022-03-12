<?php

namespace App\Http\Services;
use Illuminate\Support\Facades\Http;

class CommentService extends ConnectionService
{
    public function getCommentsFromApi(): string
    {
        $address = $this->getAddress();
        $response = Http::get("$address/comments");
        return $response->body();
    }
}
