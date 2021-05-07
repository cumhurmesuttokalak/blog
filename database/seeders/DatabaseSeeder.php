<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Category;
use App\Models\Page;
use App\Models\Post;
use App\Models\Comment;
Use App\Models\Menu;
Use App\Models\Sub_Menu;
Use App\Models\File;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'cumhur mesut',
            'surname' => 'tokalak',
            'e_mail' => 'cumhurmesuttokalak@gmail.com',
            'password' => 'sananeboolum54',
            'role' => 'ADMIN',
            'is_deleted' =>  0 ,

        ]);


    }
}
