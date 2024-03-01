<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Catalog;
use App\Models\Category;
use App\Models\Product;

class SelectionController extends Controller
{
    public function index(Request $request, Catalog $catalogs, Category $categories)
{

    $kind = ['Любой', 'Мясо', 'Рыба', 'Творог'];
    $group = ['Любая','Железо','Кальций','Магний'];
    $rubric = ['Любое','Для костей','Для сосудов','Для похудения'];

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
//        $catalog = $catalogs->getCatalogs($catalog_name);
        $catalog_name = Catalog::pluck('name')->toArray(); 
//        $product = Product::with('catalogs')->get();
    }else {
        $catalog = Catalog::all()->where('name', $catalog_name);
        $catalog_name = (array)$request->get('catalog_item'); 
//        $product = Product::all()->where('catalog_name', $catalog_name);
        }
        dump($catalog_name);

    if ($category_name === 'Любой') {
        $category = Category::all();
//        $category = $categories->getCategories($category_name);
//        $category_n[] = (array)$category['name'];
          $category_name = Category::pluck('name')->toArray();  /* !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!*/
//        $product = Product::with('categories')->get();
    }else {
        $category = Category::all()->where('name', $category_name);
        $category_name = (array)$request->get('category_item');
        $product = Product::all()->where('category_name', $category_name);
    }
    dump($category_name);
    if ($kind_name === 'Любой') {
        $kind_name = $kind;
    }else {
        $kind_name = (array)$request->get('kind_item');
//        $product = Product::all()->where('kind_name', $kind_name);
    }
    dump($kind_name);

    if ($group_name === 'Любая') {
        $group_name = $group;
    }else {
        $group_name = (array)$request->get('group_item');
//        $product = Product::all()->where('group_name', $group_name);
    }
    dump($group_name);

    if ($rubric_name === 'Любое') {
        $rubric_name = $rubric;
    }else {
        $rubric_name = (array)$request->get('rubric_item');
//        $product = Product::all()->where('rubric_name', $rubric_name);
    }
    dump($rubric_name);


//    $conditions = array(
//        array('catalog_name', '=', $catalog_name),
//        array('category_name', 'whereIN', $category_name),
//        array('kind_name', '=', $kind_name),
//        array('group_name', '=', $group_name),
//        array('rubric_name', '=', $rubric_name),
//    );
//    $product = Product::select()->where($conditions)->get();
    $product = Product::select()
    ->whereIN('catalog_name', $catalog_name)
    ->whereIN('category_name', $category_name)
    ->whereIN('kind_name', $kind_name)
    ->whereIN('group_name', $group_name)
    ->whereIN('rubric_name', $rubric_name)
    ->get();

//    Modal::whereIn('myitems', $k)->get(); 
//    $product = DB::table('products')->where($conditions)->get();
//    $product = Product::where($conditions)->get();
    dump($product);
/* */
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
        'categories'=>$categories,
        'category'=>$category,
        'products'=>$products,
        'product'=>$product,
        ]);
}
}
