<?php
// Definición del inventario de cómics
$inventario = [
    'suspense_terror' => [ // Categoría 'suspense_terror'
        ['titulo' => 'The Long Halloween', 'editorial' => 'DC', 'autor' => 'Tim Sale', 'idioma' => 'Inglés', 'precio' => 20, 'stock' => 10], // Cómic 1
        ['titulo' => 'Uzumaki', 'editorial' => 'Planeta', 'autor' => 'Junji Ito', 'idioma' => 'Japonés', 'precio' => 25, 'stock' => 15], // Cómic 2
        ['titulo' => 'Tomie', 'editorial' => 'Planeta', 'autor' => 'Junji Ito', 'idioma' => 'Japonés', 'precio' => 25, 'stock' => 20], // Cómic 3
    ],
    'accion' => [ // Categoría 'accion'
        ['titulo' => 'Berserk Deluxe Edition 1', 'editorial' => 'Dark Horse', 'autor' => 'Kentaro Miura', 'idioma' => 'Japonés', 'precio' => 30, 'stock' => 12], // Cómic 4
    ],
    // Puedes agregar más categorías y cómics según sea necesario
];

// main
// antes descuento
mostrarComicsEnTabla(); // Mostrar los cómics en tabla antes del descuento
mostrarValorAlmacen(); // Mostrar el valor del almacén antes del descuento
// aplicar descuento de manga
aplicarDescuentoManga(); // Aplicar descuento a los cómics en japonés
// mostramos el inventario actualizado
mostrarComicsEnTabla(); // Mostrar los cómics en tabla después del descuento
mostrarValorAlmacen(); // Mostrar el valor del almacén después del descuento

function mostrarComicsEnTabla() // Función para mostrar los cómics en una tabla
{
    global $inventario; // Accede al inventario global
    echo '<br>';
    echo '<table border="1">'; // Inicia la tabla HTML
    echo '<tr><th>Categoría</th><th>Título</th><th>Editorial</th><th>Autor</th><th>Idioma</th><th>Precio</th><th>Stock</th></tr>'; // Cabecera de la tabla

    foreach ($inventario as $categoria => $comics) { // Recorre las categorías del inventario
        foreach ($comics as $comic) { // Recorre cada cómic de la categoría
            echo '<tr>'; // Inicia una nueva fila de la tabla
            echo "<td>$categoria</td>"; // Imprime la categoría del cómic
            echo "<td>{$comic['titulo']}</td>"; // Imprime el título del cómic
            echo "<td>{$comic['editorial']}</td>"; // Imprime la editorial del cómic
            echo "<td>{$comic['autor']}</td>"; // Imprime el autor del cómic
            echo "<td>{$comic['idioma']}</td>"; // Imprime el idioma del cómic
            echo "<td>{$comic['precio']}</td>"; // Imprime el precio del cómic
            echo "<td>{$comic['stock']}</td>"; // Imprime el stock del cómic
            echo '</tr>'; // Cierra la fila de la tabla
        }
    }

    echo '</table>'; // Cierra la tabla
}

function mostrarValorAlmacen() // Función para mostrar el valor total del almacén
{
    global $inventario; // Accede al inventario global
    $totalValor = 0; // Inicializa el total del valor

    foreach ($inventario as $categoria => $comics) { // Recorre las categorías del inventario
        foreach ($comics as $comic) { // Recorre cada cómic de la categoría
            $totalValor += $comic['precio'] * $comic['stock'];  // Sumar el valor total (precio * stock)
        }
    }
    
    echo '<br>Total valor del almacén: ' . $totalValor . '€<br>'; // Muestra el total del valor
}

function aplicarDescuentoManga() // Función para aplicar un descuento a los cómics en japonés
{
    global $inventario; // Accede al inventario global

    // Iteramos sobre todo el inventario para aplicar el descuento
    foreach ($inventario as $categoria => &$comics) { // Recorre las categorías del inventario
        foreach ($comics as &$comic) { // Recorre cada cómic de la categoría
            if ($comic['idioma'] == 'Japonés') { // Si el idioma del cómic es 'Japonés'
                $comic['precio'] = $comic['precio'] * 0.7; // Aplicar descuento del 30%
            }
        }
    }
}

?>
