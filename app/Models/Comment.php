<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected   $fillable = ['author', 'content', 'post_id']; // fields that can be updated via mass assignment
    protected $guarded = ['id']; // fields that cannot be updated via mass assignment (read-only fields)
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
} 
