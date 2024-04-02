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
    <div class="d-flex justify-content-center my-5">
        <form id="nuevo" name="nuevo" method="post" action="index.php?c=alumnos&a=guardar" autocomplete="off" class="border border-3 p-5" style="width: 500px;">
            <h3 class="text-center pb-5">AGREGAR ALUMNO</h3>
            <div class="form-group row pb-3">
                <label class="col-sm-4 col-form-label">Nombres:</label>
                <div class="col-sm-8">
                    <input type="text" id="nombres" name="nombres" class="form-control" />
                </div>
            </div>
            <div class="form-group row pb-3">
                <label class="col-sm-4 col-form-label">Apoderado:</label>
                <div class="col-sm-8">
                    <input type="text" id="apoderado" name="apoderado" class="form-control" />
                </div>
            </div>
            <div class="form-group row pb-3">
                <label class="col-sm-4 col-form-label">Dni:</label>
                <div class="col-sm-8">
                    <input type="text" id="dni" name="dni" class="form-control" />
                </div>
            </div>
            <div class="form-group row pb-3">
                <label class="col-sm-4 col-form-label">F.Nacimiento:</label>
                <div class="col-sm-8">
                    <input type="text" id="fnacimiento" name="fnacimiento" class="form-control" />
                </div>
            </div>
            <div class="text-center">
                <button id="guardar" name="guardar" type="submit" class="btn btn-primary mt-5 px-5">Guardar</button>
            </div>
        </form>

</body>

</html>