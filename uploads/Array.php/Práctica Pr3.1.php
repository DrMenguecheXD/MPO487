<html>
<body>
<?php
// Ejercicio1
$datos = array("Nombre: " => "Sara", "Apellido" => "Martinez", "Edad" => "23", "Ciudad" => "Barcelona");
$cont = 1;
foreach ($datos as $value) {
    echo "Dato$cont: $value <br>";
    $cont++;
}

// Ejercicio2 
$datos = array("Nombre: " => "Sara", "Apellido" => "Martinez", "Edad" => "23", "Ciudad" => "Barcelona");

foreach ($datos as $key => $value) {
    echo "$key : $value <br>";
}
// Ejercicio3
$datos = array("Nombre: " => "Sara", "Apellido" => "Martinez", "Edad" => "23", "Ciudad" => "Barcelona");
$cont = 1;

$datos["Edad"] = 24;

foreach ($datos as $value) {
    echo "Dato$cont: $value <br>";
    $cont++;
}
// Ejercicio4
$datos = array("Nombre: " => "Sara", "Apellido" => "Martinez", "Edad" => "23", "Ciudad" => "Barcelona");
$cont = 1;

$datos["Edad"] = 24;

unset($datos["Ciudad"]);

echo var_dump($datos);

// Ejercicio5
$letter = "a,b,c,d,e,f";

$array = explode(",", $letter);
arsort($array);
$cont = 6;
foreach ($array as $letter) {
    echo "letter $cont º: $letter <br>";
    $cont--;
}

// Ejercicio6
$datos = array("Miguel: " => "1", "Marta" => "10", "Luís" => "7", "Isabel" => "8", "Aitor" => "4", "Pepe" => "5");
arsort($datos);
echo "Notas de estudiantes: ";
foreach ($datos as $key => $value) {
    echo "$key: $value ";
}

// Ejercicio7
$datos = array("Miguel: " => "1", "Marta" => "10", "Luís" => "7", "Isabel" => "8", "Aitor" => "4", "Pepe" => "5");
$longitud = count($datos);
$sumaNotas = array_sum($datos);
$notaMedia = ($sumaNotas / $longitud);
echo "Media de las notas: " .  round($notaMedia, 2) . "<br>";

echo "Alumnos con nota por encima de la media: <br>";
arsort(array: $datos);
foreach ($datos as $key => $value) {
    if ($value >= $notaMedia) {
        echo $key . "<br>";
    }
}

// Ejercicio8
$datos = array("Miguel: " => "1", "Marta" => "10", "Luís" => "7", "Isabel" => "8", "Aitor" => "4", "Pepe" => "5");
$notaAlta = max($datos);
arsort(array: $datos);
$nombre = array_key_first($datos);
echo "La nota más alta es " . $notaAlta . " y el mejor alumno es " . $nombre;

?>



</body>
</html>

