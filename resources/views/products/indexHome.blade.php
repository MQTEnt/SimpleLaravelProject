@extends('home.master')
@section('head.title')
Products
@stop
@section('body.content')
<div class="container">
	<div class="row">
		<div class="col-sm-2 col-sm-offset-5">
			<h3 style="color:#ccccb3">All products</h3>
		</div>
	</div>
	<div class="row">
		<table class="table table-striped">
		    <thead>
		      <tr>
		        <th>ID</th>
		        <th>Name</th>
		        <th>Description</th>
		        <th>Category name</th>
		      </tr>
		    </thead>
		    <tbody>
		    @foreach($products as $product)
		      <tr>
		        <td>{{$product->id}}</td>
		        <td>{{$product->name}}</td>
		        <td>{{$product->des}}</td>
		        <td>{{$product->cate_name}}</td>
		      </tr>
		    @endforeach
		     </tbody>
	     </table>
	</div>
</div>
@stop