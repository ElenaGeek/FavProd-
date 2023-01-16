<div class="menu">

	<br>
	@foreach($menu as $item)
	<div>
		<a href="{{route($item['alias'])}}">
			{{$item['title']}}
		</a>
	</div>
	@endforeach
	<hr>


</div>