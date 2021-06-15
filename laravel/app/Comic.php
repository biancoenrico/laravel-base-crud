<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $table = "comics";
    public $timestamps = false;

    protected $fillable = [
        'img',
        'title',
        'description',
        'type',
        'price',
        
    ];
};

