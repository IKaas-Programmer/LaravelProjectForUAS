<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class page_comments extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'page_id',
        'comment',
        
    ];
    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
