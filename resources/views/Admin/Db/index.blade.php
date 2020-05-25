<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>遍历数据</title>
</head>
<body>
	<center>
		<table width="300px" border="1px">
			<tr>
				<th>NAME</th>
				<th>Paaword</th>

			</tr>
			

			@foreach($stu as $row)
			<tr>
				<td>{{$row->name}}</td>
				<td>{{$row->password}}</td>

			</tr>
			@endforeach
		</table>
	</center>

</body>
</html>