<div class="header__container header__menu">

	@foreach($menu as $item)
	<div>
		<a href="{{route($item['alias'])}}">
			{{$item['title']}}
		</a>
	</div>
	@endforeach

<!--	<hr> -->

</div>