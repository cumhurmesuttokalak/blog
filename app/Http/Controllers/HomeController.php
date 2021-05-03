<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        /*Post::create([
            'author_id' => 1,
            'category_id' => 1,
            'title' => 'Hayvanlar',
            'content' => 'Hayvanların hepsi insanlar gibi solunum ve boşaltım yapar.',
            'post_tags' => 'hellö'
        ]);*/

        // $all_posts = Post::where('is_deleted', 0)->get();

        /*Post::where('is_deleted', 0)->update([
            'title' => 'Hayvanların ortak özellikleri',
            'is_deleted' => 1
        ]);*/



        dd(explode('-', 'selam-ben-bir-gotum'));
    }
}
