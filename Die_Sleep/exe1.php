<?php
    //Tempo para o servidor carregar (dormir)
    sleep(2);
    echo 'servidor ON';
    echo '<br>';

    //Tempo para o servidor morrer
    $nome = 'Eduardo';

    if($nome == 'Irineu'){
    echo 'Seu nome é Eduardo';
    }else{
        die('morreu');//Morreu
    }
?>