@extends('home.master')
@section('head.title')
Home page
@stop
@section('body.content')
<div class="container">
	@foreach($data as $key=>$item)
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="list-group">
				<a href="#" class="list-group-item list-group-item-info">
					{{$key}}<span class="badge">{{count($item)}}</span>
				</a>
				@foreach($item as $i)
					<a href="{{route('home.product.show',$i['id'])}}" class="list-group-item">{{$i['name']}}</a>
				@endforeach			
			</div>
		</div>
	</div>
	@endforeach
</div>
@stop