@extends('layouts.base')

@section('title')
@parent
Selection
@endsection

@section('content')

<div class="selection container-narrow">

      <div class="selection__top">

            @switch(substr($productnumber, -1, 1))
            @case(1)
            <h3>Найдено {{$productnumber}} рецепт</h2>
                  @break
                  @case(2)
                  <h3>Найдено {{$productnumber}} рецепта</h2>
                        @break
                        @case(3)
                        <h3>Найдено {{$productnumber}} рецепта</h2>
                              @break
                              @case(4)
                              <h3>Найдено {{$productnumber}} рецепта</h2>
                                    @break
                                    @default
                                    <h3>Найдено {{$productnumber}} рецептов</h2>
                                          @endswitch

                                          @php
                                          //dd($products);
                                          //dump($products);
                                          @endphp

                                          <br>
                                          <h3>
                                                <a class="selection__link" href="/#slide1">Изменить выбор</a> :
                                                @if($catalog_name[0] != '...')
                                                <span>
                                                      {!! $catalog_name[0] !!}
                                                </span>
                                                @endif
                                                @if($category_name[0] != '...')
                                                <span>
                                                      ~ {!! $category_name[0] !!}
                                                </span>
                                                @endif
                                                @if($kind_name[0] != '...')
                                                <span>
                                                      ~ {!! $kind_name[0] !!}
                                                </span>
                                                @endif

                                          </h3>

      </div>
      <br>
      <!--<p>Сортировать по: алфавиту, дате, популярности </p>-->

      <div class="selection__blocks">

            @forelse($product as $id => $item)


            <div class="selection__block">
                  <div class="selection__blocksm">
                        <img class="selection__img" src='/storage/images/products/{{$item->id}}.png'></img><br>
                  </div>
                  <div class="selection__blocklt">

                        <h4>
                              <a href='/recipy/{{$item->slug}}'>
                                    {{$item->catalog_name}} ~ {{$item->category_name}} ~ {{$item->kind_name}} : {{$item->name}}
                              </a>
                        </h4>


                        <b><i style="color:green">{{$item->brief}} </i></b>
                        <br><br>
                        <p><i>Порций : {{$item->portions}}</i></p>
                        <p><i>Время приготовления : {{$item->duration}} минут</i></p>

                  </div>
            </div>


            @empty
            Рецептов нет !!!
            <div class="selection__blockempty">
            </div>
            @endforelse
            <div class="selection__blockempty">
            </div>
      </div>
      <br><br>

      <?php
      /*

      if (isset($_POST['submit'])) {

            $selected_catalog = $_POST['catalog_item'];
            echo 'Catalog: ' . $selected_catalog;

            $selected_category = $_POST['category_item'];
            echo 'Category: ' . $selected_category;

            $selected_kind = $_POST['kind_item'];
            echo 'Kind: ' . $selected_kind;

            $selected_group = $_POST['group_item'];
            echo 'Group: ' . $selected_group;

            $selected_rubric = $_POST['rubric_item'];
            echo 'Rubric: ' . $selected_rubric;

            //            if(!empty($_POST['rubric_item'])) { 
            //                  foreach($_POST['rubric_item'] as $selected_rubric){
            //                        echo 'Your rubric: ' . $selected_rubric;
            //                  }          
            //            } 

            //	dump($catalogs);	
            //      dump($catalog);
            //      dump ($products);
            //      dump ($product);
            //      dump($selected_catalog);

      } else {
            //            echo 'Please select any value';
      }
      */
      ?>
</div>
@endsection