<!DOCTYPE html>
<html>
    <?php
    $user = $this->session->userdata("administrador");
    $pass = $user[0]->clave;
    ?>
    <?php
// grab recaptcha library
    require_once "recaptchalib.php";
    ?>

    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="<?php base_url(); ?>assets/css/style.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
            #c{display: none;}
        </style>
    <nav class="nav-extended background black">
        <div class="nav-wrapper">
            <img src="<?php echo base_url(); ?>Logo.png" class="responsive-img" width="100">

            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="<?php echo base_url(); ?>administrador"><i class="material-icons">home</i></a></li>
                <li><a href="#"><?php echo $user[0]->nombre . " " . $user[0]->apellido; ?></a></li>
                <li><a href="<?php echo base_url(); ?>logout"><i class="material-icons">power_settings_new</i></a></li>

            </ul>


        </div>  

        <ul id="camaras" class="dropdown-content">
            <li><a href="<?php echo base_url(); ?>camaraenvivo">en vivo</a></li>
            <li class="divider"></li>
            <li><a href="#!">Grabaciones</a></li>
            <li class="divider"></li>

        </ul>
        <ul id="Estacionamiento" class="dropdown-content  ">
            <li><a href="<?php echo base_url(); ?>administrador">Estacionamiento</a></li>
            <li class="divider"></li>
            <li><a href="#!">Editar</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url(); ?>eresidente">Estacionamiento Residente</a></li>
            <li class="divider"></li>

        </ul>
        <ul id="informe" class="dropdown-content">
            <li><a href="#!">Crear</a></li>
            <li class="divider"></li>
            <li><a href="#!">Ver</a></li>
            <li class="divider"></li>

        </ul>
        <ul id="personal" class="dropdown-content">
            <li><a href="<?php echo base_url(); ?>registrar">Registrar</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url(); ?>editarusuario">Editar</a></li>
            <li class="divider"></li>

        </ul>
        <ul id="residente" class="dropdown-content">
            <li><a href="<?php echo base_url(); ?>crearrv">Registrar </a></li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url(); ?>regres">Registrar2 </a></li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url(); ?>editarrv">Editar </a></li>
            <li class="divider"></li>

        </ul>
        <ul id="visita" class="dropdown-content">
            <li><a href="<?php echo base_url(); ?>crearvisita">Registrar </a></li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url(); ?>mostrarvisitas">Mostrar </a></li>
            <li class="divider"></li>

        </ul>
        <ul id="edificio" class="dropdown-content">
            <li><a href="<?php echo base_url(); ?>he">Habilitar Edificio </a></li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url(); ?>deshabilitare">Deshabilitar Edificio </a></li>
            <li class="divider"></li>

        </ul>
        <ul id="departamento" class="dropdown-content">
            <li><a href="<?php echo base_url(); ?>crearvisita">Habilitar Departamento </a></li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url(); ?>mostrarvisitas">Deshabilitar Departamento </a></li>
            <li class="divider"></li>

        </ul>

        <!-- Dropdown item fin -->
        <nav>
            <div class="nav-wrapper  light-blue darken-4 ">

                <ul class="center hide-on-med-and-down ">
                    <li><a class="dropdown-button " href="#!" data-activates="Estacionamiento">Estacionamiento<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a class="dropdown-button" href="#!" data-activates="camaras">Cámaras<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a class="dropdown-button" href="#!" data-activates="informe">Informe<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a class="dropdown-button" href="#!" data-activates="personal">Personal<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a class="dropdown-button" href="#!" data-activates="residente">Residente<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a class="dropdown-button" href="#!" data-activates="visita">Visita<i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
            </div>


        </nav>

        <div class="container blue">
            <ul id="menu" class="side-nav black">
                <li><div class="user-view">
                        <div class="background">
                            <img src="fondo_web.jpg">
                        </div>
                        <a href="#!user"><img class="circle" src="valle_1.jpg"></a>
                        <a href="#!name"><span class="white-text name"><?php echo $user[0]->nombre . " " . $user[0]->apellido; ?></span></a>
                        <a href="#!email"><span class="white-text email"><?php echo $user[0]->correo; ?></span></a>
                    </div></li>

                <li><a href="#" class="dropdown-button white-text"data-activates="edificio">Edificio</a></li>
                <li><a href="#" class="dropdown-button white-text"data-activates="departamento">Departamento</a></li>
                <li><a href="#" class="white-text">Dueño</a></li>
                <li><a href="#" class="white-text">Arrendatario</a></li>
            </ul>

        </div>


    </main>
    <!--       FIN MENU DE NAVEGACION        -->




</nav>


</head>
<main>
    <body background='fondo_web.jpg' id="x">

