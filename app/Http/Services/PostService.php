<?php

namespace App\Http\Services;
use Illuminate\Support\Facades\Http;

class PostService extends ConnectionService
{
    public function getPostsFromApi()
    {
        $address = $this->getAddress();
        return Http::timeout(10)->acceptJson()->get("$address/posts")->json();
    }
}
