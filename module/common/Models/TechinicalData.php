<?php

namespace Module\Common\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechinicalData extends Model
{
    use HasFactory;

    protected $fillable = [
             'description',
               'image'
    ];

    public function files()
    {
        return $this->hasMany(TechnicaldataFile::class);
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

}
