<?php

class Conectar
{
    public static function conexion()
    {
        $conexion = new mysqli("localhost", "root", "", "colegio");
        return $conexion;
    }
}
