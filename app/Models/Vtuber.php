<?php

namespace App\Models;

use App\Models\Comments;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
    public function comments(){
        return $this->hasMany(Comments::class);
    }
}
