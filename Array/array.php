<?php

    # array 1d 
    #$array1d = [];
    #$array1D = array();

    // $array1d = ['DOG','CAT','TIGER','FISH','CAT','TIGER1','CAT','TIGER','CAT',
    // 'TIGER','CAT','TIGER','CAT','TIGER','CAT','TIGER',
    // 'CAT','TIGER','CAT','TIGER','CAT','TIGER','CAT','TIGER','CAT','TIGER',
    // 'CAT','TIGER',
    // 'CAT','TIGER','CAT','TIGER','CAT','TIGER','CAT','TIGER','CAT','TIGER10',];

    // echo  'Result : '.$array1d[0].'<br>';
    // echo  'Result : '.$array1d[2].'<br>';

    // for($i = 0; $i<count($array1d); $i++){
    //     echo "Result : ".$array1d[$i].'<br>';
    // }

    // foreach($array1d as $index=>$arr){
    //     echo "$index : Foreach array : ".$arr.'<br>';
    // }

    #array2d
    #$array2d = [
    #    [],
    #    [],
    #    []
    #];
    #$array2D = array(
    #    array(),
    #    array(),
    #    array()
    #);
    $array2d = [
        //col 0 //col 1 // col 2
        ['BMW','TEZLA','LAMBU'], //row 0
        ['TOYOTA','FORT','CAMARY'], // row 1
        ['BOKATI','MASADES','VIGO'], // row 2
        ['MORNING','PRIUS','ROSROY'], // row 3
    ];

    echo 'Array 2D : '.$array2d[0][0].'<br>';
    echo 'Array 2D : '.$array2d[0][1].'<br>';
    echo 'Array 2D : '.$array2d[3][1].'<br>';
    echo 'Array 2D : '.$array2d[2][2].'<br>';
    echo 'Array 2D : '.$array2d[1][1].'<br>';

    for($row = 0; $row < 4; $row++){
        for($col = 0; $col < 3; $col++){
            echo 'Value of an array 2D : '.$array2d[$row][$col].'<br>';
        }
    }
    echo '=============================<br>';
    foreach($array2d as $key=>$arr2d){
        foreach($arr2d as $arr){
            echo 'Result of an array2d : '.$arr.'<br>';
        }
    }
    echo '============================<br>';
    foreach($array2d as [$row,$col]){
      echo "$row Result value : $col";
    }
    echo "============================<br>";
    $arrayassociate = [
        //'key' => 'value'
        'id' => 1,
        'name' => "Sokchan",
        'gender' => 'male',
    ];

    echo 'Result ArrayAcc : '.$arrayassociate['id'].'<br>';
    echo 'Result ArrayAcc : '.$arrayassociate['name'].'<br>';
    echo 'Result ArrayAcc : '.$arrayassociate['gender'].'<br>';

    print_r($arrayassociate);
    echo '<br>';
    foreach($arrayassociate as $key=>$arr){
        echo "$key result arrayAcc : $arr".'<br>';
    }

?>