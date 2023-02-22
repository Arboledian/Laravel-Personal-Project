<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vtuber extends Model
{
    //creado con php artisan make:model Vtuber
    use HasFactory;

    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false){
            //comando con formato SQL
            $query->where('company', 'like','%' . request('search') . '%')
            ->orWhere('name', 'like','%' . request('search') . '%');
        }



    }
}
