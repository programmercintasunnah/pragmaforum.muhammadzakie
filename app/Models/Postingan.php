<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postingan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // protected $table = "postingans";
    public function users()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    public function komentar()
    {
        return $this->hasMany(Komentar::class, 'post_id');
    }
    public function forum()
    {
        return $this->belongsTo(Forum::class);
    }
}
