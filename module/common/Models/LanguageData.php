<?php

namespace Module\Common\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LanguageData extends Model
{
    use HasFactory;

    protected $fillable = [
        'language_id',
        'key',
        'value',
    ];
}
