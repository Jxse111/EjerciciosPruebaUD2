<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>DWES_pruebas_ud2_Martínez_José</title>
    </head>
    <body>
        <h1>Tarea para practicar</h1>
        <hr>
        <h3>5.Crea dos variables $deposito = 0 y $deposito= false. Comprueba si ambas variables tienen la misma
            información y además si es del mismo tipo, e imprime por pantalla el resultado de esas comprobaciones.</h3>
        <p>Ambas variables tienen distinta información y  no son del mismo tipo, 
            ya que la primera variable es de tipo entero y la segunda es una variable booleana, su valor solo puede 
            ser "true" o "false".</p>
        <p>Primera variable(número entero):</p>
        <?php
        $deposito = 0;
        echo $deposito; //Mostramos la variable con el valor de número entero.
        ?>
        <p>Segunda variable(booleano):</p>
        <?php
        $deposito = false;
        echo $deposito; //no muestra nada por pantalla, porque su valor se debe a una condicion.
        echo "-No muestra contenido";
        ?>
        <br>
        <br>
        <?php
        if ($deposito === $deposito) {
            echo "-Comprobación con una condición if: Es la misma variable, pero de distinto tipo y dato.";
        }
        ?>
    </body>
</html>


