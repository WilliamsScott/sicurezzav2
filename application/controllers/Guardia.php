<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Williams
 */
class Guardia extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        if ($this->session->userdata("guardia")) {
            $this->load->view("templatesg/header");
            $this->load->view("guardia/home");
            $this->load->view("templatesg/footer");
            
        }else{
            redirect("index");
        }
    }

}
