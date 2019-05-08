<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;

class UserController extends Controller {
    public function login(){

//        var_export($_POST);
       if($_POST){

           $getUserName = I("post.user_name","","/^\w{3,20}$/");
           $getUserPwd  = I("post.user_pwd","","/^\w{3,20}$/");
           if ($getUserName=="" || $getUserPwd==""){
               $this->assign("errorInfo","用户名、密码格式不正确");
           }
           $result = M("user")->where("user_name='".$getUserName."'")->limit(1)->select();
           if ($result && count($result)==1){
               $user_pwd=$result[0]["user_pwd"];
              if ($user_pwd == md5($getUserPwd)){
                   echo "登录成功";

               }else{
                   $this->assign("errorInfo","用户名、密码不正确");
               }

           }else{
               $this->assign("errorInfo","用户不存在");
           }
       }


        $this->theme(flnian)->display();

    }
}