@extends('admin.index')
@section('head.css')
<link rel="stylesheet" href="/css/admin-html.css">
@stop
@section('body.content')
	<div class="row"><a href="{{url('cate')}}">&larr; Back</a></div>
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
	{!! Form::model($cate,[
			'route'=>['cate.update', $cate->id], 
			'method'=>'PUT'
		]) 
	!!}
	<div class="form-group">
		{!!Form::label('lbname','Category name:')!!}
		{!!Form::text('name',null,['class'=> 'form-control','placeholder'=>'fill name'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('lbdes','Category description:')!!}	
		{!!Form::text('des',null,['class'=> 'form-control','placeholder'=>'fill description'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('lbspace',' ')!!}	
		{!!Form::submit('Update',['class'=> 'form-control'])!!}
	</div>
	{!!Form::close()!!}

@stop