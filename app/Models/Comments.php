<?php

namespace App\Models;

use App\Models\User;
use App\Models\Vtuber;
use App\Models\Comments;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comments extends Model
{
    use HasFactory;
    protected $fillable = [
        'vtuber_id',
        'user_id',
        'content'
    ];

    public function vtuber()
    {
        return $this->belongsTo(Vtuber::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function replies()
    {
        return $this->hasMany(Comments::class,'parents_id');
    }
}
