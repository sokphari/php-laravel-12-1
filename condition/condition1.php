<?php
    //switch condition
    $d = 'Fri';
    $d = date('D');
    echo $d;
    switch($d){
        case 'Mon':
            echo 'Today is Monday';
            break;
        case 'Tue':
            echo 'Today is Thue';
            break;
        case 'Wed':
            echo 'Today is Wed';
            break;
        case 'Thu':
            echo 'Today is Thu';
            break;
        case 'Fri':
            echo 'Today is Fri';
            break;
        case 'Sat':
            echo 'Today is Sat';
            break;
        case 'Sun':
            echo 'Today is sun';
            break;

        default:
        echo 'Today invalide';


    }

?>