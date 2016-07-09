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
	<div class="row">
		{!!Form::open(array('route'=>['cate.store'],'method' => 'post'))!!}
		<div class="form-group">
			{!!Form::label('lbname','Category name:')!!}
			{!!Form::text('name','',['class'=> 'form-control','placeholder'=>'fill name'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('lbdes','Category description:')!!}	
			{!!Form::text('des','',['class'=> 'form-control','placeholder'=>'fill description'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('lbspace',' ')!!}	
			{!!Form::submit('Create',['class'=> 'form-control'])!!}
		</div>
		{!!Form::close()!!}
	</div>
@stop