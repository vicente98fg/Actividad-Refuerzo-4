<?php

$conector = new mysqli("localhost", "root", "", "liga");
if ($conector->connect_errno) {
    echo "Fallo al conectar a MySQL: (".$conector->connect_errno.")" . $conector->connect_error;
} else {
    $consulta="INSERT INTO equipo (id_equipo, nombre, ciudad, web, puntos) VALUES ('7', 'El Deci', 'Catarroja City', 'Sin web', '1000')";
    //echo $consulta;
    $resultado = $conector->query($consulta);
    //if(!resultado) echo $conector->error;

    $consulta="SELECT * FROM equipo WHERE id_equipo=7";
    //$consulta="SELECT * FROM equipo ORDER BY id_equipo DESC LIMIT 1";
    $resultado = $conector->query($consulta);
}

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="utf-8" />
</head>
<body>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<table>
    <tr>
        <td><b>ID Equipo</b></td>
        <td><b>Nombre Equipo</b></td>
        <td><b>Ciudad Equipo</b></td>
        <td><b>Web Equipo</b></td>
        <td><b>Puntos Equipo</b></td>
    </tr>

    <?php
     foreach ($resultado as $equipo) {
         echo "<tr>";
         echo "<td>".$equipo['id_equipo']."</td>";
         echo "<td>".$equipo['nombre']."</td>";
         echo "<td>".$equipo['ciudad']."</td>";
         echo "<td>".$equipo['web']."</td>";
         echo "<td>".$equipo['puntos']."</td>";
         echo "</tr>";
     }

    ?>

</table>


</table>

</body>
</html>

