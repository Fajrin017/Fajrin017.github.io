<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_Status extends Model
{
    use HasFactory;

    protected $table = 'post_status';

    public function Posts(){
        return $this->hasMany(Post::class);
    }
}
