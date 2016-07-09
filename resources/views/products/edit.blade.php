@extends('admin.index')
@section('head.css')
<link rel="stylesheet" href="/css/admin-html.css">
@stop
@section('body.content')
<div class="row">
	<a href="{{url('/product')}}">&larr; Back</a>
</div>
<div class="row">
	@if(count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
</div>
<div class="row">
	{!!Form::model($product,[
		'route'=>['product.update',$product->id],
		'method'=>'put'
	])!!}
		<div class="form-group">
			{!!Form::label('lbname','Product name:')!!}
			{!!Form::text('name',null,['class'=>'form-controller','placeholder'=>'fill name'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('lbcate_id','Category ID:')!!}
			{!!Form::select('cate_id',$cate_id,$product->cate_id)!!}
		</div>
		<div class="form-group">
			{!!Form::label('lbdes','Description product:')!!}
			{!!Form::text('des',null,['class'=>'form-controller','placeholder'=>'fill description'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('lbspc',' ')!!}
			{!!Form::submit('Update')!!}
		</div>
	{!!Form::close()!!}
</div>
@stop
