<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Userss extends Model
{
    //与模型类关联的数据表
    protected $table="users";
    //是否开启自动维护时间戳字段 false 不开启 true 开启 一旦开启 默认数据表里有created_at(添加时间) 和updated_at(修改时间)
    public  $timestamps=true;
    //可被批量赋值的属性  'id',"username","password","email","phone" 数据表的字段 使用模型添加数据的时候，必须要添加这些字段
    protected $fillable=['id',"username","password","email","phone","status","token"];
    //修改器 对数据表的数据做自动转换 Status 数据表字段  $value 要转换的值
    public function getStatusAttribute($value){
    	$status=[0=>'禁用',1=>"开启"];
    	return $status[$value];
    }

    //获取会员对应的详情信息 user_id 关联id  Userinfo 关联模型类
    public function userinfo(){
    	return $this->hasOne("App\Models\Userinfo","user_id");
    }
}
