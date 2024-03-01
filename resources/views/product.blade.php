@extends('layouts.base')

@section('title')
@parent
Product
@endsection

@section('content')

<div class="product container-narrow">

      @php
      //dd($products);
      //dump($products);
      @endphp

      <br>

      <?php

      if (isset($_POST['submit'])) {

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

            if (!empty($_POST['rubric_item'])) {
                  foreach ($_POST['rubric_item'] as $selected_rubric) {
                        echo '  >  ' . $selected_rubric;
                  }
            }

            //      dump ($product);

      } else {
            //            echo 'Please select any value';
      }
      ?>



      @forelse($product as $id => $item)
      <div class="product__top">

            <h3>
                  <a class="product__link" href="javascript:window.history.back();">Выбранные рецепты</a> :
                  {{$item->catalog_name}} ~ {{$item->category_name}} ~ {{$item->kind_name}}
            </h3>

      </div>
      <br>
      <h1>{{$item->name}}</h1>
      <br>
      <div class="product__blocks">

            <div class="product__block">
                  <div class="product__blocksm">
                        <img class="product__img" src='/storage/images/products/{{$item->id}}.png'></img><br>
                  </div>

            </div>

            <div class="product__blocktext">
                  <!--            
            <h3 class="product__texttitle">Блюдо дня
            <br>
            <span class="product__textsm">Вам это понравится</span>
            </h3>            
-->
                  <b><i style="color:green">{{$item->brief}}</i></b>
                  <br><br>
                  <p><i>Порций : {{$item->portions}}</i></p>
                  <p><i>Время приготовления : {{$item->duration}} минут</i></p>
                  <br>
                  <h3><a href="/#slide1">Ингредиенты :</a></h3>

                  @if($item->protein_qnt)
                  <p>{{$item->protein_name}} - {{$item->protein_qnt}}</p>
                  @endif
                  @if($item->carb_qnt)
                  <p>{{$item->carb_name}} - {{$item->carb_qnt}}</p>
                  @endif
                  @if($item->dairyveg_qnt)
                  <p>{{$item->dairyveg_name}} - {{$item->dairyveg_qnt}}</p>
                  @endif
                  @if($item->fruitdrink_qnt)
                  <p>{{$item->fruitdrink_name}} - {{$item->fruitdrink_qnt}}</p>
                  @endif
                  @if($item->oilnut_qnt)
                  <p>{{$item->oilnut_name}} - {{$item->oilnut_qnt}}</p>
                  @endif
                  @if($item->sweet_qnt)
                  <p>{{$item->sweet_name}} - {{$item->sweet_qnt}}</p>
                  @endif
                  <br>

                  <br><br>

                  <p>Ценность блюда ~ {{$item->group_name}}</p>
                  <p>Полезно ~ {{$item->rubric_name}}</p>

            </div>
            <div class="product__blocklt">
<!--
                  <h3>
                        <a href='/recipy/{{$item->slug}}'>
                              {{$item->catalog_name}}{{$item->name}}{{$item->slug}}
                        </a>
                  </h3>
                  <br>
               
                        <p>Прием пищи ~ {{$item->catalog_name}}</p>   
                        <p>Вид блюда ~ {{$item->category_name}}</p>  
                        <p>Основной состав ~ {{$item->kind_name}}</p>  
-->

                  <h3>Инcтрукция приготовления:</h3>
                  <p class="product__textinstr"> {!! nl2br(str_replace('\n', '<br>', $item->description)) !!} </p> <!--!!!!!!!!!!!!!!!-->
                  <p class="product__textinstr"> {!! (str_replace('.', '<p>', $item->description)) !!} </p> <!--!!!!!!!!!!!!!!!-->
            </div>



            @empty
            Рецептов нет !!!

      </div>


      @endforelse

      <br><br>

      <?php

      if (isset($_POST['submit'])) {

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

            if (!empty($_POST['rubric_item'])) {
                  foreach ($_POST['rubric_item'] as $selected_rubric) {
                        echo 'Your rubric: ' . $selected_rubric;
                  }
            }
      } else {
            //            echo 'Please select any value';
      }
      ?>

</div>
@endsection