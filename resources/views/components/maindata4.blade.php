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
      dump($data);

      $catalog = $data[0];
      $category = $data[1];
@endphp

@foreach ($catalog as $item =>$array)
      @php
      echo $array['name'];
      @endphp                    
@endforeach

<form method="POST" action="{{ isset($product) ? route('/', $selection) : route('selection') }}" novalidate>       
@csrf

<div class="maindata__selblocks">
            <div class="maindata__selblock">
<!--                  <label class="maindata__label" for="catalog_item">Прием пищи</label>-->
                  <select class="maindata__list" name="catalog_item">
                        @foreach ($data as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">
                  <label class="maindata__label" for="category_item">Вид блюда</label>
                  <select class="maindata__list" name="category_item">
                        @foreach ($data as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">
                  <label class="maindata__label" for="type_item">Основной состав</label>
                  <select class="maindata__list" name="type_item">
                        @foreach ($data as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">
                  <label class="maindata__label" for="group_item">Ценность ингредиентов</label>
                  <select class="maindata__list" name="group_item">
                        @foreach ($data as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">                 
                  <label class="maindata__label" for="class_item">Назначение</label>
                  <select class="maindata__list" name="class_item[]" multiple>
                        @foreach ($data as $item =>$array)
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
                  <label class="maindata__label" for="list1_item">Белки</label>
                  <select class="maindata__list" name="list1_item">
                        @foreach ($data as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">
                  <label class="maindata__label" for="list2_item">Углеводы</label>
                  <select class="maindata__list" name="list2_item">
                        @foreach ($data as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">
                  <label class="maindata__label" for="list3_item">Овощи</label>
                  <select class="maindata__list" name="list3_item">
                        @foreach ($data as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">
                  <label class="maindata__label" for="list4_item">Масла, приправы</label>
                  <select class="maindata__list" name="list4_item">
                        @foreach ($data as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">
                  <label class="maindata__label" for="list5_item">Фрукты, напитки</label>
                  <select class="maindata__list" name="list5_item">
                        @foreach ($data as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">                 
                  <label class="maindata__label" for="list6_item">Cладости</label>
                  <select class="maindata__list" name="list6_item[]" multiple>
                        @foreach ($data as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
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