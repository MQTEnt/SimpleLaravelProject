<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Table in HTML</title>
	<link rel="stylesheet" href="/css/app-html.css">
	<style>
		body{
			font-size: 20px;
		}
		table, th, td{
			border: 1px solid #fff;
			border-collapse: collapse;
			text-align: left;
		}
	</style>
</head>
<body>
	<div>
		<a href="{{url('learn-html')}}" style="color: #fff; font-size:20px"><u>back</u></a>
		<br>
		<br>
		<table style="width: 200px">
			<tr>
				<td colspan="2" style="text-align: center">List social network</td>
			</tr>
			<tr>
				<th>STT</th>
				<th>Name</th>
			</tr>
			<tr>
				<td>1</td>
				<td>Facebook</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Youtube</td>
			</tr>
			<tr>
				<td>3</td>
				<td>Twitter</td>
			</tr>
		</table>
	</div>
</body>
</html>