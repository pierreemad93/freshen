<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $fillable = [
        'title',
        'description',
        'title_ar',
        'description_ar',
        'image' ,
        'added_by'
    ];
}
