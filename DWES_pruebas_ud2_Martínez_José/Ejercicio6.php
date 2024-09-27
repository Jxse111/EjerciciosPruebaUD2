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
        <h3>6.Crea una variable $modulo = "DWES", a continuación cambia el valor de la variable por $modulo = 0738. 
            Imprime por pantalla el contenido de la variable cada vez, e indica en comentarios si ha podido 
            realizarse la operación y porqué.</h3>
        <p>Ambas variables tienen distinta información y  no son del mismo tipo, 
            ya que la primera variable es de tipo cadena de texto y la segunda es una variable de tipo entero, 
            su valor solo puede ser númerico.</p>
        <p>Primera variable(cadena de texto):</p>
        <?php
        $modulo = "DWES";

        echo $modulo;
        ?>
        <p>Segunda variable(número entero):</p>
        <?php
        $modulo = 0738;

        echo $modulo;
        //Muestra un error al convertir la variable de texto a númerico porque empieza por 0 y ¡NO! puede empezar por 0..
        ?>
    </body>
</html>

