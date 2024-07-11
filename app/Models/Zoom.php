<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zoom extends Model
{
    use HasFactory;

    public function postData(){
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }

   



}
