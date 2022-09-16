<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Post extends Model
{
    use HasFactory;
    //izin isi database
    protected $guarded = ['id'];
    //...
    //eager load prosses
    protected $with = ['category','author'];
    //...
    // search for blog post
    public function scopeFilter($query, array $filter){
        if(isset($filter['search']) ? $filter['search'] : false)
        {
           return $query->where('title','like','%'.$filter['search'].'%')
                   ->orwhere('body','like','%'.$filter['search'].'%');
        }
    }
    //...
    //relation table
    public function category(){
     return $this->belongsTo(Category::class);
    }
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    //...
}
