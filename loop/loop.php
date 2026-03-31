<?php
    #for loop
    #syntax:
    #    for(start;stop;step){
    #        statement
    #    }

    #$x = 100;
    #for($i = 0; $i <= $x; $i+=10){
    #    echo "Hello Loop 1  ".$i.'<br>';
    #}
    // 0 
    // 10 
    // 20
    //while loop 
    #syntax:
    #    start;
    #    while(stop){
    #        //statement
    #        step;
    #    }

    #$j = 50;
    #while($j<=100){
    #    echo 'Hello Etec';
    #    $j+=10;
    #}

    //do while loop
    #syntax:
    #start;
    #    do{
    #        //statement
    #        step;
    #    }while(stop)

    #$a = 100;
    #do{
    #    echo "Hello $a".'<br>';
    #    $a++;
    #}while($a==1000);


    #foreach loop 
    #syntax:
    #    foreach($collection as $value){
    #        statement;
    #    }

    $array = [
        'id'=>1,
        'name'=>'vathai'
    ];
    echo $array['name'];
    #foreach($array as $arr){
    #    echo $arr['name'];
    #}
?>