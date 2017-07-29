
   <?php
       $req = $_SERVER;
   //    foreach ($req as $key => $value){
   //        echo "{$key} = {$value}<br />";
   //    }
       $agent =  $_SERVER['HTTP_USER_AGENT'];
       if ($agent == 'ming'){
           //
           echo 'Hello, Brad';
       }else if (strpos($agent, 'Chrome') !== false){
           //
           echo 'Hello, Chrome';
       }else {
           //
           echo 'Hello, Browser';
       }
   ?>