<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Content extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_id',  // Add this line
        'content',  // Add any other fillable fields here
    ];

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }

}
