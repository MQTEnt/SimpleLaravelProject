@extends('home.master')
@section('head.title')
{{$product->name}}
@stop
@section('body.content')
<div class="container">
	<div class="row">
		<div class="col-sm-2">
			<div class="list-group">
				<a href="#" class="list-group-item active">
					Related Products
				</a>
				@foreach($relaProducts as $item)
					<a href="{{route('home.product.show',$item['id'])}}" class="list-group-item">{{$item['name']}}</a>
				@endforeach
			</div>
		</div>
		<div class="col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">{{$product->name}}</h3>
				</div>
				<div class="panel-body">
					<p>{{$product->des}}</p>
				</div>
			</div>
		</div>
	</div>
</div>
@stop