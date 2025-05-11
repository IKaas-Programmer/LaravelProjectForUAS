<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Page extends Model
{
    protected $fillable = [
    'title',
    'type',
    'color',
    'description',
    'user_id',
];

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function comments(): MorphMany
    {
        return $this->morphMany(Comments::class, 'commentable');
    }
}