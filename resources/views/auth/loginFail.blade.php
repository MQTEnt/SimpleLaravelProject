@extends('home.master')
@section('head.title')
Login fail
@stop
@section('body.content')
<div class="container">
	<div class="row">
		Login fail
		<br>
		{{$myEmail}}
		<br>
		{{$myPassword}}
	</div>
</div>
@stop