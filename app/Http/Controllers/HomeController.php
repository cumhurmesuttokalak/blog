<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    function index(){
    return "giriş";
    }

        // $all_posts = Post::where('is_deleted', 0)->get();

        /*Post::where('is_deleted', 0)->update([
            'title' => 'Hayvanların ortak özellikleri',
            'is_deleted' => 1
        ]);*/




    }

