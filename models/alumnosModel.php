<?php
class Alumno_model
{

    private $db;
    private $alumnos;

    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->alumnos = array();
    }

    public function get_alumnos()
    {
        $sql = "select * from alumnos";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->alumnos[] = $row;
        }
        return $this->alumnos;
    }

    public function insertar($nombres, $apoderado, $dni, $nacimiento)
    {
        $resultado = $this->db->query("insert into alumnos (nom_alum, apod_alum, dni_alum, naci_alum) 
    values ('$nombres', '$apoderado', '$dni', '$nacimiento')");
    }

    public function modificar($id, $nombres, $apoderado, $dni, $nacimiento)
    {
        $resultado = $this->db->query("update alumnos set nom_alum = '$nombres', apod_alum = '$apoderado', dni_alum = '$dni', naci_alum = '$nacimiento' 
        where id_alum = '$id'");
    }

    public function eliminar($id)
    {
        $resultado = $this->db->query("delete from alumnos where id_alum = '$id';");
    }

    public function get_alumnoId($id)
    {
        $sql = "select * from alumnos where id_alum= '$id' limit 1";
        $resultado = $this->db->query($sql);
        $row = $resultado->fetch_assoc();
        return $row;
    }
}
