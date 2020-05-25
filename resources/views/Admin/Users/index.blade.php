<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>列表</title>
</head>
<body>
	<center>
		<table border="1px" width="400px">
			<tr>
				<th>ID</th>
				<th>名字</th>
				<th>性别</th>
				<th>大小</th>
				<th>操作</th>
			</tr>

			<tr>
				<td>1</td>
				<td>jixiang</td>
				<td>妖</td>
				<td>A-</td>
				<td><a href="">修改</a></td>

			</tr>

			<tr>
				<td>2</td>
				<td>liulin</td>
				<td>不详</td>
				<td>C</td>
				<td><a href="/adminusers/2/edit">修改</a>
					<form action="/adminusers/2" method="post">
						{{csrf_field()}}
						{{method_field("DELETE")}}
						<input type="submit" value="删除">
					</form></td>
			</tr>

		</table>
	</center>
</body>
</html>