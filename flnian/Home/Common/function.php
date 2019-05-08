<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/5 0005
 * Time: 10:45
 */
function get_navbar(){

    $navbar = M("nav");
    $ret = $navbar->order("nav_index" )->select();
//        var_export($ret);
    return $ret;
}