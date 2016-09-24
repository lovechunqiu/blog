<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //定义表名
    protected $table = 'user';
    //设置主键
    protected $primaryKey = 'user_id';
    //过滤掉时间
    public $timestamps = false;
}
