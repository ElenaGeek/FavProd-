<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    const TITLE = 'Категория';
    const TABLE = 'category';
    protected $fillable = [
        'name',
    ];
}
