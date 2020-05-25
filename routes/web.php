<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// laravel6_01
// Route::get('/', function () {
//     // return view('welcome');
//     // echo date("Y-m-d H:i:s");
// 	//设置配置文件信息
// 	// Config::set('app.timezone',"UTC");
// 	//获取配置文件信息
// 	// echo Config::get('app.timezone');
// 	//快速获取.env文件里的配置信息
// 	// echo env("DB_HOST");
// 	//加载视图
//     return view('welcome');
// });
//基本路由使用 get请求方式 /index 路由规则 ，当路径和路由规则匹配到的话，自动请求匿名函数function
Route::get("/index",function(){
	echo "男人腿长，打一食物，蛋糕";
});


//基本路由post方式使用
// Route::post("/insert",function(){
// 	echo "this is insert";
// });

Route::get("/homeindex",function(){
	echo "this is homeindex";
});

//带参数的路由
Route::get("/edit/{id}",function($id){
	echo "修改的id为".$id;
});

//带参数的路由二 限制参数类型
Route::get("/useredit/{name}",function($name){
	echo "修改的名字是:".$name;
})->where("name",'[a-z]+');

//传递多个参数
Route::get("/index/{id}-{name}",function($id,$name){
	echo "this is index".$id."name is ".$name;
});






//后台路由组
Route::group([],function(){
	Route::get("/adminusers",function(){
		echo "this is adminusers";
	});

	Route::get("/admincates",function(){
		echo "this is admincates";
	});

	Route::get("/adminshop",function(){
		echo "this is adminshop";
	});
});

//加载form表单
Route::get("/form",function(){
	return view("form");
});

Route::post("/doform",function(){
	echo "this is doform";
});

//加载get 请求的Ajax模板
Route::get("/ajaxget",function(){
	return view("ajaxget");
});

Route::get("/doajaxget",function(){
	echo "this is ajaxget data";
});

//加载post 请求的Ajax模板
Route::get("/ajaxpost",function(){
	return view("ajaxpost");
});

Route::post("/doajaxpost",function(){
	echo "this is ajaxpost data";
});


// laravel6_02  
Route::get("/homeperson",function(){
	echo "这是我的个人中心";
})->middleware("homelogin");

Route::get("/homejiesuan",function(){
	echo "this is homejiesuan";
})->middleware("homelogin");

//加载登录界面
Route::get("/login",function(){
	return view("login");
});

//前台路由组（项目里推荐用法）
Route::group(["middleware"=>"homelogin"],function(){
	Route::get("/homecart",function(){
		echo "this is homecart";
	});

	Route::get("/homeorder",function(){
		echo "this is homeorder";
	});

	Route::get("/homeindexs",function(){
		echo "this is homeindexs";
	});
});

//控制器使用
//请求user  列表
Route::get("/adminuserindex","Admin\UserController@index");
//请求user  添加
Route::get("/adminuseradd","Admin\UserController@add");
//请求user  执行添加
Route::post("/adminuserinsert","Admin\UserController@insert");
//请求user  删除 =》带有参数的控制器访问
Route::get("/adminuserdelete/{id}","Admin\UserController@delete");
//请求user  修改
Route::get("/adminuseredit","Admin\UserController@edit");
//执行修改
Route::post("/adminuserupdate","Admin\UserController@update");

//访问前台order类=>控制器结合中间件使用一
Route::get("/homeorderindex","Home\OrderController@index")->middleware("homelogin");
//路由组结合控制器中间件（项目推荐用法）
Route::group(["middleware"=>"homelogin"],function(){
	//请求person  列表
Route::get("/homepersonindex","Home\PersonController@index");
	//请求person  删除
Route::get("/homepersondelete","Home\PersonController@delete");

});
//资源控制器使用（项目里推荐）
//UsersController 里所有的方法都可以统统交给以/adminusers路由规则开头的路由处理
Route::resource("/adminusers","Admin\UsersController");
Route::get("/alldel","Admin\UsersController@alldel");
//资源路由组结合中间件
Route::group(["middleware"=>"homelogin"],function(){
	Route::resource("/adminshop","Admin\ShopController");
});

// laravel_03
//请求
Route::resource("/req","Admin\ReqController");
//单文件上传
Route::resource("/file","Admin\FileController");
//多文件上传
Route::resource("/files","Admin\FilesController");
Route::resource("/res","Admin\ResController");
//视图
Route::resource("/vie","Admin\VieController");
//数据库
Route::resource("/db","Admin\DbController");

// laravel_04
//后台首页
Route::resource("/admin","Admin\AdminController");
//用户管理
Route::resource("/adminuser","Admin\UserController");

//laravel_05模型
//模型会员管理
Route::resource("/adminuserss","Admin\UserssController");
//模型的会员删除之Ajax
Route::get("/adminuserssdel","Admin\UserssController@del");

//laravel_06自定义函数自定义类使用



