@extends('admin.index')
@section('head.css')
<link rel="stylesheet" href="/css/admin-html.css">
@stop
@section('body.content')
<script>
	function delClick()
	{
		var x=confirm('Are you sure?');
		return x;
	}
</script>
<div class="row">
	<a href="{{url('/product/create')}}"><span><b>&#9998;CREATE NEW</b></span></a>
</div>
<div class="row">
	<table>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th id="des">Description</th>
			<th>Category ID</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		@foreach($products as $product)
			<tr>
				<td>{{$product->id}}</td>
				<td>{{$product->name}}</td>
				<td>{{$product->des}}</td>
				<td>{{$product->cate_id}}</td>
				<td><a href="{{route('product.edit',$product->id)}}">&#9988;</a></th>
				<td>
					{!!Form::open([
					'route'=>['product.destroy',$product->id],
					'method'=>'delete'
					])!!}
					<button class="del" onclick="return delClick()">&#10006;</button>
					{!!Form::close()!!}
				</td>
			</tr>
		@endforeach
	</table>
</div>
@stop