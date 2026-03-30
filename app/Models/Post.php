<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //1
    // use HasUuids;
    protected $table = 'posts';

    // protected $primaryKey = 'id'; // specify the primary key if it's not 'id'
    // protected $keyType = 'int'; // specify the type of the primary key
    // public $incrementing = true; // specify if the primary key is auto-incrementing
    // 1-protected $primaryKey = 'id';
    // 2-protected $keyType = 'string'; // UUID primary key  : UNIVERSAL UNIQUE IDENTIFIRE (36 CHARACTER STRING) : 128 BIT
    // 3-public $incrementing = false; // Disable auto-incrementing for UUIDs    

    protected $fillable = [
        'title',
        'body',
        'published',
        'author'
    ]; // fields that can be updated via mass assignment
    protected $guarded = ['id']; // fields that cannot be updated via mass assignment (read-only fields)
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
    }
}
