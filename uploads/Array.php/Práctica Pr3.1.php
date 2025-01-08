<html>
<body>
<?php
// Ejercicio1
$datos = array("Nombre: " => "Sara", "Apellido" => "Martinez", "Edad" => "23", "Ciudad" => "Barcelona"); // Definición del array con datos
$cont = 1; // Inicialización del contador
foreach ($datos as $value) { // Bucle que recorre los valores del array
    echo "Dato$cont: $value <br>"; // Imprime el dato con el contador
    $cont++; // Incrementa el contador
}

// Ejercicio2 
$datos = array("Nombre: " => "Sara", "Apellido" => "Martinez", "Edad" => "23", "Ciudad" => "Barcelona"); // El mismo array que antes

foreach ($datos as $key => $value) { // Recorre las claves y los valores del array
    echo "$key : $value <br>"; // Imprime la clave y el valor
}

// Ejercicio3
$datos = array("Nombre: " => "Sara", "Apellido" => "Martinez", "Edad" => "23", "Ciudad" => "Barcelona"); // Array original
$cont = 1; // Inicialización del contador

$datos["Edad"] = 24; // Modificación del valor de la clave "Edad"

foreach ($datos as $value) { // Recorre los valores del array actualizado
    echo "Dato$cont: $value <br>"; // Imprime el dato con el contador
    $cont++; // Incrementa el contador
}

// Ejercicio4
$datos = array("Nombre: " => "Sara", "Apellido" => "Martinez", "Edad" => "23", "Ciudad" => "Barcelona"); // Array original
$cont = 1; // Inicialización del contador

$datos["Edad"] = 24; // Modificación de la edad

unset($datos["Ciudad"]); // Elimina el valor de la clave "Ciudad"

echo var_dump($datos); // Muestra el contenido del array después de la modificación

// Ejercicio5
$letter = "a,b,c,d,e,f"; // Cadena de letras separadas por comas

$array = explode(",", $letter); // Convierte la cadena en un array
arsort($array); // Ordena el array en orden descendente
$cont = 6; // Inicialización del contador en 6
foreach ($array as $letter) { // Recorre el array de letras
    echo "letter $cont º: $letter <br>"; // Imprime la letra con su contador
    $cont--; // Decrementa el contador
}

// Ejercicio6
$datos = array("Miguel: " => "1", "Marta" => "10", "Luís" => "7", "Isabel" => "8", "Aitor" => "4", "Pepe" => "5"); // Array con nombres y notas
arsort($datos); // Ordena el array de notas de mayor a menor
echo "Notas de estudiantes: "; // Mensaje antes de imprimir las notas
foreach ($datos as $key => $value) { // Recorre el array de estudiantes y sus notas
    echo "$key: $value "; // Imprime el nombre y la nota
}

// Ejercicio7
$datos = array("Miguel: " => "1", "Marta" => "10", "Luís" => "7", "Isabel" => "8", "Aitor" => "4", "Pepe" => "5"); // Array con notas
$longitud = count($datos); // Obtiene la cantidad de estudiantes
$sumaNotas = array_sum($datos); // Suma las notas
$notaMedia = ($sumaNotas / $longitud); // Calcula la media de las notas
echo "Media de las notas: " .  round($notaMedia, 2) . "<br>"; // Imprime la media con dos decimales

echo "Alumnos con nota por encima de la media: <br>"; // Mensaje antes de imprimir los alumnos con nota por encima de la media
arsort($datos); // Ordena las notas de mayor a menor
foreach ($datos as $key => $value) { // Recorre el array de notas
    if ($value >= $notaMedia) { // Si la nota es mayor o igual a la media
        echo $key . "<br>"; // Imprime el nombre del estudiante
    }
}

// Ejercicio8
$datos = array("Miguel: " => "1", "Marta" => "10", "Luís" => "7", "Isabel" => "8", "Aitor" => "4", "Pepe" => "5"); // Array con notas
$notaAlta = max($datos); // Obtiene la nota más alta
arsort($datos); // Ordena las notas de mayor a menor
$nombre = array_key_first($datos); // Obtiene el nombre del primer estudiante (el de mayor nota)
echo "La nota más alta es " . $notaAlta . " y el mejor alumno es " . $nombre; // Imprime la nota más alta y el mejor alumno

?>



</body>
</html>

