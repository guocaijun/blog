<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajax get</title>
	<script type="text/javascript" src="/static/jquery-1.8.3.min.js"></script>
</head>
<body>
	<button>获取Ajax请求数据</button>
</body>
<script type="text/javascript">
	// alert($);
	$("button").click(function(){
		//Ajax请求
		$.get("/doajaxget",{},function(data){
			alert(data);
		});
	});
</script>
</html>