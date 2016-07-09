<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select in HTML</title>
	<link rel="stylesheet" href="/css/app-html.css">
</head>
<body>
	<div class="row">
		<a href="{{url('learn-html')}}" style="color: #fff; font-size:20px"><u>back</u></a>
		<form action="{{route('select.html')}}" method="GET">
			<select name="select">
				<optgroup label="Social Networks">
					<option value="facebook">FaceBook</option>
					<option value="twitter">Twitter</option>
					<option value="youtube">YouTube</option>
				</optgroup>
				<optgroup label="Chat">
					<option value="zalo">Zalo</option>
					<option value="whatsapp">WhatsApp</option>
					<option value="lines">Lines</option>
				</optgroup>
			</select>
			<input type="submit" value="submit" name="submit">
		</form>
	</div>
	<div class="row">
			<?php 
				if(isset($_GET['submit']))
					echo 'You have chosen '.$_GET['select'];
				else
					echo 'You have to choice one option';
			?>
	</div>
</body>
</html>