<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Input in HTML</title>
	<link rel="stylesheet" href="/css/app-html.css">
</head>
<body>
	<div>
		<a href="{{url('learn-html')}}" style="color: #fff; font-size:20px"><u>back</u></a>
		<form action="GET">
			<div class="row">
				<label for="">Text:</label>
				<input name="text" type="text" placeholder="Type..." required>
			</div>
			<div class="row">
				<label for="">Radio:</label>
				<input type="radio" name="radio">
			</div>
			<div class="row">
				<label for="">Checkbox:</label>
				<input type="checkbox" name="checkbox">
			</div>
			<div class="row">
				<label for="">Date:</label>
				<input type="date" name="date">
			</div>
			<div class="row" style="padding-left: 210px">
				<input type="submit" value="Submit">
			</div>
		</form>
	</div>
</body>
</html>