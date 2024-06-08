<?php

namespace Module\Common\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class AboutUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'best_choice_title',
        'best_choice_description',
        'best_choice_image',
        'vision_description',
        'mission_description',
        'goal_description',
        'video_banner',
        'video_banner_thumb',
        'video_banner_url',
        'video_banner_url',
        'motto'
    ];

    public function setTitleAttribute($value)
    {
        $this->attributes['slug'] = Str::slug('aboutus').time();
    }

    public function bestChoiceImage($size = null)
    {
        if ($this->best_choice_image == null){
            return "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTugu0kegXOT1Gh1sgDVHvYjkGW29w19Hl9gQ&usqp=CAU";
        }
        if ($size == null){
            return asset('storage/'.$this->best_choice_image);
        }
        return asset('storage/'.$size.'/'.$this->best_choice_image);
    }

       public function VideoBannerThumb($size = null)
    {
        if ($this->video_banner_thumb == null){
            return "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTugu0kegXOT1Gh1sgDVHvYjkGW29w19Hl9gQ&usqp=CAU";
        }
        if ($size == null){
            return asset('storage/'.$this->video_banner_thumb);
        }
        return asset('storage/'.$size.'/'.$this->video_banner_thumb);
    }
}
