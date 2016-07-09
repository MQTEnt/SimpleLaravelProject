@extends('home.master')
@section('head.title')
Categories
@stop
@section('body.content')
<div class="container">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h3 style="color:#ccccb3">All Categories</h3>
		</div>
	</div>
	<div class="row">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Name</th>
					<th>Description</th>
				</tr>
			</thead>
			<tbody>
				@foreach($cates as $cate)
				<tr>
					<td><a href="{{route('home.cate.show',$cate->id)}}">{{$cate->name}}</a></td>
					<td>{{$cate->des}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@stop