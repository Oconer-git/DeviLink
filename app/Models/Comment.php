<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\map;

class Comment extends Model
{
    protected $fillable = [
        'comment',
        'user_id',
        'post_id',
        'image'
    ];

    use HasFactory;
}
