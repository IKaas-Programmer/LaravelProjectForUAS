<?php

namespace App\Models;

use App\Models\Comments;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Agendas extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'description',
    ];

    public function comment()
    {
        return $this->belongsTo(Comments::class, 'comment_id');
    }

    public function user() {
        return $this -> belongsTo(User::class, 'user_id');
    }
}