<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/13
 * Time: 22:08
 */

namespace app\admin\controller;
use think\App;
use think\Controller;


class Account extends Controller
{
    public function login()
    {
        return $this->fetch();
    }
}