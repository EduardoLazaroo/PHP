<?php

    $conteudo = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
    Sint vitae totam assumenda minima facere. Excepturi facilis, 
    ipsa consectetur ad alias obcaecati non libero iusto saepe veniam ab 
    inventore aut incidunt!';
    //Serve para recortar ma String
    echo substr($conteudo,0,20);

    echo '<hr>';

    //serve para separar nomes
    $nome = "Eduardo Lázaro Soares de Oliveira";
    $nomes = explode(' ',$nome);
    print_r($nomes);

    echo '<hr>';

    //serve para juntas nomes
    $nomes = implode(' ',$nomes);
    echo $nomes;

?>