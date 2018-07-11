<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author Williams
 */
class Usuario extends CI_Model {

    public function login($rut, $clave) {
        $this->db->where("rut", $rut);
        $this->db->where("clave", $clave);
        return $this->db->get("usuario")->result();
    }

    public function login2($rut, $clave) {
        $this->db->select("*");
        $this->db->from("usuario");
        $this->db->where("rut", $rut);
        $this->db->where("clave", $clave);
        return $this->db->get()->result();
    }

    public function buscarUsuario($rut) {
        $this->db->where("rut", $rut);
        $this->db->select("rut");
        return $this->db->get("usuario")->result();
    }

    public function buscarRv($rut) {
        $this->db->where("rut", $rut);
        $this->db->select("rut");
        return $this->db->get("residente")->result();
    }

    public function buscarV($rut) {
        $this->db->where("rut", $rut);
        $this->db->select("rut");
        return $this->db->get("visita")->result();
    }

    public function agregarEstacionamiento($numero, $nombre, $residente) {
        $data = array("numeroEstacionamiento" => $numero, "nombre" => $nombre, "residente" => $residente);
        return $this->db->insert("estacionamientor", $data);
    }

    public function agregarEstacionamientoV($numero, $nombre, $estado) {
        $data = array("numeroEstacionamiento" => $numero, "nombre" => $nombre, "estado" => $estado);
        return $this->db->insert("estacionamientov", $data);
    }

    public function eliminarEstacionamiento($numero) {
        $this->db->where("numeroEstacionamiento", $numero);
        return $this->db->delete("estacionamientor");
    }

    public function crearUsuario($rut, $nombre, $apellido, $direccion, $correo, $clave, $tipo) {
        $data = array("rut" => $rut, "nombre" => $nombre, "apellido" => $apellido, "direccion" => $direccion, "correo" => $correo, "clave" => $clave, "tipo" => $tipo);
        return $this->db->insert("usuario", $data);
    }

    public function crearRv($rut, $nombre, $apellido, $edificio, $departamento, $vehiculo, $telefono) {
        $data = array("rut" => $rut, "nombre" => $nombre, "apellido" => $apellido, "edificio" => $edificio, "departamento" => $departamento, "vehiculo" => $vehiculo, "telefono" => $telefono);
        return $this->db->insert("residente", $data);
    }

    public function crearVisita($rut, $nombre, $apellido, $telefono, $edificio, $departamento, $usuario) {
        $data = array("rut" => $rut, "nombre" => $nombre, "apellido" => $apellido, "telefono" => $telefono, "edificio" => $edificio, "departamento" => $departamento, "usuario" => $usuario);
        return $this->db->insert("visita", $data);
    }

    public function updateVisita($rut, $nombre, $apellido, $telefono, $edificio, $departamento, $usuario) {
        $data = array("rut" => $rut, "nombre" => $nombre, "apellido" => $apellido, "telefono" => $telefono, "edificio" => $edificio, "departamento" => $departamento, "usuario" => $usuario);
        $this->db->where("rut", $rut);
        return $this->db->update("visita", $data);
    }

    public function crearR($rut, $nombre, $apellido, $telefono, $edificio, $departamento) {
        $data = array("rut" => $rut, "nombre" => $nombre, "apellido" => $apellido, "telefono" => $telefono, "edificio" => $edificio, "departamento" => $departamento);
        return $this->db->insert("r2", $data);
    }

    public function crearResidente($rut, $nombre, $apellido, $edificio, $departamento, $telefono) {
        $data = array("rut" => $rut, "nombre" => $nombre, "apellido" => $apellido, "edificio" => $edificio, "departamento" => $departamento, "telefono" => $telefono);
        return $this->db->insert("residente", $data);
    }

    public function estacr($numero, $nombre, $residente) {
        $data = array("numeroEstacionamiento" => $numero, "nombre" => $nombre, "residente" => $residente);
        return $this->db->insert("estacionamientor", $data);
    }

