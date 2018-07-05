<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('usuario');
    }

    public function index() {
        $this->load->view('template2/header');
        $this->load->view('login');
        $this->load->view('template2/footer');
    }

    public function indexuser() {
        $this->load->view('templates/header');
        $this->load->view('principal');
        $this->load->view('templates/footer');
    }

    public function form() {
        $this->load->view('templates/header');
        $this->load->view('formulario');
        $this->load->view('templates/footer');
    }

    public function olvideClave() {
        $this->load->view('template2/header');
        $this->load->view('olvidemiclave');
        $this->load->view('template2/footer');
    }
    
    public function camara(){
        $this->load->view('templates/header');
        $this->load->view('camaraenvivo');
        $this->load->view('templates/footer');
    }
    
    public function crearuser(){
        $this->load->view('templates/header');
        $this->load->view('registrar');
        $this->load->view('templates/footer');
    }
    public function crearrv(){
        $this->load->view('templates/header');
        $this->load->view('registrarrv');
        $this->load->view('templates/footer');
    }

    public function login() {
        $rut = $this->input->post("rut");
        $clave = $this->input->post("clave");
        $arrayUser = $this->usuario->login($rut,md5($clave));

        if (count($arrayUser) > 0) {
            if ($arrayUser[0]->tipo == 0) {
                $this->session->set_userdata("administrador",$arrayUser);
                echo json_encode(array("msg" => "administrador"));
            } else {
                $this->session->set_userdata("guardia",$arrayUser);
                echo json_encode(array("msg" => "guardia"));
            }
        } else {
            echo json_encode(array("msg" => "404"));
        }
    }

    
    public function logout(){
        $this->session->sess_destroy();
        redirect('index');
    }
    
    
    

}
