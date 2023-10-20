<div class="header-container header-menu">

	@foreach($menu as $item)
	<div>
		<a href="{{route($item['alias'])}}">
			{{$item['title']}}
		</a>
	</div>
	@endforeach

<!--	<hr> -->

</div>