<?php  
   $redis = new Redis(); 
   $redis->connect('redis', 6379); //连接Redis
   //$redis->auth('mypasswords123sdfeak'); //密码验证
   $redis->select(0);//选择数据库2
   $redis->set("name", 'zhang');
   var_dump($redis->get("name"));//输出value
