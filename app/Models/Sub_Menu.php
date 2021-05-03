<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_Menu extends Model
{
    use HasFactory;
    protected $table='sub_menu';
    protected $guarded=['id'];
}
