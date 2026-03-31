<?php
    #if condition statement
    #syntax : 
    #if(condition){
    #    statement
    #}
    $x = 10;
    if($x<5){
        echo 'x is max';
    }
    echo '<br>';
    #if , else_if condition statement
    #syntax:
    $y = 20;
        if($x!=$y){
            echo '<script>alert("X = Y")</script>';
        }else if($x<$y){
            echo '<script>alert("X is small than Y✅")</script>';
        }

    #if , else if ,else
    $z = 10; # x = 10 y = 20
    if($x>$y && $z<$y){
        echo "<script>alert('ETEC CENTER')</script>";
    }elseif($x>$y && $z==$x){
        echo 'Hello ETEC 1';
    }else{
        echo 'Your Choose invalide';
    }
?>
