<?php
    function mostrarEduardo(){
        echo '<h2>Nome: Eduardo</h2>';
    }
    
    mostrarEduardo();


    function mostrar($olhos,$idade){
        echo "Olhos: $olhos";
        echo '<br>';
        echo "Idade: $idade";
    }
    
    mostrar('Castanhos',21);

    echo '<hr>';

    function printar($peso, $altura){
        echo "Peso: $peso";
        echo "<br>";
        echo "Altura: $altura";
    }
    printar(80,183);
    
?>