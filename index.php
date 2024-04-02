<?php

require_once "config/config.php";
require_once "core/routes.php";
require_once "config/database.php";
require_once "controllers/alumnosController.php";

if (isset($_GET['c'])) {
    $controlador = cargarControlador($_GET['c']);
    if (isset($_GET['a'])) {
        if (isset($_GET['id'])) {
            cargarAccion($controlador, $_GET['a'], $_GET['id']);
        } else {
            cargarAccion($controlador, $_GET['a']);
        }
    } else {
        cargarAccion($controlador, accion_principal);
    }
} else {
    $controlador = cargarControlador(controlador_principal);
    $accionTmp = accion_principal;
    $controlador->$accionTmp();
}
