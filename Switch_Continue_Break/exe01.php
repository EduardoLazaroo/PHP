<?php
    $nome = "Eduardo";

    //Switch-Caso
    switch($nome){
        case 'Guilherme':
            echo 'minha variavel é Guilherme';
            break;
        case 'Eduardo':
            echo 'minha variavel é Eduardo';
            break;
    }

    echo '<hr>';

    //for 
    for($i = 0; $i < 15; $i++){
        echo $i;
        echo '<hr>';
        if($i == 5)
            break;
    }

?>