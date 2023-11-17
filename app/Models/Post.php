<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
// use App\Models\Sub;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Carbon;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    // protected $fillable = ['category_id','user_id', 'title', 'slug', 'excerpt', 'image','body',];
    protected $guarded = ['id'];
    protected $with =['category', 'author'];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('d-m-Y h:i:s');
    }

    public function scopeFilter($query, array $filters)
    {

        // if (isset($filters['search']) ? $filters ['search'] : false ) {
        //     return $query->where('title', 'like', '%' . $filters ['search'] . '%')
        //           ->orWhere('body', 'like', '%' . $filters ['search'] . '%');
        // } 

        // $query->when(isset($filters['search']) ? $filter['search'] : false, function($query, $search)
        // {
        //     return $query->where(function ($query) use ($search){
        //         $query->where('title', 'like', '%' . $search . '%')
        //               ->orWhere('body', 'like', '%' . $search . '%');

        //     });
        // }       
                 
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where(function ($query) use ($search){
                $query->where('title', 'like', '%' . $search . '%')
                      ->orWhere('body', 'like', '%' . $search . '%'); 
                });
            });

        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use($category){
                $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, fn($query, $author)=>
            $query->whereHas('author', fn($query)=>
                $query->where('username', $author)
            )
        );
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()  
    {
    return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    public function post_status()
    {
        return $this->belongsTo(Post_Status::class, 'post_status_id');
    }

    // public function sub ()
    // {
    //     return $this->hasMany(Sub::class);
    // }

}
