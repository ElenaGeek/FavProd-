@extends('layouts.base')

@section('title')
@parent
	Product
@endsection

@section('content')

<div class="product container-narrow">
<h1>Рецепт</h1>
<h2></h2>
<p></p>

	@php
	//dd($products);
	//dump($products);
	@endphp

<br>

<?php

if(isset($_POST['submit'])){
  
      $selected_catalog = $_POST['catalog_item'];
      echo '' . $selected_catalog;             

      $selected_category = $_POST['category_item'];
      echo '  >  ' . $selected_category;

      $selected_kind = $_POST['kind_item'];
      echo '  >  ' . $selected_kind;

      $selected_group = $_POST['group_item'];
      echo '  >  ' . $selected_group;

      $selected_list1 = $_POST['list1_item'];
      echo '  >  ' . $selected_list1;    
    
      if(!empty($_POST['rubric_item'])) { 
            foreach($_POST['rubric_item'] as $selected_rubric){
                  echo '  >  ' . $selected_rubric;
            }          
      } 
      
//	dump($catalogs);	
//      dump($catalog);
//      dump ($products);
//      dump ($product);
//      dump($selected_catalog);
     
}
else {
//            echo 'Please select any value';
    }
?>
<br></br>
<div class="product__blocks">

@forelse($product as $id => $item)
 
                  <div class="product__block">   
                        <div class="product__blocksm">
                        <img class="product__img" src='/storage/images/products/{{$item->id}}.png'></img><br>
                        </div>
                        
                  </div>

      <div class="product__text">
            <h3 class="product__texttitle">Блюдо дня</h3>
            <span class="product__textsm">Вам это понравится</span>
            <br>
            <b class="product__textbold">Попробуйте</b>
            <div class="product__blocklt">
                        <br>
                        <h4>
                              <a href='/product/{{$item->id}}'>
                              {{$item->catalog_name}}{{$item->name}}{{$item->slug}}
                              </a> 
                        </h4>
                        <br>       
                              <p><i style="color:blue">Порций ~ {{$item->id}}</i></p>
                              <p><i style="color:red">Минут приготовления ~ {{$item->id}}</i></p>
                              <p><i style="color:green">Ингредиенты: {{$item->description}}</i></p>
                              <p><i style="color:green">Инcтрукция приготовления: {{$item->description}}</i></p>
                        </div>
      </div>  


    @empty
    	Новостей нет !!!
    @endforelse
</div>
	<br><br>

	<?php

      if(isset($_POST['submit'])){
        
            $selected_catalog = $_POST['catalog_item'];
            echo 'Your catalog: ' . $selected_catalog;             

            $selected_category = $_POST['category_item'];
            echo 'Your category: ' . $selected_category;

            $selected_kind = $_POST['kind_item'];
            echo 'Your kind: ' . $selected_kind;

            $selected_group = $_POST['group_item'];
            echo 'Your group: ' . $selected_group;

            $selected_list1 = $_POST['list1_item'];
            echo 'Your list1: ' . $selected_list1;    
          
            if(!empty($_POST['rubric_item'])) { 
                  foreach($_POST['rubric_item'] as $selected_rubric){
                        echo 'Your rubric: ' . $selected_rubric;
                  }          
            } 
            
//	dump($catalogs);	
//      dump($catalog);
//      dump ($products);
//      dump ($product);
//      dump($selected_catalog);
           
      }
      else {
//            echo 'Please select any value';
          }
?>

</div>
@endsection