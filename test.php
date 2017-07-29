
<?php
    $req = $_SERVER;
//    foreach($req as $key => $value){
//        echo "{$key} = {$value} <br/>";
//    }
//    echo $_SERVER['HTTP_USER_AGENT'];

    if($agent == 'ming'){
         echo 'hello ming';
    }else if(strpos($agent,'Chrome')!= false){
         echo 'hello chrome browser';
    }else{
        echo 'hello browser';
    }

?>