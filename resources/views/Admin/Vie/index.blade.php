<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>模板</title>
</head>
<body>
	@include("Admin.Vie.header")
	<h1>刘林,就爱lol</h1>
	<h1>解析变量:{{$name}} {{$age}}</h1>
	<h1>解析数组变量:{{$arr['name']}} {{$arr['age']}}</h1>
	<h1>使用函数:{{time()}}</h1>
	<h1>使用函数二:{{date('Y-m-d H:i:s',time())}}</h1>
	<h1>显示html代码:{!!$a!!}</h1>
	<h1>流程控制</h1>
	@if($b==10)
	jixiang
	@elseif($b>10)
	zhihua
	@else
	junge
	@endif

	<h1>for循环</h1>
	@for($i=1;$i<=100;$i++)
	{{$i}}
	@endfor

	<h1>foreach循环</h1>
	<center>
		<table width="300px" border="1px">
			<tr>
				<th>NAME</th>
				<th>AGE</th>

			</tr>
			

			@foreach($arr1 as $row)
			<tr>
				<td>{{$row['name']}}</td>
				<td>{{$row['age']}}</td>

			</tr>
			@endforeach
		</table>
	</center>
	@include("Admin.Vie.footer")




</body>
</html>