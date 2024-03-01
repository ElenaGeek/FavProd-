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

   
    public function getCatalogs($catalog_name)
    {
        if ($catalog_name === "Прием пищи") {
            $catalogs = Catalog::all();

        }else {
            $catalogs = Catalog::all()->where('name', $catalog_name); 
            }
            
//    dump($catalog_name);
//    dump($catalogs);    

    return $catalogs;
    }
/* 
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
*/    
}
