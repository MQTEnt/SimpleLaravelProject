@extends('admin.index')
@section('head.css')
	<link rel="stylesheet" href="/css/admin-html.css">
@stop
@section('body.content')
	<script>
		function clickDel()
		{
			var x=confirm('Are you sure?');
			return x;
		}
	</script>
	<div class="row">
		<a href="{{url('/cate/create')}}"><span><b>&#9998;CREATE NEW</b></span></a>
	</div>
	<div class="row">
		<table>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th id="des">Description</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			@foreach($cates as $cate)
			<tr>
				<td>{{$cate->id}}</td>
				<td>{{$cate->name}}</td>
				<td>{{$cate->des}}</td>
				<td>
					<a href="{{route('cate.edit',$cate->id)}}">&#9988;</a>
				</td>
				<td>
				{!! Form::open([
					'route'=> 	['cate.destroy',$cate->id],
					'method'=>	'DELETE',
					'style'=> 	'display:inline'
					]) 
				!!}
					<button class="del" onclick="return clickDel()">&#10006;</button>
				{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</table>
	</div>
	
@stop
