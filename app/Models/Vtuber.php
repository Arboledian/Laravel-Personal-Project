<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vtuber extends Model
{
    //creado con php artisan make:model Vtuber
    use HasFactory;

    public function queryFilter($query, array $filters){
        if($filters['company'] ?? false){
            //comando con formato SQL
            $query->where('company', 'like','%' . request('company') . '%');
        }

        if($filters['search'] ?? false){
            //comando con formato SQL
            $query->where('company', 'like','%' . request('company') . '%')
            ->orWhere('name', 'like','%' . request('name') . '%');
        }



    }
}
