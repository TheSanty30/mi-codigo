<?php
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data["titulo"]; ?></title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 mb-5">
        <h3 class="text-center">LISTAR ALUMNO</h3>

        <table class="table mt-5 text-center">
            <thead>
                <tr>
                    <th>Nombres</th>
                    <th>Apoderado</th>
                    <th>Dni</th>
                    <th>F. Nacimiento</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data["alumnos"] as $dato) {
                    echo "<tr>";
                    echo "<td>" . $dato["nom_alum"] . "</td>";
                    echo "<td>" . $dato["apod_alum"] . "</td>";
                    echo "<td>" . $dato["dni_alum"] . "</td>";
                    echo "<td>" . $dato["naci_alum"] . "</td>";
                    echo "<td><a href='index.php?c=alumnos&a=modificar&id=" . $dato["id_alum"] . "'>Modificar</a></td>";
                    echo "<td><a href='index.php?c=alumnos&a=elimina&id=" . $dato["id_alum"] . "'>Eliminar</a></td>";
                    echo "<tr>";
                }
                ?>
            </tbody>
        </table>

        <div class="text-center">
            <button class="btn btn-primary mt-5 px-5"><a href="index.php?c=alumnos&a=nuevo" style="color: white;">Agregar</a></button>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </div>
</body>

</html>