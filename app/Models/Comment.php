<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail(int $id)
 */
class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'post_id',
        'content',
        'author',
        'created_at',
        'updated_at'
    ];
}
