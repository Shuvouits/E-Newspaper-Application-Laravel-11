<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Content;

class Post extends Model
{
    use HasFactory;

    public function contentData(){
        return $this->hasMany(Content::class, 'post_id');
    }

    public function zoomData(){
        return $this->hasMany(Zoom::class, 'post_id');
    }

    public function latestContentData()
{
    return $this->hasOne(Content::class, 'post_id')->oldestOfMany();
}


}