    public function rvehiculoV($visita, $patente, $marca, $modelo, $numero) {
        $data = array("patente" => $patente, "marca" => $marca, "modelo" => $modelo, "numeroEstacionamiento" => $numero, "visita" => $visita);
        return $this->db->insert("vehiculov", $data);
    }

    public function rvehiculoR($residente, $patente, $marca, $modelo, $numero) {
        $data = array("patente" => $patente, "marca" => $marca, "modelo" => $modelo, "numeroEstacionamiento" => $numero, "residente" => $residente);
        return $this->db->insert("vehiculor", $data);
    }

    public function habilitarEdificio($codigo, $nombre) {
        $data = array("codigo" => $codigo, "nombre" => $nombre);
        return $this->db->insert("edificio", $data);
    }

    public function deshabilitarEd($codigo) {
        $data = array("estado" => 0);
        $this->db->where("codigo", $codigo);
        return $this->db->update("edificio", $data);
    }

    public function condominio() {
        return $this->db->get('condominio')->result();
    }

    public function edificio() {
        return $this->db->get('edificio')->result();
    }

    public function departamento($edificio) {
        $x = $this->db->query("SELECT * FROM departamento WHERE edificio LIKE '$edificio' and estado = 0");
        return $x->result();
    }

    public function departamento2() {
        return $this->db->get('departamento')->result();
    }

    public function estacionamientosv() {
        $e = $this->db->query("SELECT * FROM estacionamientov WHERE estado = 0");
        return $e->result();
    }
    
    public function bkey($rut) {
        $e = $this->db->query("SELECT * FROM estacionamientor WHERE residente = '$rut'");
        return $e->result();
    }

    public function editarUsuario($rut, $nombre, $apellido, $direccion, $tipo, $correo) {
        //buscar por id
        $this->db->where("rut", $rut);
        //armar la data a actualizar
        $data = array("nombre" => $nombre, "apellido" => $apellido, "direccion" => $direccion, "correo" => $correo, "tipo" => $tipo);
        return $this->db->update("usuario", $data);
    }

    public function editarRv($rut, $nombre, $apellido, $edificio, $departamento, $vehiculo, $telefono) {
        //buscar por id
        $this->db->where("rut", $rut);
        //armar la data a actualizar
        $data = array("nombre" => $nombre, "apellido" => $apellido, "edificio" => $edificio, "departamento" => $departamento, "vehiculo" => $vehiculo, "telefono" => $telefono);
        return $this->db->update("residente", $data);
    }
    
    public function updateDepa($id, $estado2) {
        //buscar por id
        $this->db->where("id", $id);
        //armar la data a actualizar
        $data = array("id"=>$id,"estado"=>$estado2);
        return $this->db->update("departamento", $data);
    }
    public function insertDepa($id, $estado, $edificio) {
       
        $data = array("id"=>$id,"estado"=>$estado,"edificio"=>$edificio);
        return $this->db->insert("departamento", $data);
        
    }

    public function eliminarUsuario($rut) {
        $this->db->where('rut', $rut);
        return $this->db->delete('usuario');
    }

    public function eliminarRv($rut) {
        $this->db->where('rut', $rut);
        return $this->db->delete('residente');
    }
    public function eliminarVehiculoR($patente) {
        $this->db->where('patente', $patente);
        return $this->db->delete('vehiculor');
    }
    
    public function eliminarVRv($rut) {
        $this->db->where('residente', $rut);
        return $this->db->delete('vehiculor');
    }

    public function eliminarERv($rut) {
        $this->db->where('residente', $rut);
        return $this->db->delete('estacionamientor');
    }

    public function usuarios() {
        return $this->db->get("usuario")->result();
    }

    public function buscarE($numero) {
        $e = $this->db->query("SELECT * FROM estacionamientor WHERE numeroEstacionamiento = '$numero'");
        return $e->result();
    }

    public function buscarEV($numero) {
        $e = $this->db->query("SELECT * FROM estacionamientov WHERE numeroEstacionamiento = '$numero'");
        return $e->result();
    }

