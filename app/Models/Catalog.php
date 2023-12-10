<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;

    const TITLE = 'Каталог';
    const TABLE = 'catalogs';
    protected $fillable = [
        'name',
    ];

    public function getCatalogs()
    {
    $catalogs = Catalog::all();
    return $catalogs;
    }

    public function getCatalog()
    {
//    $catalogn = Catalog::all()->where('name', $catalog_name);   
    $catalogn = Catalog::find(1);
    return $catalogn;
    }

    public function getProducts()
    {
        return $this->hasMany(Product::class, 'catalog_name');
    }
}
