<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{   
    use HasFactory,Sluggable;
    //izin isi database
    protected $guarded = ['id'];
    //...
    //eager load prosses
    protected $with = ['category', 'author'];
    //...
    // search for blog post versi pertama
    public function scopeFilter($query, array $filter)
    {
        // if(isset($filter['search']) ? $filter['search'] : false)
        // {
        //    return $query->where('title','like','%'.$filter['search'].'%')
        //                 ->orwhere('body','like','%'.$filter['search'].'%');
        // }

        //search for blog post versi kedua
        // queri filter untuk search
        $query->when($filter['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });
        //queri untuk search categori
        $query->when($filter['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });
        //queri untuk search username dengan aero function
        $query->when($filter['author'] ?? false, fn ($query, $author) =>
        $query->whereHas('author', fn ($query) =>
        $query->where('username', $author)));
    }
    //...
    //relation table
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    //...
    public function getRouteKeyName(){
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
}
