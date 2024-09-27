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
        <h3>4.Crea una variable $edad = 27 y otra variable $edad = "27". 
            Comprueba si ambas variables tienen la misma información y además si es del mismo tipo, e imprime por
            pantalla el resultado de esas comprobaciones, e indica en comentarios por qué crees que es así.</h3>
        <p>Ambas variables tienen la misma información ,pero no son del mismo tipo, 
            ya que la primera variable es de tipo entero y la segunda es una cadena texto porque utiliza
            las comillas dobles(" ").</p>
        <?php
        $edad = 27;
        echo "Primera variable(Valor de numero entero): ";
        echo $edad; //Mostramos la edad en formato entero
        ?>
        <br>
        <br>
        <?php
        $edad = "27";
        echo "Segunda variable(Valor de cadena de texto): ";
        echo $edad; //Mostramos la edad en formato cadena de texto
        //Se modifica el valor de la variable a cadena de texto porque utilizamos la misma variable.
        ?>
        <br>
        <br>
        <?php
        if ($edad === $edad) {
            echo "-Comprobación con una condición if: Es el mismo dato, pero de distinto tipo.";
        }
        ?>
        <br>
    </body>
</html>


