<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Publicationes</title>
</head>
<body>
<?php
    echo "<h1>Listado de publicaciones</h1>";
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>";
    echo "Id";
    echo "</th>";
    echo "<th>";
    echo "Nombre";
    echo "</th>";
    echo "<th>";
    echo "Fecha";
    echo "</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    foreach ($datos as $dato) {
        echo "<tr>";
        echo "<td>";
        echo $dato["id"] . "<br/>";
        echo "</td>";
        echo "<td>";
        echo $dato["name"] . "<br/>";
        echo "</td>";
        echo "<td>";
        echo $dato["publishedYear"] . "<br/>";
        echo "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
    ?>  

</body>
</html>