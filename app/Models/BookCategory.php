<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    protected $fillable = [
        'category'
    ];
    use HasFactory;

    public function book() {
        return $this->hasMany(Book::class);
    }
}
