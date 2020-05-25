<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;//Model类
class DbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //获取stu表的数据
        // $stu=DB::select("select * from stu");
        // dd($stu);
        // echo "<pre>";
        // var_dump($stu);die;
        // return view("Admin.Db.index",['stu'=>$stu]);
        //数据库基本操作
        //查询数据
        // $stu=DB::select("select * from stu");
        //插入数据
        // DB::insert("insert into stu(name,password)values('wenlong','38')");
        //修改
        // DB::update("update stu set name='ddd' where id=5");
        //删除
        // DB::delete("delete from stu where id=5");
        //一般语句
        //删除表
        // DB::statement("drop table stu");
        //创建表
        // DB::statement("create table stu(
        //             id int(10) auto_increment primary key not null,
        //             name varchar(255) not null,
        //             password varchar(255) not null
        //             )");
        // dd($stu);
        //构造器(连贯操作) 项目和企业推荐用法 
        // M("stu")->limit()->select();
        //获取所有数据
        // $res=DB::table("stu")->get();
        //获取单条数据
        // $resone=DB::table("stu")->where("id","=",2)->first();
        //获取单条结果中的某个字段值
        // $name=DB::table("stu")->where("id","=",3)->value("name");
        //获取一列数据
        // $names=DB::table("stu")->pluck("name");
        // dd($name);

                //连贯的插入
        //插入单条数据
        // $res=DB::table("stu")->insert(['name'=>"qitao","password"=>"123"]);
        //插入多条
        // $ress=DB::table("stu")->insert([
        //     ['name'=>"qitao1","password"=>"123"],
        //     ['name'=>"chengchangchang","password"=>"1234"]
        //                                 ]);

        //插入数据的同时获取数据id
        // $id=DB::table("stu")->insertGetId(['name'=>"qitao2","password"=>"1234"]);
        //构造器跟新
        // $ress=DB::table("stu")->where("id","=",7)->update(['name'=>'junge1']);
        //删除数据
        // $data=DB::table("stu")->where("id","=",7)->delete();
        //其他连贯方法
        //获取stu表里的指定id和name
        // $data1=DB::table("stu")->select("id","name")->get();
        //搜索name字段里面含有q关键词数据
        // $data2=DB::table("stu")->where("name","like","%q%")->get();
        //查找stu表里的id为1并且name=11
        // $data3=DB::table("stu")->where("id","=",1)->where("name","=","11")->get();
        //查找stu表里的id为1的数据或者password =2
        // $data4=DB::table("stu")->where("id","=",1)->orWhere("password","=","22")->get();
        //查找数据格式为降序排序
        // $data5=DB::table("stu")->orderBy("id","desc")->get();
        // select * from stu limit 4,4
        //分页
        // $data6=DB::table("stu")->paginate(2);
        // return view("Admin.Db.index",['stu'=>$data6]);
        // A id  B a_id
        // select A.id as aid,A.name as aname,B.id as bid,B.name as bname from A,B where A.id=B.a_id;
        //连贯的表关联
        //两表关联 class brand
        // $data7=DB::table("class")->join("brand","class.id","=","brand.class_id")->select("class.id as  cid","class.name as cname","brand.id as bid","brand.name as bname")->get();
        //三表关联
        // $data8=DB::table("class")->join("brand","class.id","=","brand.class_id")->join("shop","brand.id","=","shop.brand_id")->get();
        //其他方法
        // $data9=DB::table("stu")->count();
        //获取最大值
        // $max=DB::table("stu")->max("password");
        //获取平均值
        // $avg=DB::table("stu")->avg("id");
        // dd($data6);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
