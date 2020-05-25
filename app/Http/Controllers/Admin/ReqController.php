<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //声明请求对象 Request请求类   $request约束的请求对象
    public function index(Request $request)
    {
        // echo "this is index";
        //打印下请求对象(请求报文)
        // echo "<pre>";
        // print_r($request);
        // dd($request);
        //打印数据的同时终止脚本
        // dd($request);
        // echo "永远的处男，打一个作家,莎士比亚";
        // echo "永远的处女，打一个作家,毕加索";

        //基本信息获取
        //获取请求路径
        // $path=$request->path();
        //获取完整url
        // $url=$request->url();
        //获取请求方式
        // $method=$request->method();
        //检测请求方式
        // $res=$request->isMethod("GET");
        //获取所有的参数
        // $allparams=$request->all();
        //获取单个参数
        // $param=$request->input("name");
        //获取指定的部门参数
        // $onlyparam=$request->only(['name','hobby']);
        //获取除了某个参数之外的参数
        // $exceptparam=$request->except(['hobby']);
        //设置默认值
        // $name=$request->input('name','sm');
        //检测参数是否存在
        // $isname=$request->has('sex');
        //设置cookie一
        // return response("hahaha")->withCookie("php218","goods",1);
        //设置cookie二
        // \Cookie::queue("php","lamp",1);
        //获取cookie方式一
        // echo $request->cookie("php218");
        //获取cookie方式二
        // echo \Cookie::get('php');
        //存储session
        // session(['name1'=>'liuyan']);
        //获取sesison
        echo session('name1');
        //销毁session
        // $request->session()->pull('name1');
        // dd($isname);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载模板
        return view("Admin.Req.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        //获取用户名
        $name=$request->input("name");
        //将所有的参数写入闪存里
        // $request->flash();
        //将部分参数写入到闪存里
        // $request->flashOnly('phone');
        //将除去某个参数之外的参数写入闪存里
        // $request->flashExcept('phone');
        if($name==null){
            //阻止表单提交的同时 将所有的参数写入到闪存里
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
