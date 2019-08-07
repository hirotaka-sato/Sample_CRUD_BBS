<?php
declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function Detail()
    {
        return $this->hasOne('\App\Bookdetail', 'id');
    }

    public function Publisher()
    {
        return $this->hasMany('\App\Publisher', 'id');
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
