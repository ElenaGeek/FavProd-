<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;
use App\Models\Product;

class CatalogController extends Controller
{
    /*
private $catalog =[

1=> ['title' => 'Политика'],
2=> ['title' => 'Экономика'],
3=> ['title' => 'Культура'],
4=> ['title' => 'Погода']
];
*/
public function index(Request $request, Catalog $catalogs)
{

//    dd($request);
    $catalog_name = $request->get('catalog_item'); 
//    dump($request->get('catalog_item'));
    var_dump($catalog_name);
    var_dump("Обед");

    $number=settype($catalog, 'string');
    var_dump($number);
    $n='1';
    $nn = $catalog;

    if($catalog === "Обед"){
        echo(1);
    }

//    $catalog = Catalog::with('name')->where('name', $catalog)->first();
$catalog = Catalog::all()->where('name', $catalog_name);
$product = Product::all()->where('catalog_name', $catalog_name);

//$products = Product::All(settype('catalog_name', 'description');
//var_dump($products[1]);
$products = Product::All()->where('catalog_name', $number);
//$products = Product::All()->where('id', $number);
//    dd('catalog', $catalog);
    dump('products', $products);
//    $catalog = Catalog::find(3)->name;
    $products = Product::all();


$catalogs = $catalogs->getCatalogs();



//$catalogn = $catalogs->getCatalog();
//$products = $products->getProduct();

var_dump($request->get('id'), $request->get('name'));

//dump($selected_catalog);

//$return =['catalogs'=>$catalogs];
return view('catalog', [
        'catalogs'=>$catalogs,
        'catalog'=>$catalog,
        'products'=>$products,
        'product'=>$product,
        ]);

//$return =['catalogs'=>$this->catalogs];
//return view('catalog',['catalogs'=>$this->catalogs]);

}

}
