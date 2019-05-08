<?php
return array(
	//'配置项'=>'配置值'
   // 'TMPL_ENGINE_TYPE' =>'PHP'

//    'DB_TAPE'   => 'mysql',
//    'DB_USER'   => 'root',
//    'DB_PWD'    => 'root',
//    'DB_PREFIX' => 'tp_',
//    'DB_DSN'    => 'mysql:host=localhost;post=3306;dbname=tp;charset=utf8'
      'db_type'   => 'mysql',
      'db_user'   => 'root',
      'db_pwd'    => 'root',
      'db_host'   => 'localhost',
      'db_port'   => '3306',
      'DB_PREFIX' => 'tp_',
      'db_name'   => 'tp',
      'URL_ROUTER_ON'    => true,
      'URL_ROUTER_RULES' => array(
         'login' => '/User/login'
        ),

);