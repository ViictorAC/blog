<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'usuario_id'];

    public function relUser()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }
}
