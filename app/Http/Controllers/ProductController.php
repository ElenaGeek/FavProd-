<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request, Catalog $catalogs)
{

    $catalog_name = $request->get('catalog_item');
    $category_name = $request->get('category_item');
    $type_name = $request->get('type_item');
    $group_name = $request->get('group_item');
    $class_name = $request->get('class_item');

    $catalogs = $catalogs->getCatalogs();
    $catalog = Catalog::all()->where('name', $catalog_name);
    $product = Product::all()->where('catalog_name', $catalog_name);
    $products = Product::All();

//    dump($catalog);
//    dump($product);

    return view('sample', [
        'catalogs'=>$catalogs,
        'catalog'=>$catalog,
        'products'=>$products,
        'product'=>$product,
        ]);
}
}
