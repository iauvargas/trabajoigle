<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/gastos.controlador.php";
require_once "controladores/ingresos.controlador.php";
require_once "controladores/miembros.controlador.php";
require_once "controladores/categorias.controlador.php";
require_once "controladores/personas.controlador.php";
require_once "controladores/estado.controlador.php";
require_once "controladores/genero.controlador.php";
require_once "controladores/clasificacion.controlador.php";
require_once "controladores/operaciones.controlador.php";
require_once "controladores/denominacion.controlador.php";
require_once "controladores/tpmovimiento.controlador.php";
require_once "controladores/movimientos.controlador.php";
require_once "controladores/campo.controlador.php";
require_once "controladores/grupos.controlador.php";
require_once "controladores/ministerio.controlador.php";
require_once "controladores/grupomi.controlador.php";
require_once "controladores/lider.controlador.php";
require_once "controladores/grup_lider.controlador.php";
require_once "controladores/calendario.controlador.php";
require_once "controladores/actividad.controlador.php";
require_once "controladores/perfil.controlador.php";

require_once "modelos/usuarios.modelo.php";
require_once "modelos/productos.modelo.php";
require_once "modelos/ingresos.modelo.php";
require_once "modelos/miembros.modelo.php";
require_once "modelos/gastos.modelo.php";
require_once "modelos/categorias.modelo.php";
require_once "modelos/personas.modelo.php";
require_once "modelos/clasificacion.modelo.php";
require_once "modelos/estado.modelo.php";
require_once "modelos/genero.modelo.php";
require_once "modelos/operaciones.modelo.php";
require_once "modelos/denominacion.modelo.php";
require_once "modelos/tpmovimiento.modelo.php";
require_once "modelos/movimientos.modelo.php";
require_once "modelos/campo.modelo.php";
require_once "modelos/grupos.modelo.php";
require_once "modelos/ministerio.modelo.php";
require_once "modelos/grupomi.modelo.php";
require_once "modelos/lider.modelo.php";
require_once "modelos/grup_lider.modelo.php";
require_once "modelos/calendario.modelo.php";
require_once "modelos/actividad.modelo.php";
require_once "modelos/perfil.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();