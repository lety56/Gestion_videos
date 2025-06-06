<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $fillable = ['video_id', 'user_id', 'contenu'];

    public function video()
    {
        return $this->belongsTo(Video::class, 'video_id', 'id_video');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}