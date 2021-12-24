<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costing extends Model
{
    protected $fillable = [
        'cost', 'book_unique_id', 'case', 'student_id'
    ];
    use HasFactory;
}
