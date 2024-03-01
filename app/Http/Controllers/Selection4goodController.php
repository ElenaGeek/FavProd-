<?php

namespace App\Http\Controllers;

//use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Catalog;
use App\Models\Category;
use App\Models\Product;

class SelectionController extends Controller
{
    public function index(Request $request, Catalog $catalogs)
{

    $kind = ['...', 'Мясо', 'Рыба', 'Творог'];
    $group = ['...', 'Железо', 'Кальций', 'Магний'];
    $rubric = ['...', 'Для костей', 'Для сосудов', 'Для похудения'];

    $protein =['...', 'Говядина', 'Лосось', 'Творог'];
    $carb =['...', 'Хлеб', 'Мука', 'Свекла']; 
    $dairyveg =['...', 'Морковь'];
    $fruitdrink =['...', 'Яблоко'];
    $oilnut =['...', 'Оливковое'];
    $sweet =['...', 'Мёд'];

    $catalog_name = $request->get('catalog_item');
    $category_name = $request->get('category_item');
    $kind_name = $request->get('kind_item');
    $group_name = $request->get('group_item');
    $rubric_name = $request->get('rubric_item');
    $protein_name = $request->get('protein_item');
    $carb_name = $request->get('carb_item');
    $dairyveg_name = $request->get('dairyveg_item');
    $fruitdrink_name = $request->get('fruitdrink_item');
    $oilnut_name = $request->get('oilnut_item');
    $sweet_name = $request->get('sweet_item');

    if ($catalog_name === "...") {
        $catalog = Catalog::all();
//        $catalog = $catalogs->getCatalogs($catalog_name);
        $catalog_name = Catalog::pluck('name')->toArray(); 
//        $product = Product::with('catalogs')->get();
    }else {
        $catalog = Catalog::all()->where('name', $catalog_name);
        $catalog_name = (array)$request->get('catalog_item'); 
        }
//        dump($catalog_name);

    if ($category_name === '...') {
        $category = Category::all();
        $category_name = Category::pluck('name')->toArray();  /* !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!*/
    }else {
        $category = Category::all()->where('name', $category_name);
        $category_name = (array)$request->get('category_item');
    }
//    dump($category_name);

    if ($kind_name === '...') {
        $kind_name = $kind;
    }else {
        $kind_name = (array)$request->get('kind_item');
    }
//    dump($kind_name);

    if ($group_name === '...') {
        $group_name = $group;
    }else {
        $group_name = (array)$request->get('group_item');
    }
//    dump($group_name);

    if ($rubric_name === '...') {
        $rubric_name = $rubric;
    }else {
        $rubric_name = (array)$request->get('rubric_item');
    }
//    dump($rubric_name);

    if ($protein_name === '...') {
        $protein_name = $protein;
    }else {
        $protein_name = (array)$request->get('protein_item');
    }
//    dump($protein_name);

    if ($carb_name === '...') {
        $carb_name = $carb;
    }else {
        $carb_name = (array)$request->get('carb_item');
    }
//    dump($carb_name);

    if ($dairyveg_name === '...') {
        $dairyveg_name = $dairyveg;
    }else {
        $dairyveg_name = (array)$request->get('dairyveg_item');
    }
//    dump($dairyveg_name);

    if ($fruitdrink_name === '...') {
        $fruitdrink_name = $fruitdrink;
    }else {
        $fruitdrink_name = (array)$request->get('fruitdrink_item');
    }
//    dump($fruitdrink_name);

    if ($oilnut_name === '...') {
        $oilnut_name = $oilnut;
    }else {
        $oilnut_name = (array)$request->get('oilnut_item');
    }
//    dump($oilnut_name);

    if ($sweet_name === NULL) {
        $sweet_name = $sweet;
    }else {
        $sweet_name = (array)$request->get('sweet_item');
    }
//    dump($sweet_name);

    $product = Product::select()
    ->whereIN('catalog_name', $catalog_name)
    ->whereIN('category_name', $category_name)
    ->whereIN('kind_name', $kind_name)
    ->whereIN('group_name', $group_name)
    ->whereIN('rubric_name', $rubric_name)
    ->whereIN('protein_name', $protein_name)
    ->whereIN('carb_name', $carb_name)
    ->whereIN('dairyveg_name', $dairyveg_name)
    ->whereIN('fruitdrink_name', $fruitdrink_name)
    ->whereIN('oilnut_name', $oilnut_name)
    ->whereIN('sweet_name', $sweet_name)
    ->get();

//    dump($product);

    $product_number = count($product); 
//    dump($product_number);

//    $category_name = $this->getObjectList($request, Category::class, 'category_item');

//    dump($category_name);

//    $kind_name = $this->getArrayList($request, $kind, 'kind_item');

//    dump($kind_name);

//    $products = Product::All();
//    dump($products);

    return view('selection', [
        'catalogs'=>$catalogs,
        'catalog'=>$catalog,
        'catalog_name'=>$catalog_name,
//        'categories'=>$categories,
        'category'=>$category,
        'category_name'=>$category_name,
        'kind_name'=>$kind_name,
          'kind'=>$kind,
//        'products'=>$products,
        'product'=>$product,
        'productnumber'=>$product_number,
        ]);


}

public function getObjectList($request, $column_object, $column_item)
    {
        $column_name = $request->get($column_item);

        if ($column_name === '...') {
            $column_name = $column_object::pluck('name')->toArray();  /* !!!!!!!!!!!!!!!!!!!!*/
        }else {
            $column_name = (array)$request->get($column_item);
        }
//        dump($column_name);

        return $column_name;
    }
    
public function getArrayList($request, $column_array, $column_item)
{
    $column_name = $request->get($column_item);

    if ($column_name === '...') {
        $column_name = $column_array;
    }else {
        $column_name = (array)$request->get($column_item);
    }
//    dump($column_name);

    return $column_name;
}

}
