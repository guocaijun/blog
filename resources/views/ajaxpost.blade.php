<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{csrf_token()}}">
	<title>Ajax post</title>
	<script type="text/javascript" src="/static/jquery-1.8.3.min.js"></script>
</head>
<body>
	<button>获取Ajax请求数据</button>
</body>
<script type="text/javascript">
	//通过Jquery类库将token字符串写入到请求标头里 csrf保护
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});
	// alert($);
	$("button").click(function(){
		//Ajax请求
		$.post("/doajaxpost",{},function(data){
			alert(data);
		});
	});
</script>
</html>