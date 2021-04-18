<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'author',
        'status',
        'price',
        'wheretostore'

    ];

    public function User()
    {
        return $this->belongsTo(User::class);

    }

}
