<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Administrador
 *
 * @author Williams
 */
class Administrador extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('usuario');
        $this->load->library('export_excel');
    }

    public function dExcel() {
        $result = $this->usuario->getVisita();
        $this->export_excel->to_excel($result, 'ListadoVisitas');
    }

    public function index() {
        if ($this->session->userdata("administrador")) {
            $this->load->view("templates/header");
            $this->load->view("administrador/home");
            $this->load->view("templates/footer");
        } else {
            redirect("index");
        }
    }

    public function camara() {
        if ($this->session->userdata("administrador")) {
            $this->load->view("templates/header");
            $this->load->view("administrador/camaraenvivo");
            $this->load->view("templates/footer");
        } else {
            redirect("index");
        }
    }
    
    public function verreportes() {
        if ($this->session->userdata("administrador")) {
            $this->load->view("templates/header");
            $this->load->view("administrador/reportes");
            $this->load->view("templates/footer");
        } else {
            redirect("index");
        }
    }

    public function crearuser() {
        if ($this->session->userdata("administrador")) {
            $this->load->view('templates/header');
            $this->load->view('administrador/registrar');
            $this->load->view('templates/footer');
        } else {
            redirect("index");
        }
    }

    public function crearrv() {
        if ($this->session->userdata("administrador")) {
            $this->load->view('templates/header');
            $this->load->view('administrador/registrarresidente');
            $this->load->view('templates/footer');
        } else {
            redirect("index");
        }
    }

    public function regres() {
        if ($this->session->userdata("administrador")) {
            $this->load->view('templates/header');
            $this->load->view('administrador/registrarresi');
            $this->load->view('templates/footer');
        } else {
            redirect("index");
        }
    }

    public function he() {
        if ($this->session->userdata("administrador")) {
            $this->load->view('templates/header');
            $this->load->view('administrador/habilitaredificio');
            $this->load->view('templates/footer');
        } else {
            redirect("index");
        }
    }

    public function habilitardepartamento() {
        if ($this->session->userdata("administrador")) {
            $this->load->view('templates/header');
            $this->load->view('administrador/habilitardepartamento');
            $this->load->view('templates/footer');
        } else {
            redirect("index");
        }
    }

    public function editarusuariohabilitar() {
        if ($this->session->userdata("administrador")) {
            $this->load->view('templates/header');
            $this->load->view('administrador/habilitarusuario');
            $this->load->view('templates/footer');
        } else {
            redirect("index");
        }
    }

    public function deshabilitardepartamento() {
        if ($this->session->userdata("administrador")) {
            $this->load->view('templates/header');
            $this->load->view('administrador/deshabilitardepartamento');
            $this->load->view('templates/footer');
        } else {
            redirect("index");
        }
    }

    public function deshabilitare() {
        if ($this->session->userdata("administrador")) {
            $this->load->view('templates/header');
            $this->load->view('administrador/deshabilitaredificio');
            $this->load->view('templates/footer');
        } else {
            redirect("index");
        }
    }

    public function crearvisita() {
        if ($this->session->userdata("administrador")) {
            $this->load->view('templates/header');
            $this->load->view('administrador/registrarvisita');
            $this->load->view('templates/footer');
        } else {
            redirect("index");
        }
    }

    public function registro() {
        if ($this->session->userdata("administrador")) {
            $this->load->view('templates/header');
            $this->load->view('administrador/reporte');
            $this->load->view('templates/footer');
        } else {
            redirect("index");
        }
    }

    public function editarrv() {
        if ($this->session->userdata("administrador")) {
            $this->load->view('templates/header');
            $this->load->view('administrador/editarrv');
            $this->load->view('templates/footer');
        } else {
            redirect("index");
        }
    }

    public function paginacionrafa() {
        if ($this->session->userdata("administrador")) {
            $this->load->view('templates/header');
            $this->load->view('rafa');
            $this->load->view('templates/footer');
        } else {
            redirect("index");
        }
    }

    public function mostrarvisitas() {
        if ($this->session->userdata("administrador")) {
            $this->load->view('templates/header');
            $this->load->view('administrador/mostrarvisitas');
            $this->load->view('templates/footer');
        } else {
            redirect("index");
        }
    }

    public function editarEstacionamiento() {
        if ($this->session->userdata("administrador")) {
            $this->load->view('templates/header');
            $this->load->view('administrador/editarestacionamiento');
            $this->load->view('templates/footer');
        } else {
            redirect("index");
        }
    }

    public function buscarVehiculo() {
        if ($this->session->userdata("administrador")) {
            $this->load->view('templates/header');
            $this->load->view('administrador/buscarvehiculo');
            $this->load->view('templates/footer');
        } else {
            redirect("index");
        }
    }

    public function vehiculoRe() {
        if ($this->session->userdata("administrador")) {
            $this->load->view('templates/header');
            $this->load->view('administrador/vehiculoresidente');
            $this->load->view('templates/footer');
        } else {
            redirect("index");
        }
    }

    public function crearusuario() {
        $rut = $this->input->post("rut");
        $nombre = $this->input->post("nombre");
        $apellido = $this->input->post("apellido");
        $direccion = $this->input->post("direccion");
        $correo = $this->input->post("correo");
        $clave = $this->input->post("clave");
        $tipo = $this->input->post("tipo");
        $cantidad = sizeof($this->usuario->buscarUsuario($rut));
        if ($cantidad > 0) {
            echo json_encode(array("msg" => "Error, el rut ya esta registrado"));
        } else {

            $this->usuario->crearUsuario($rut, $nombre, $apellido, $direccion, $correo, md5($clave), $tipo);
            echo json_encode(array("msg" => "Registro exitoso"));
        }
    }

    public function crearrov() {
        $rut = $this->input->post("rut");
        $nombre = $this->input->post("nombre");
        $apellido = $this->input->post("apellido");
        $edificio = $this->input->post("edificio");
        $departamento = $this->input->post("departamento");
        $vehiculo = $this->input->post("vehiculo");
        $telefono = $this->input->post("telefono");


        $cantidad = sizeof($this->usuario->buscarRv($rut));
        if ($cantidad > 0) {
            echo json_encode(array("msg" => "Error, el rut ya esta registrado"));
        } else {

            $this->usuario->crearRv($rut, $nombre, $apellido, $edificio, $departamento, $vehiculo, $telefono);
            echo json_encode(array("msg" => "Registro exitoso"));
        }
    }

    public function crearvis() {
        $rut = $this->input->post("rut");
        $nombre = $this->input->post("nombre");
        $apellido = $this->input->post("apellido");
        $telefono = $this->input->post("telefono");
        $edificio = $this->input->post("edificio");
        $departamento = $this->input->post("departamento");
        $usuario = $this->input->post("usuario");
        $cantidad = sizeof($this->usuario->buscarV($rut));
        if ($cantidad > 0) {
            $this->usuario->updateVisita($rut, $nombre, $apellido, $telefono, $edificio, $departamento, $usuario);
            echo json_encode(array("msg" => "Registro exitoso"));
        } else {

            $this->usuario->crearVisita($rut, $nombre, $apellido, $telefono, $edificio, $departamento, $usuario);
            echo json_encode(array("msg" => "Registro exitoso"));
        }
    }

    public function crearresidente() {
        $rut = $this->input->post("rut");
        $nombre = $this->input->post("nombre");
        $apellido = $this->input->post("apellido");
        $telefono = $this->input->post("telefono");
        $edificio = $this->input->post("edificio");
        $departamento = $this->input->post("departamento");
        $this->usuario->crearR($rut, $nombre, $apellido, $telefono, $edificio, $departamento);
        echo json_encode(array("msg" => "Registro exitoso"));
    }

    public function crearres() {
        $rut = $this->input->post("rut");
        $nombre = $this->input->post("nombre");
        $apellido = $this->input->post("apellido");
        $edificio = $this->input->post("edificio");
        $departamento = $this->input->post("departamento");
        $telefono = $this->input->post("telefono");
        $cantidad = sizeof($this->usuario->buscarRv($rut));
        if ($cantidad > 0) {
            echo json_encode(array("msg" => "Error, el rut ya esta registrado"));
        } else {
            $this->usuario->crearResidente($rut, $nombre, $apellido, $edificio, $departamento, $telefono);
            echo json_encode(array("msg" => "Registro exitoso"));
        }
    }

    public function condominios() {
        echo json_encode($this->usuario->condominio());
    }

    public function edificios() {
        echo json_encode($this->usuario->edificio());
    }
    
    public function report() {
        echo json_encode(array("msg"=>$this->usuario->contar()));
    }
    
    public function report2() {
        echo json_encode(array("msg"=>$this->usuario->contar2()));
    }
    
    public function report3() {
        echo json_encode(array("msg"=>$this->usuario->contar3()));
    }
    
    public function report4() {
        echo json_encode(array("msg"=>$this->usuario->contar4()));
    }

    public function departamentos() {
        $edificio = $this->input->post("edificio");
        echo json_encode($this->usuario->departamento($edificio));
    }

    public function departamentos2() {

        echo json_encode($this->usuario->departamento2());
    }
    public function departamentos3() {

        echo json_encode($this->usuario->departamento3());
    }

    public function estacionamientosv() {

        echo json_encode($this->usuario->estacionamientosv());
    }

    public function key() {
        $rut = $this->input->post("rut");
        $cantidad = sizeof($this->usuario->bkey($rut));
        if ($cantidad > 0) {
            echo json_encode($this->usuario->bkey($rut));
        } else {
            echo json_encode(array("msg" => "0"));
        }
    }

    public function usuarios() {
        echo json_encode($this->usuario->usuarios());
    }

    public function estacionamientos() {
        echo json_encode($this->usuario->estacionamientos());
    }

    public function visitas() {
        echo json_encode($this->usuario->visitas());
    }

    public function visitayvehiculo() {
        $rut = $this->input->post("rut");
        $nombre = $this->input->post("nombre");
        $apellido = $this->input->post("apellido");
        $telefono = $this->input->post("telefono");
        $edificio = $this->input->post("edificio");
        $departamento = $this->input->post("departamento");
        $usuario = $this->input->post("usuario");
        $cantidad = sizeof($this->usuario->buscarV($rut));
        if ($cantidad > 0) {
            $this->usuario->updateVisita($rut, $nombre, $apellido, $telefono, $edificio, $departamento, $usuario);
        } else {
            $this->usuario->crearVisita($rut, $nombre, $apellido, $telefono, $edificio, $departamento, $usuario);
        }

        $patente = $this->input->post("patente");
        $marca = $this->input->post("marca");
        $modelo = $this->input->post("modelo");
        $numero = $this->input->post("numero");

        $this->usuario->rvehiculoV($rut, $patente, $marca, $modelo, $numero);

        echo json_encode(array("msg" => "Registro exitoso"));
    }

    public function residenteyvehiculo() {
        $rut = $this->input->post("rut");
        $nombre = $this->input->post("nombre");
        $apellido = $this->input->post("apellido");
        $edificio = $this->input->post("edificio");
        $departamento = $this->input->post("departamento");
        $telefono = $this->input->post("telefono");

        $cantidad = sizeof($this->usuario->buscarRv($rut));
        if ($cantidad == 0) {
            $this->usuario->crearResidente($rut, $nombre, $apellido, $edificio, $departamento, $telefono);
        }

        $patente = $this->input->post("patente");
        $marca = $this->input->post("marca");
        $modelo = $this->input->post("modelo");
        $numero = $this->input->post("numero");

        $this->usuario->rvehiculoR($rut, $patente, $marca, $modelo, $numero);

        echo json_encode(array("msg" => "Registro exitoso"));
    }

    public function residentes() {
        echo json_encode($this->usuario->residentes());
    }

    public function buscarvisita() {
        $fecha = $this->input->post("fecha");
        $cantidad = sizeof($this->usuario->buscarVF($fecha));
        if ($cantidad > 0) {
            echo json_encode($this->usuario->buscarVF($fecha));
        } else {
            echo json_encode(array("msg" => "0"));
        }
    }

    public function buscarvisita2() {
        $fecha = $this->input->post("fecha");
        $cantidad = sizeof($this->usuario->buscarVF2($fecha));
        if ($cantidad > 0) {
            echo json_encode($this->usuario->buscarVF2($fecha));
        } else {
            echo json_encode(array("msg" => "0"));
        }
    }

    public function buscarresidenteeditar() {
        $residente = $this->input->post("residente");
        $cantidad = sizeof($this->usuario->buscarRed($residente));
        if ($cantidad > 0) {
            echo json_encode($this->usuario->buscarRed($residente));
        } else {
            echo json_encode(array("msg" => "0"));
        }
    }

    public function buscarResidenteVehiculo() {
        $rut = $this->input->post("rut");
        $cantidad = sizeof($this->usuario->buscarResve($rut));
        if ($cantidad > 0) {
            echo json_encode($this->usuario->buscarResve($rut));
        } else {
            echo json_encode(array("msg" => "0"));
        }
    }

    public function buscarUsuarioEditar() {
        $usuario = $this->input->post("usuario");
        $cantidad = sizeof($this->usuario->buscarUsuarioEditar($usuario));
        if ($cantidad > 0) {
            echo json_encode($this->usuario->buscarUsuarioEditar($usuario));
        } else {
            echo json_encode(array("msg" => "0"));
        }
    }

    public function agregarestacionamiento() {
        $numero = $this->input->post("numero");
        $nombre = $this->input->post("nombre");
        $residente = $this->input->post("residente");
        $cantidad = sizeof($this->usuario->buscarRv($residente));
        $cantidad2 = sizeof($this->usuario->buscarE($numero));
        if ($cantidad2 == 0) {
            if ($cantidad > 0) {
                echo json_encode($this->usuario->agregarEstacionamiento($numero, $nombre, $residente));
            } else {
                echo json_encode(array("msg" => "0"));
            }
        } else {
            echo json_encode(array("msg" => "1"));
        }
    }

    public function agregarestacionamientov() {
        $numero = $this->input->post("numero");
        $nombre = $this->input->post("nombre");
        $estado = $this->input->post("estado");
        $cantidad = sizeof($this->usuario->buscarEV($numero));
        if ($cantidad > 0) {
            echo json_encode(array("msg" => "1"));
        } else {
            echo json_encode($this->usuario->agregarEstacionamientoV($numero, $nombre, $estado));
        }
    }

    public function quitarestacionamiento() {
        $numero = $this->input->post("numero");
        $cantidad = sizeof($this->usuario->buscarE($numero));
        if ($cantidad > 0) {
            $this->usuario->eliminarEstacionamiento($numero);
            echo json_encode(array("msg" => "Eliminado con exito"));
        } else {
            echo json_encode(array("msg" => "No existe"));
        }
    }

    public function quitarestacionamientov() {
        $numero = $this->input->post("numero");
        $cantidad = sizeof($this->usuario->buscarEV($numero));
        if ($cantidad > 0) {
            $this->usuario->eliminarEstacionamiento($numero);
            echo json_encode(array("msg" => "Eliminado con exito"));
        } else {
            echo json_encode(array("msg" => "No existe"));
        }
    }

    public function editarUsuario() {
        $rut = $this->input->post("rut");
        $nombre = $this->input->post("nombre");
        $apellido = $this->input->post("apellido");
        $direccion = $this->input->post("direccion");
        $tipo = $this->input->post("tipo");
        $correo = $this->input->post("correo");
        $this->usuario->editarUsuario($rut, $nombre, $apellido, $direccion, $tipo, $correo);
        echo json_encode(array("msg" => "Usuario actualizado"));
    }

    public function editarRev() {
        $rut = $this->input->post("rut");
        $nombre = $this->input->post("nombre");
        $apellido = $this->input->post("apellido");
        $edificio = $this->input->post("edificio");
        $departamento = $this->input->post("departamento");
        $telefono = $this->input->post("telefono");
        $this->usuario->editarRv($rut, $nombre, $apellido, $edificio, $departamento, $telefono);
        echo json_encode(array("msg" => "Residente actualizado"));
    }

    public function habilitare() {
        $codigo = $this->input->post("codigo");
        $this->usuario->habilitarEdificio($codigo);
        echo json_encode(array("msg" => "1"));
    }

    public function ehabilitarUsuario() {
        $rut = $this->input->post("rut");
        echo json_encode($this->usuario->habilitarUsuario($rut));
        echo json_encode(array("msg" => "1"));
    }

    public function habilitarDepa() {
        $id = $this->input->post("id");
        $cantidad = sizeof($this->usuario->buscarDepartamento($id));
        if ($cantidad > 0) {
            $this->usuario->updateDepa($id);
            echo json_encode(array("msg" => "Departamento Habilitado"));
        } else {
            echo json_encode(array("msg" => "Departamento no existe"));
        }
    }
    
    public function deshabilitarDepa() {
        $id = $this->input->post("id");
        $cantidad = sizeof($this->usuario->buscarDepartamento($id));
        if ($cantidad > 0) {
            $this->usuario->deshabilitarDepa($id);
            echo json_encode(array("msg" => "Departamento Deshabilitado"));
        } else {
            echo json_encode(array("msg" => "Departamento no existe"));
        }
    }

    public function deshabilitaredificio() {
        $codigo = $this->input->post("codigo");
        $cantidad = sizeof($this->usuario->buscarEdificio($codigo));
        if ($cantidad > 0) {
            echo json_encode($this->usuario->deshabilitarEd($codigo));
        } else {
            echo json_encode(array("msg" => "0"));
        }
    }

    public function cargarRafa() {
        $todas = $this->usuario->visitas();
        $numeroVisitas = sizeof($todas);
        $totalpaginas = ceil($numeroVisitas / 2); //Por la cantidad de datos por pag 
        $primera = array_slice($todas, 0, 2);
        echo json_encode(array("visitas" => $primera, "paginas" => $totalpaginas));
    }

    public function cargarRafa2() {
        $fecha = $this->input->post("fecha");
        $todas = $this->usuario->buscarVF2($fecha);
        $numeroVisitas = sizeof($todas);
        $totalpaginas = ceil($numeroVisitas / 2); //Por la cantidad de datos por pag 
        $primera = array_slice($todas, 0, 2);
        echo json_encode(array("visitas" => $primera, "paginas" => $totalpaginas));
    }

    public function cambiarRafa() {
        $pagina = $this->input->post("pagina");
        $todas = $this->usuario->visitas();
        $calculo1 = ($pagina - 1) * 2; //Por la cantidad que quiero por pagina :D
        $primera = array_slice($todas, $calculo1, 2);
        echo json_encode($primera);
    }

    public function cambiarRafa2() {
        $fecha = $this->input->post("fecha");
        $pagina = $this->input->post("pagina");
        $todas = $this->usuario->buscarVF2($fecha);
        $calculo1 = ($pagina - 1) * 2; //Por la cantidad que quiero por pagina :D
        $primera = array_slice($todas, $calculo1, 2);
        echo json_encode($primera);
    }

    public function eliminarUsuario() {
        $rut = $this->input->post("rut");
        $this->usuario->eliminarUsuario($rut);
        echo json_encode(array("msg" => "Usuario Deshabilitado"));
    }

    public function eliminarRv() {
        $rut = $this->input->post("rut");
        try {
            $this->usuario->eliminarVRv($rut);
            $this->usuario->eliminarERv($rut);
            $this->usuario->eliminarRv($rut);
            echo json_encode(array("msg" => "Residente eliminado"));
        } catch (Exception $ex) {
            echo json_encode(array("msg" => "Error"));
        }
    }

    public function eliminarVehiculoResidente() {
        $patente = $this->input->post("patente");
        try {
            $this->usuario->eliminarVehiculoR($patente);
            echo json_encode(array("msg" => "Vehiculo eliminado"));
        } catch (Exception $ex) {
            echo json_encode(array("msg" => "Error"));
        }
    }

    public function editaruser() {
        if ($this->session->userdata("administrador")) {
            $this->load->view('templates/header');
            $this->load->view('administrador/editarusuario');
            $this->load->view('templates/footer');
        } else {
            redirect("index");
        }
    }

    public function estresidente() {
        if ($this->session->userdata("administrador")) {
            $this->load->view('templates/header');
            $this->load->view('administrador/eresidente');
            $this->load->view('templates/footer');
        } else {
            redirect("index");
        }
    }

    public function buscarresidente() {
        $rut = $this->input->post("rut");

        $cantidad = sizeof($this->usuario->buscarRv($rut));
        if ($cantidad > 0) {
            echo json_encode(array("msg" => "1"));
        } else {
            echo json_encode(array("msg" => "no existe residente"));
        }
    }

    public function estacioresidente() {
        $numero = $this->input->post("numero");
        $nombre = $this->input->post("nombre");
        $residente = $this->input->post("residente");

        $this->usuario->estacr($numero, $nombre, $residente);
        echo json_encode(array("msg" => "Estacionamiento asignado"));
    }

    public function vehiculoVisita() {
        $visita = $this->input->post("visita");
        $patente = $this->input->post("patente");
        $marca = $this->input->post("marca");
        $numero = $this->input->post("numero");

        $this->usuario->rvehiculoV($visita, $patente, $marca, $numero);
        echo json_encode(array("msg" => "Vehiculo visitante registrado"));
    }

    public function vehiculoResidente() {
        $residente = $this->input->post("residente");
        $patente = $this->input->post("patente");
        $marca = $this->input->post("marca");
        $modelo = $this->input->post("modelo");
        $numero = $this->input->post("numero");

        $this->usuario->rvehiculoR($residente, $patente, $marca, $modelo, $numero);
        echo json_encode(array("msg" => "Vehiculo Residente Registrado"));
    }

    public function buscarVehiculoPatente() {
        $patente = $this->input->post("patente");
        $cantidad = sizeof($this->usuario->buscarVehiculo($patente));
        if ($cantidad == 0) {
            $cantidad2 = sizeof($this->usuario->buscarVehiculo2($patente));

            if ($cantidad2 > 0) {
                echo json_encode($this->usuario->buscarVehiculo2($patente));
            } else {
                echo json_encode(array("msg" => "0"));
            }
        } else {
            echo json_encode($this->usuario->buscarVehiculo($patente));
        }
    }

}
