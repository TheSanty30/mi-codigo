<?php

class AlumnosController
{
    public function __construct()
    {
        require_once "models/alumnosModel.php";
    }

    public function index()
    {
        $alumnos = new Alumno_model();
        $data["titulo"] = "Alumnos";
        $data["alumnos"] = $alumnos->get_alumnos();

        require_once "views/alumnos/alumnos.php";
    }

    public function nuevo()
    {
        $data["titulo"] = "Alumnos";
        require_once "views/alumnos/Alumnos_nuevo.php";
    }

    public function guardar()
    {
        //insertar($nombres, $apoderado, $dni, $nacimiento)
        $nombres = $_POST['nombres'];
        $apoderado = $_POST['apoderado'];
        $dni = $_POST['dni'];
        $nacimiento = $_POST['fnacimiento'];

        $alumnos = new Alumno_model();
        $alumnos->insertar($nombres, $apoderado, $dni, $nacimiento);

        $data["titulo"] = "Alumnos";
        $this->index();
    }

    public function modificar($id)
    {
        $alumnos = new Alumno_model();
        $alumnos->get_alumnoId($id);
        $data["id_alum"] = $id;
        $data["alumnos"] = $alumnos->get_alumnoId($id);
        $data["titulo"] = "Alumnos";
        require_once "views/alumnos/Alumnos_modifcar.php";
    }

    public function actualizar()
    {
        $id = $_POST['id'];
        $nombres = $_POST['nombres'];
        $apoderado = $_POST['apoderado'];
        $dni = $_POST['dni'];
        $nacimiento = $_POST['fnacimiento'];

        $alumnos = new Alumno_model();
        $alumnos->modificar($id, $nombres, $apoderado, $dni, $nacimiento);

        $data["titulo"] = "Alumnos";
        $this->index();
    }

    public function elimina($id)
    {
        $alumnos = new Alumno_model();
        $alumnos->eliminar($id);

        $data["titulo"] = "Alumnos";
        $this->index();
    }
}
