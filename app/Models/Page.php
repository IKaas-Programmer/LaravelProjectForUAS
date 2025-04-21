<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Page extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'type',
        'color',
    ];

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
