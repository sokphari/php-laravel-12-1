<?php

    #function non return 
    #1. non function return non parameter
    #2. non function return with parameter

    function Sum(){
        $i = 100; 
        $j = 200;
        $sum = $i + $j;
        echo $sum;
    }

    echo " Value in Sum Function : ".Sum() + 100;
    echo '<br>';
    function mul($x,$y){
        $Mul = $x * $y;
        echo $Mul;
    }
    echo "Value Function With parameter : ".mul(500,100).'<br>';


    #function return 
    #1.function return non parameter
    #2.function return with parameter

    function Calculator(){
        $a = 200;
        $b = 400;
        $calcult = $a + $b;
        return $calcult;
    }

    echo "Value function return non para : ".Calculator()*10;
    echo '<br>';
    function cal($x,$y){
      return $x-$y;
    }
    echo "Value function return with para : ".cal(100,200)*100;
