<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class agendas extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'description',
    ];

    public function comments()
    {
        return $this->morphMany(Comments::class, 'commentable');
    }
}
