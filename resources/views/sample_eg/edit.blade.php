<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Product</title>
	<link rel="stylesheet" href="/css/app-html.css">
	<style>
		label
		{
			margin-right: 10px;
			display: inline-block;
			font-size: 20px;
		}
		input
		{
			width: 300px;
		}
		a
		{
			color: #fff;
			font-size: 20px;
			text-decoration: none;
		}
		.row
		{
			padding: 150px 150px;
		}
		.row-btn
		{
			padding-left: 470px;
		}
	</style>
</head>
<body>
	<div class="row">
		<form action="{{ route('product.update',['id'=>$product->id]) }}" method='post'>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group"><a href="{{route('product.show')}}">&larr;back</a></div>
			<div class="form-group">
				<label for="">Name:</label>
				<input type="text" name="name" value="{{$product->name}}">
			</div>
			<div class="form-group">
				<label for="">Description:</label>
				<input type="textarea" name="des" rows="4" cols="50" value="{{$product->des}}">
			</div>
			<div class="row-btn">
				<button>Edit</button>
			</div>
		</form>
	</div>
</body>
</html>