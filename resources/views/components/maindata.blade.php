<div class="maindata container-narrow">

<h3 id="slide1" class="maindata__title">Выберите блюдо и состав ингредиентов</h3>
<p>текст</p>
<!--
<button class="maindata__button" type="submit" form="mainform" name="submit" value="submit">
            Подобрать
</button>
-->
<div class="maindata__blocks">
<div class="maindata__block">

@php
      //dd($data);
      //dump($data);

      $catalog = $data[0];
      $category = $data[1];
      $kind = $data[2];
      $group = $data[3];
      $rubric = $data[4];
      $protein = $data[5];
      $carb = $data[6];
      $dairyveg = $data[7];
      $fruitdrink = $data[8];
      $oilnut = $data[9];
      $sweet = $data[10];
      
@endphp

@foreach ($catalog as $item =>$array)
      @php
//      echo $array['name'];
      @endphp                    
@endforeach

<!--<form method="POST" action="{{ isset($product) ? route('/', $selection) : route('selection') }}" novalidate>-->
<form method="POST" action="/recipies" novalidate>         
@csrf

<div class="maindata__selblocks">
            <div class="maindata__selblock">
                  <label class="maindata__label" for="catalog_item">Прием пищи</label>
                  <select class="maindata__list" name="catalog_item">
                        @foreach ($catalog as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">
                  <label class="maindata__label" for="category_item">Вид блюда</label>
                  <select class="maindata__list" name="category_item">
                        @foreach ($category as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">
                  <label class="maindata__label" for="kind_item">Основной состав</label>
                  <select class="maindata__list" name="kind_item">
                        @foreach ($kind as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">
                  <label class="maindata__label" for="group_item">Ценность ингредиентов</label>
                  <select class="maindata__list" name="group_item">
                        @foreach ($group as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">                 
                  <label class="maindata__label" for="rubric_item">Назначение</label>
                  <select class="maindata__list" name="rubric_item">
                        @foreach ($rubric as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>

            <div class="maindata__selblock">  
<!--              <label class="maindata__label" for="submit">Кнопка</label>
                  <p class="maindata__button">Кнопка</p> -->
                  <input class="maindata__button" type="submit" name="submit" value="Подобрать">
            </div>

</div>

<div class="maindata__ingr">

<!--      <img class="maindata__img" src="/storage/images/mainft.png"></img> -->

<div class="maindata__selblocks ingr__overlay">


            <div class="maindata__selblock">
                  <label class="maindata__label" for="protein_item">Белки</label>
                  <select class="maindata__list" name="protein_item">
                        @foreach ($protein as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">
                  <label class="maindata__label" for="carb_item">Углеводы</label>
                  <select class="maindata__list" name="carb_item">
                        @foreach ($carb as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">
                  <label class="maindata__label" for="dairyveg_item">Овощи</label>
                  <select class="maindata__list" name="dairyveg_item">
                        @foreach ($dairyveg as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">
                  <label class="maindata__label" for="fruitdrink_item">Фрукты, напитки</label>
                  <select class="maindata__list" name="fruitdrink_item">
                        @foreach ($fruitdrink as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">
                  <label class="maindata__label" for="oilnut_item">Масла, приправы</label>
                  <select class="maindata__list" name="oilnut_item">
                        @foreach ($oilnut as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">                 
                  <label class="maindata__label" for="sweet_item">Cладости</label>
                  <select size="4" class="maindata__list" name="sweet_item[]" multiple>
                        @foreach ($sweet as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option style="padding: 5px 3px;" value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>

<button type="button" class="ingr__close">
      <img src="storage/images/delete.png" alt="Delete">
</button> 

</div>
</div>

</form>

</div>

<button class="ingr__button">
      <p>Ингредиенты, детали</p>
<!--                    <img src="" width="32" height="23" alt="Ингредиенты, детали"> -->
</button>
  



</div>

</div>

<!----------------------------------------------------------->

<script>

document.querySelector(".ingr__button").onclick = function(){
    document.querySelector(".ingr__overlay").classList.add("ingr__overlay__open");
}

document.querySelector(".ingr__close") .onclick = function(){
    document.querySelector(".ingr__overlay").classList.remove("ingr__overlay__open");
}        

</script>