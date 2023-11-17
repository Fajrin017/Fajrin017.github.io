<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Sub extends Model
{
    use HasFactory;

    
    // protected $guarded = ['id'];
    protected $fillable = [
        'user_id',
        'post_id',
        'barang',
        'jumlah',
        'satuan',
        'kondisi'
    ];

    public function posts(){
        return $this->belongsTo(Post::class, 'post_id', 'user_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
