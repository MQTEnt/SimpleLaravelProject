<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Web</title>
	<link rel="stylesheet" href="/css/app-html.css">
	<style>
		table th td
		{
			border-bottom: 1px solid #ddd;
			border-collapse: collapse;
			text-align: center;
		}
		p
		{
			font-size: 14px;
		}
		th
		{
			font-size: 16px;
		}
		#content
		{
			padding-left: 300px;
		}
		a
		{
			color: #fff;
			text-decoration: none;
		}
		a:hover
		{
			color: #ff1;
		}
		#des th td
		{
			width: 200px;
		}
	</style>
</head>
<body>
	<div id="navbar">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="{{url('input-html')}}">Input</a></li>
			<li><a href="{{url('table-html')}}">Table</a></li>
			<li><a href="#">Image</a></li>
			<li><a href="{{url('select-html')}}">Select</a></li>
		</ul>
	</div>
	<div id="content" style="margin-top: 100px;">
		<h2 style='padding-left: 50px'>List Product</h2>
		<table>
			<tr class="offborder">
				<th><a href="{{url('product/create')}}">Create Product</a></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th id="Des">Description</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			@foreach($products as $product)
			<tr>
				<td><p>{{$product->id}}</p></td>
				<td><p>{{$product->name}}</p></td>
				<td><p>{{$product->des}}</p></td>
				<td><p><a href="{{url('product/edit/'.$product->id)}}">Edit</a></p></td>
				<td><p><a href="{{url('product/delete/'.$product->id)}}">Delete</a></p></td>
			</tr>
			@endforeach
		</table>
		
	</div>
</body>
</html>