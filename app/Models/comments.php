<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Comments extends Model
{
    protected $fillable = [
        'commentable_type',
        'commentable_id',
        'comment',
        
    ];
    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }
}
