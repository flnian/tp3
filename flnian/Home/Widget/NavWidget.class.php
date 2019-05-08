<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/5 0005
 * Time: 14:19
 */
namespace Home\Widget;
use Think\Controller;

class NavWidget extends Controller{
    public function menu(){
        $navbar = M("nav");
        $ret = $navbar->order("nav_index" )->select();
//        var_export($ret);
        return $ret;
    }
}