<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;
use App\Models\Category;
use App\Models\Product;

class SelectionController extends Controller
{
    public function index(Request $request, Catalog $catalogs)
{



    $catalog_name = $request->get('catalog_item');
    $category_name = $request->get('category_item');
    $kind_name = $request->get('kind_item');
    $group_name = $request->get('group_item');
    $rubric_name = $request->get('rubric_item');

    dump($catalog_name);
    dump($category_name);
    dump($kind_name);
    dump($group_name);
    dump($rubric_name);

    if ($catalog_name === "Прием пищи") {
        $catalog = Catalog::all();
//        $catalog = $catalogs->getCatalogs();
        $product = Product::with('catalogs')->get();
    }else {
        $catalog = Catalog::all()->where('name', $catalog_name); 
        $product = Product::all()->where('catalog_name', $catalog_name);
        }
    dump($catalog_name);
    dump($product);

    if ($category_name === 'Любой') {
        $category = Category::all();
        dump($category);
        $product = Product::with('categories')->get();
        dd($product);
    }else {
        $product = Product::all()->where('category_name', $category_name);
    }
    dump($category_name);
    dump($product);
    if ($kind_name === 'Любой') {
    }else {
        $product = Product::all()->where('kind_name', $kind_name);
    }
    dump($kind_name);
    dump($product);
    if ($group_name === 'Любая') {
    }else {
        $product = Product::all()->where('group_name', $group_name);
    }
    dump($group_name);
    dump($product);
    if ($rubric_name === 'Любое') {
    }else {
        $product = Product::all()->where('rubric_name', $rubric_name);
    }
    dump($rubric_name);
    dump($product);

//    $catalog = Catalog::all()->where('name', $catalog_name);
//      $product = Product::all()->where('catalog_name', $catalog_name);
    //                          ->where('category_name', $category_name);
    //                        ->where('kind_name', $kind_name)
    //                        ->where('group_name', $group_name)
    //                        ->where('rubric_name', $rubric_name);
    $products = Product::All();

//    dump($request);
//    dump($catalog_name);
//    dump($catalog);
//    dump($product);

    return view('selection', [
        'catalogs'=>$catalogs,
        'catalog'=>$catalog,
        'products'=>$products,
        'product'=>$product,
        ]);
}
}
