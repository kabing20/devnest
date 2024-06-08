<?php

namespace Module\Common\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'blog_category_id',
        'title',
        'slug',
        'description',
        'image',
        'date',
        'inaguration',
        'location',
    ];


    public function setTitleAttribute($value)
        {
            $this->attributes['title'] = $value;
            $this->attributes['slug'] = Str::slug($value).time();
        }

    public function image($size = null)
    {
        if ($this->image == null){
            return "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTugu0kegXOT1Gh1sgDVHvYjkGW29w19Hl9gQ&usqp=CAU";
        }
        if ($size == null){
            return asset('storage/'.$this->image);
        }
        return asset('storage/'.$size.'/'.$this->image);
    }

    public function category()
    {

        return $this->belongsTo(BlogCategory::class, 'blog_category_id','id');

    }
}
