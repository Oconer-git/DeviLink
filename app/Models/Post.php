<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\BelongsToManyRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'is_global',
        'image'
    ];

    public function likes(): BelongsToMany {
        return $this->belongsToMany(Post::class, 'likes', 'user_id', 'post_id');

    }
}
