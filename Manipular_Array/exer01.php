<?php

    //array marge serve para unir dois arrays

    $array1 = array("chave1" => "valor1", "chave2" => "valor2");
    $array2 = array("chave3" => "valor3", "chave4" => "valor4");
    $array3 = array("chave5" => "valor5");

    $result = array_merge($array1, $array2, $array3);//junta os arrays
    print_r($result);

    echo '<hr>';

    //array instersect key serve para retornar valores com a mesma chave

    $array1 = array("chave1" => "valor1", "chave2" => "valor2");
    $array2 = array("chave1" => "outra valor da mesma chave", "chave4" => "valor4");

    print_r(array_intersect_key($array1, $array2));

    echo '<hr>';

    //array map serve para aplicar uma função em todos os valores do array

    $arr = ['<p>Eduardo</p>', 'Guilherme', '<h1>Klauber<h1>'];
    print_r(array_map('strip_tags',$arr))


?>