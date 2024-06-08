<?php

namespace Module\Common\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Contactus extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name', 'phone_number', 'address', 'message', 'email'
    ];
}
