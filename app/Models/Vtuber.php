<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vtuber extends Model
{
    //creado con php artisan make:model Vtuber
    use HasFactory;

    public function queryFilter($query, array $filters){

    }
}
