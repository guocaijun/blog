<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //列表
    public function index()
    {
        // echo "this is index";
        //加载模板
        return view("Admin.Users.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //加载添加模板
    public function create()
    {
        // echo "this is create";
        //加载模板
        return view("Admin.Users.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //执行添加
    public function store(Request $request)
    {
        echo "this is store";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //查询单条数据
    public function show($id)
    {
        echo "this is one data id is:".$id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //加载修改模板
    public function edit($id)
    {
        // echo "this is edit id is".$id;
        return view("Admin.Users.edit");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //执行修改
    public function update(Request $request, $id)
    {
        echo "this is update id is ".$id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //删除数据
    public function destroy($id)
    {
        echo "this is destroy id is:".$id;
    }

    //全部都删除
    public function alldel(){
    	echo "this is alldel";
    }
}
