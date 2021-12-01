<?php

    //Array Single

    $arr = ['Eduardo','Klauber'];
    $arr = array('Eduardo', 'chave' => 'Alvaro');

    $arr[0] = 'Eduardo';
    $arr[] = 'Gabriel';

    foreach ($arr as $key => $value) {
        echo $key;
        echo ' = ';
        echo $value;
        echo '<br>';
    };

    echo $arr[0];

    echo '<hr>';

    //Array Multidimensionais

    $arr2 = array( array('Vitor','Nakamura'), array(23,45));
    echo $arr2[0][0];
    echo '<br>';
    echo $arr2[0][1];
    echo '<br>';
    echo $arr2[1][1];
    echo '<br>';
    echo $arr2[1][0];


?>