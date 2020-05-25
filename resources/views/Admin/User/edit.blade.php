<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>修改</title>
</head>
<body>
	<form action="/adminusers/2" method="post"> 
		用户名:<input type="text" name="name"><br>
		性别:<input type="text" name="sex"><br>
		大小:<input type="text" name="size"><br>
		{{csrf_field()}}
		{{method_field("PUT")}}
		<input type="submit" value="修改">
	</form>
</body>
</html>