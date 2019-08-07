<?php
declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //protected $primaryKey = 'authors_id';

    protected $fillable = [
        'name',
        'kana',
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }

}
