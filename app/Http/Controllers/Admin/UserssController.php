<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use App\Models\Userss;//导入模型类
class UserssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $k=$request->input("keyword");
        $k1=$request->input("keyword1");

        //通过模型类获取列表数据
        $user=Userss::where("username","like","%".$k."%")->where("email","like","%".$k1."%")->get();
        //加载模板
        return view("Admin.Userss.index",['user'=>$user,'request'=>$request->all(),'k'=>$k,'k1'=>$k1]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Admin.Userss.add");
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
        $data=$request->except(['repassword',"_token"]);
        //密码加密
        $data['password']=Hash::make($data['password']);
        //加状态
        $data['status']=1;//1 开启 0 禁用
        $data['token']=rand(1,100000);//1 开启 0 禁用
        // dd($data);
          //模型做数据添加
        if(Userss::create($data)){
            // echo "ok";
            return redirect("/adminuserss")->with("success","添加成功");
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
        // echo "会员详情id为".$id;
        //调用模型类里写好获取会员详情信息userinfo
        $info=Userss::find($id)->userinfo;
        // dd($info);
        return view("Admin.Userss.info",['info'=>$info]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // echo $id;
        //通过模型类获取需要修改的数据
        $user=Userss::where("id","=",$id)->first();
        return view("Admin.Userss.edit",['user'=>$user]);
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
        // echo $id;
        $data=$request->except(['_method',"_token"]);
        // dd($data);
        if(Userss::where("id","=",$id)->update($data)){
            return redirect("/adminuserss")->with("success","修改成功");
        }else{
            return back()->with("error","修改失败");
        }
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
        //通过模型做删除
        if(Userss::where("id","=",$id)->delete()){
            return redirect("/adminuserss")->with("success","删除成功");
        }else{
            return redirect("/adminuserss")->with("error","删除失败");
        }
    }


        public function del(Request $request)
    {
        //获取Ajax请求的id
        $id=$request->input("id");
        // echo $id;
        //直接删除数据
        if(Userss::where("id","=",$id)->delete()){
            //返回json格式
            return response()->json(['msg'=>'ok']);
        }else{
            return response()->json(['msg'=>'error']);

        }
    }
}
