<?php

namespace App\Http\Services;
use Illuminate\Support\Facades\Http;

class PostService extends ConnectionService
{
    public function getPostsFromApi(): string
    {
        $address = $this->getAddress();
        $response = Http::get("$address/posts");
        return $response->body();
    }
}
