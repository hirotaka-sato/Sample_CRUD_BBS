<?php
declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function bookdetail()
    {
        return $this->belongsTo(Bookdetail::class);
    }

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
