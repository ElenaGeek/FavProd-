<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
//    use HasFactory, Sluggable;

    const TITLE = 'Продукт';
    const TABLE = 'products';

    protected $fillable = [
        'name',
        'description',
        'catalog_name',
        'image_id',
        'slug',
    ];

    public function getProduct()
    {
        return $this->Product::find(1)->name;
    }

    public function catalogs()
    {
        return $this->belongsTo(Catalog::class, 'catalog_name');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'image_id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
