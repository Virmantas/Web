<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = [
        'name',
        'category',
        'author',
        'status',
        'price',
        'wheretostore',
        'image'
    ];

    public function likedBy(User $user)
    {
        return $this->Likedposts->contains('user_id',$user->id);
    }

    public function user()
    {
        return $this->belongsTo(User::class);

    }

    public function Likedposts()
    {
        return $this->hasMany(Likedpost::class);
    }

}
