<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function posts()
    {
        return $this->belongsTo(Postingan::class, 'created_by');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
