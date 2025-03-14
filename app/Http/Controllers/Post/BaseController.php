<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Services\PostService;
use Illuminate\Http\Request;

class BaseController extends Controller
{

    public PostService $service;

    function __construct(PostService $services)
    {
        $this->service = $services;

    }
}
