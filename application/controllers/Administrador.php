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

    public function mostrarvisitas() {
        if ($this->session->userdata("administrador")) {
            $this->load->view('templates/header');
            $this->load->view('administrador/mostrarvisitas');
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
            echo json_encode(array("msg" => "error el rut ya esta registrado"));
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
            echo json_encode(array("msg" => "error el rut ya esta registrado"));
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
        $cantidad = sizeof($this->usuario->buscarV($rut));
        if ($cantidad > 0) {
            $this->usuario->updateVisita($rut, $nombre, $apellido, $telefono, $edificio, $departamento);
            echo json_encode(array("msg" => "Registro exitoso"));
        } else {

            $this->usuario->crearVisita($rut, $nombre, $apellido, $telefono, $edificio, $departamento);
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
            echo json_encode(array("msg" => "error el rut ya esta registrado"));
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

    public function departamentos() {
        $edificio = $this->input->post("edificio");
        echo json_encode($this->usuario->departamento($edificio));
    }

    public function departamentos2() {

        echo json_encode($this->usuario->departamento2());
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
        $cantidad = sizeof($this->usuario->buscarV($rut));
        if ($cantidad > 0) {
            $this->usuario->updateVisita($rut, $nombre, $apellido, $telefono, $edificio, $departamento);
        } else {
            $this->usuario->crearVisita($rut, $nombre, $apellido, $telefono, $edificio, $departamento);
        }

        $patente = $this->input->post("patente");
        $marca = $this->input->post("marca");
        $numero = $this->input->post("numero");

        $this->usuario->rvehiculoV($rut, $patente, $marca, $numero);

        echo json_encode(array("msg" => "Registrados con exito"));
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
        $vehiculo = $this->input->post("vehiculo");
        $telefono = $this->input->post("telefono");
        $this->usuario->editarRv($rut, $nombre, $apellido, $edificio, $departamento, $vehiculo, $telefono);
        echo json_encode(array("msg" => "Residente actualizado"));
    }

    public function habilitare() {
        $codigo = $this->input->post("codigo");
        $nombre = $this->input->post("nombre");
        $this->usuario->habilitarEdificio($codigo, $nombre);
        echo json_encode(array("msg" => "Edificio Habilitado"));
    }

    public function deshabilitaredificio() {
        $codigo = $this->input->post("codigo");
        $this->usuario->deshabilitarEd($codigo);
        echo json_encode(array("msg" => "Edificio Deshabilitado"));
    }

    public function eliminarUsuario() {
        $rut = $this->input->post("rut");
        $this->usuario->eliminarUsuario($rut);
        echo json_encode(array("msg" => "Usuario eliminado"));
    }

    public function eliminarRv() {
        $rut = $this->input->post("rut");
        $this->usuario->eliminarRv($rut);
        echo json_encode(array("msg" => "Residente eliminado"));
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

}
