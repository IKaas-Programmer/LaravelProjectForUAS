<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Articles_comments extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'article_id',
        'comment',
        
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function article()
    {
        return $this->belongsTo(Articles::class, 'article_id');
    }
}
