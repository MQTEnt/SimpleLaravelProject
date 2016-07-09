@extends('home.master')
@section('head.title')
Products of category
@stop
@if(empty($data))
	@section('body.content')
	<div class="container">
		<div class="row">
		<div class="col-sm-6 col-sm-offset-3"><h3 style="color:#ccccb3">Have no product of this category</h3></div>
		</div>
	</div>
	@stop
@else
	@section('body.content')
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3"><h3 style="color:#ccccb3">Products of {{$data[0]->cate_name}}</h3></div>
			</div>
			<div class="row">
				<table class="table table-striped">
				    <thead>
				      <tr>
				        <th>ID</th>
				        <th>Name</th>
				        <th>Description</th>
				      </tr>
				    </thead>
				    <tbody>
				    @foreach($data as $d)
				      <tr>
				        <td>{{$d->id}}</td>
				        <td>{{$d->name}}</td>
				        <td>{{$d->des}}</td>
				      </tr>
				    @endforeach
				     </tbody>
			     </table>
			</div>
		</div>
	@stop
@endif