@extends('admin.index')
@section('head.css')
<link rel="stylesheet" href="/css/app-admin.css">
@stop
@section('body.content')
	<div class="row"><a href="{{url('/product')}}">&larr; Back</a></div>
	<div class="row">
		@if (count($errors) > 0)
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
		{!!Form::open([
			'route'=>'product.store',
			'method'=>'post'
		])!!}
			<div class="form-group">
				{!!Form::label('lbname','Product name:')!!}
				{!!Form::text('name','',['class'=>'form-controll','placeholder'=>'fill name'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('lbcate_id','Category ID:')!!}
				{!!Form::select('cate_id',$cate_id)!!}
			</div>
			<div class="form-group">
				{!!Form::label('lbdes','Product description:')!!}
				{!!Form::text('des','',['class'=>'form-controll','placeholder'=>'fill description'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('lbspc',' ')!!}
				{!!Form::submit('Create',['class'=>'form-controll'])!!}
			</div>		
		{!!Form::close()!!}
	</div>
@stop