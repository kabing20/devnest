<?php

namespace Module\Common\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class BlogCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',

    ];

    public function setTitleAttribute($value)
        {
            $this->attributes['title'] = $value;
            $this->attributes['slug'] = Str::slug($value).time();
        }



        public function blogs(){
            return $this->hasMany(Blog::class,'blog_category_id','id');
        }

}
