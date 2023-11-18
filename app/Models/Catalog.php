<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function getCatalogs()
    {

    $catalogs = Catalog::all();
    return $catalogs;

    }
}
