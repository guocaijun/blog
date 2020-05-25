<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>添加</title>
</head>
<body>
	<form action="/adminusers" method="post"> 
		用户名:<input type="text" name="name"><br>
		性别:<input type="text" name="sex"><br>
		大小:<input type="text" name="size"><br>
		{{csrf_field()}}
		<input type="submit" value="添加">
	</form>
</body>
</html>