    public function buscarEdificio($codigo) {
        $e = $this->db->query("SELECT * FROM edificio WHERE codigo = '$codigo'");
        return $e->result();
    }
    
    public function buscarDepartamento($id) {
        $d = $this->db->query("SELECT * FROM departamento WHERE id = '$id'");
        return $d->result();
    }

    public function estacionamientos() {
        return $this->db->get("estacionamientov")->result();
    }

    public function visitas() {
        $v = $this->db->query("SELECT visita.rut, visita.nombre, visita.apellido, visita.departamento, visita.telefono, visita.fecha, visita.usuario, edificio.nombre AS  'edificio', usuario.nombre AS  'nombre_user', usuario.apellido AS  'apellido_user'
FROM visita
JOIN edificio ON edificio.codigo = visita.edificio
JOIN usuario ON usuario.rut = visita.usuario");
        return $v->result();
    }

    public function residentes() {
        $r = $this->db->query("SELECT residente.rut, residente.nombre, residente.apellido, residente.departamento, residente.telefono, residente.fecha, edificio.nombre AS  'edificio'
FROM residente
JOIN edificio ON edificio.codigo = residente.edificio");
        return $r->result();
    }

    public function buscarVF($fecha) {
        $this->db->where("MONTH(fecha)", $fecha);
        $this->db->select("*");
        return $this->db->get("visita")->result();
    }

    public function buscarVF2($fecha) {
        $x = $this->db->query("SELECT visita.rut, visita.nombre, visita.apellido, visita.departamento, visita.telefono, visita.fecha, visita.usuario, edificio.nombre AS  'edificio', usuario.nombre AS  'nombre_user', usuario.apellido AS  'apellido_user'
FROM visita
JOIN edificio ON edificio.codigo = visita.edificio
JOIN usuario ON usuario.rut = visita.usuario WHERE fecha LIKE '$fecha%'");
        return $x->result();
    }

    public function buscarRed($residente) {
        $x = $this->db->query("select residente.rut, residente.nombre, residente.apellido, residente.departamento, residente.telefono, residente.fecha, edificio.nombre as 'edificio' from residente join edificio on edificio.codigo = residente.edificio WHERE rut = '$residente'");
        return $x->result();
    }
    
    public function buscarResve($rut) {
        $x = $this->db->query("select rut, nombre, apellido, vehiculor.patente as 'vehiculo' from residente join vehiculor on vehiculor.residente = residente.rut WHERE rut = '$rut'");
        return $x->result();
    }

    public function buscarUsuarioEditar($usuario) {
        $x = $this->db->query("select * from usuario WHERE rut = '$usuario'");
        return $x->result();
    }

    public function buscarVehiculo($patente) {
        $x = $this->db->query("SELECT vehiculov.patente, vehiculov.marca, vehiculov.modelo, vehiculov.numeroEstacionamiento, vehiculov.visita, visita.telefono AS  'telefono'
FROM vehiculov
JOIN visita ON visita.rut = vehiculov.visita WHERE patente = '$patente'");
        return $x->result();
    }

    public function buscarVehiculo2($patente) {
        $x = $this->db->query("SELECT vehiculor.patente, vehiculor.marca, vehiculor.modelo, vehiculor.numeroEstacionamiento, vehiculor.residente, residente.telefono AS  'telefono'
FROM vehiculor
JOIN residente ON residente.rut = vehiculor.residente WHERE patente = '$patente'");
        return $x->result();
    }

    public function getVisita() {
        $query = $this->db->query("SELECT visita.rut, visita.nombre, visita.apellido, visita.departamento, visita.telefono, visita.fecha, visita.usuario, edificio.nombre AS  'edificio', usuario.nombre AS  'nombre_user', usuario.apellido AS  'apellido_user'
FROM visita
JOIN edificio ON edificio.codigo = visita.edificio
JOIN usuario ON usuario.rut = visita.usuario");

        return $query;
    }

}
