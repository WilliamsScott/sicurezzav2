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
    
    

    public function crearUsuario($rut, $nombre, $apellido, $direccion, $correo, $clave, $tipo) {
        $data = array("rut" => $rut, "nombre" => $nombre, "apellido" => $apellido, "direccion" => $direccion, "correo" => $correo, "clave" => $clave, "tipo" => $tipo);
        return $this->db->insert("usuario", $data);
    }
    public function crearRv($rut,$nombre,$apellido,$edificio,$departamento,$vehiculo,$telefono){
        $data = array("rut"=>$rut,"nombre"=>$nombre,"apellido"=>$apellido,"edificio"=>$edificio,"departamento"=>$departamento,"vehiculo"=>$vehiculo,"telefono"=>$telefono);
        return $this->db->insert("residente",$data);
    }
    
    public function crearVisita($rut,$nombre,$apellido,$telefono,$edificio,$departamento){
        $data = array("rut"=>$rut,"nombre"=>$nombre,"apellido"=>$apellido,"telefono"=>$telefono,"edificio"=>$edificio,"departamento"=>$departamento);
        return $this->db->insert("visita",$data);
        
    }
    public function updateVisita($rut,$nombre,$apellido,$telefono,$edificio,$departamento){
        $data = array("rut"=>$rut,"nombre"=>$nombre,"apellido"=>$apellido,"telefono"=>$telefono,"edificio"=>$edificio,"departamento"=>$departamento);
        $this->db->where("rut",$rut);
        return $this->db->update("visita",$data);
        
    }
    public function crearR($rut,$nombre,$apellido,$telefono,$edificio,$departamento){
        $data = array("rut"=>$rut,"nombre"=>$nombre,"apellido"=>$apellido,"telefono"=>$telefono,"edificio"=>$edificio,"departamento"=>$departamento);
        return $this->db->insert("r2",$data);
        
    }
    
    public function crearResidente($rut,$nombre,$apellido,$edificio,$departamento,$telefono){
        $data = array("rut"=>$rut,"nombre"=>$nombre,"apellido"=>$apellido,"edificio"=>$edificio,"departamento"=>$departamento,"telefono"=>$telefono);
        return $this->db->insert("residente",$data);
        
    }
    public function estacr($numero,$nombre,$residente){
        $data = array("numeroEstacionamiento"=>$numero,"nombre"=>$nombre,"residente"=>$residente);
        return $this->db->insert("estacionamientor",$data);
        
    }
    public function rvehiculoV($visita,$patente,$marca,$numero){
        $data = array("patente"=>$patente,"marca"=>$marca,"numeroEstacionamiento"=>$numero,"visita"=>$visita);
        return $this->db->insert("vehiculov",$data);
        
    }
    public function rvehiculoR($residente,$patente,$marca,$modelo,$numero){
        $data = array("patente"=>$patente,"marca"=>$marca,"modelo"=>$modelo,"numeroEstacionamiento"=>$numero,"residente"=>$residente);
        return $this->db->insert("vehiculor",$data);
        
    }
    public function habilitarEdificio($codigo,$nombre){
        $data=array("codigo"=>$codigo,"nombre"=>$nombre);
        return $this->db->insert("edificio",$data);
    }
    public function deshabilitarEd($codigo){
      $data=array("estado"=>0);
       $this->db->where("codigo",$codigo);
        return $this->db->update("edificio",$data);
    }
    
    public function condominio(){
        return $this->db->get('condominio')->result();
    }
    public function edificio(){
        return $this->db->get('edificio')->result();
    }
    public function departamento($edificio){
        $x=$this->db->query("SELECT * FROM departamento WHERE edificio LIKE '$edificio' and estado = 0");
        return $x->result();
    }
    public function departamento2(){
        return $this->db->get('departamento')->result();
    }
    public function editarUsuario($rut,$nombre,$apellido,$direccion,$tipo,$correo){
        //buscar por id
        $this->db->where("rut",$rut);
        //armar la data a actualizar
        $data = array("nombre" => $nombre,"apellido"=>$apellido,"direccion"=>$direccion,"correo"=>$correo,"tipo"=>$tipo);
        return $this->db->update("usuario",$data);
    }
    
    public function editarRv($rut,$nombre,$apellido,$edificio,$departamento,$vehiculo,$telefono){
        //buscar por id
        $this->db->where("rut",$rut);
        //armar la data a actualizar
        $data = array("nombre" => $nombre,"apellido"=>$apellido, "edificio"=>$edificio,"departamento"=>$departamento,"vehiculo"=>$vehiculo,"telefono"=>$telefono);
        return $this->db->update("residente",$data);
    }
    public function eliminarUsuario($rut){
      $this->db->where('rut', $rut);
      return $this->db->delete('usuario');
    }
    public function eliminarRv($rut){
        $this->db->where('rut',$rut);
        return $this->db->delete('residente');
    }
    public function usuarios(){
        return $this->db->get("usuario")->result();
    }
    
    public function estacionamientos(){
        return $this->db->get("estacionamientov")->result();
    }
    public function visitas(){
        return $this->db->get("visita")->result();
    }
    public function residentes(){
        $r=$this->db->query("select residente.rut, residente.nombre, residente.apellido, residente.departamento, residente.telefono, residente.fecha, edificio.nombre as 'edificio' from residente join edificio on edificio.codigo = residente.edificio");
        return $r->result();
    }
    
    public function buscarVF($fecha) {
        $this->db->where("MONTH(fecha)", $fecha);
        $this->db->select("*");
        return $this->db->get("visita")->result();
    }
    public function buscarVF2($fecha) {
        $x=$this->db->query("SELECT * FROM visita WHERE fecha LIKE '$fecha%'");
        return $x->result();
    }
    public function buscarRed($residente){
        $x=  $this->db->query("select residente.rut, residente.nombre, residente.apellido, residente.departamento, residente.telefono, residente.fecha, edificio.nombre as 'edificio' from residente join edificio on edificio.codigo = residente.edificio WHERE rut = '$residente'");
        return $x->result();
    }


    public function getVisita(){
		$this->db->select('*');
		$this->db->from('visita');
		$query = $this->db->get();
					
		return $query;
	}

}
