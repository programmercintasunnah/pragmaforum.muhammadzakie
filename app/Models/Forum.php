<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Forum extends Model
{

    use HasFactory;
    protected $guarded = ['id'];

    public function posts()
    {
        return $this->hasMany(Postingan::class, 'forum_id');
    }
}
