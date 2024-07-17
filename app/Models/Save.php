<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Save extends Model
{
    protected $fillable = [
        'post_id',
        'user_id'
    ];
    use HasFactory;
}
