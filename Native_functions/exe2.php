<?php

    function calculadora($n1 = 10, $n2 = 5){
        echo($n1+$n2);
    }
    calculadora();

    echo '<hr>';
    
    function verdade(){
        return true;
    }

    echo $variavel = verdade();
   
    echo "<hr>";

   function retornaString(){
       return 'Retorna String';
   }

   echo retornaString();

?>