<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //protected $primaryKey = 'authors_id';
    protected $timestamps = false;
    protected $fillable = [
        'name',
        'kana',
    ];
}
