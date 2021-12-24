<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'name', 'unique_id', 'barcode', 'author', 'unique_id', 'status', 'repair_cost', 'buyying_cost', 'book_category_id'
    ];
    use HasFactory;

    public function bookcategory() {
        return $this->belongsTo(BookCategory::class);
    }
}
