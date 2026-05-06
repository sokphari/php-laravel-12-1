<?php
    include '../config.php';
    
    setcookie('is_login',$user['email'],time()-3600,"/");
    setcookie('role',$user['role'],time()-3600,"/");