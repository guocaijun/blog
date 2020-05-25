<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Userinfo extends Model
{
     //与模型类关联的数据表
    protected $table="users_info";
    //是否开启自动维护时间戳字段 false 不开启 true 开启 一旦开启 默认数据表里有created_at(添加时间) 和updated_at(修改时间)
    public  $timestamps=false;

}
