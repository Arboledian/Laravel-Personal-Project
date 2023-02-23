<?php

namespace App\Models;

use App\Models\User;
use App\Models\Vtuber;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comments extends Model
{
    use HasFactory;
    protected $fillable = [
        //'user_id',
        //'vtuber_id',
        'content'
    ];

    public function post()
    {
        return $this->belongsTo(Vtuber::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
