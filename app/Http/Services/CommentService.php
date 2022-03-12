<?php

namespace App\Http\Services;
use Illuminate\Support\Facades\Http;

class CommentService extends ConnectionService
{
    public function getCommentsFromApi()
    {
        $address = $this->getAddress();
        return Http::timeout(10)->acceptJson()->get("$address/comments")->json();
    }
}
