<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;//导入哈希加密类
use App\Http\Requests\AdminUserInsert;//导入表单校验请求类
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //用户管理列表
    public function index(Request $request)
    {
        //获取搜索的关键词
        $k=$request->input("keyword");
        $k1=$request->input("keyword1");

        // echo $k;
        //获取数据
        $user=DB::table("users")->where("username","like","%".$k."%")->where("email","like","%".$k1."%")->paginate(2);
        // echo "this is user index";
        return view("Admin.User.index",['user'=>$user,'request'=>$request->all(),'k'=>$k,'k1'=>$k1]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // echo "this is user create";
        return view("Admin.User.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminUserInsert $request)
    {
        // dd($request->all());
        //去除repassword _token
        $data=$request->except(['_token','repassword']);
        //加密密码
        $data['password']=Hash::make($request->input("password"));
        $data['status']=0;
        $data['token']=rand(1,10000);

        // dd($data);
        $res=DB::table("users")->insert($data);
        if($res){
            // echo "ok";
            // 在跳转的同时设置session
            return redirect("/adminuser")->with("success","添加成功");
        }else{
            // echo "error";
            return back()->with("error","添加失败");
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
        // echo $id;
        if(DB::table("users")->where("id","=",$id)->delete()){
            return redirect("/adminuser")->with("success","删除成功");
        }else{
            return redirect("/adminuser")->with("error","删除失败");
        }
    }
}
