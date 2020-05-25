<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield("title")</title>
	<style type="text/css">
	#header{
		width:100%;
		height:200px;
		background-color:red;
	}

	#footer{
		width:100%;
		height:200px;
		background-color:pink;
	}
	</style>
</head>
<body>
	<div id="header">this is admin header</div>
	@section("admin")
	@show
	@section("ads")
	@show
	<div id="footer">this is admin footer</div>

</body>
</html>