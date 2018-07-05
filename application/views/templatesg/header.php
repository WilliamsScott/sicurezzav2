<!DOCTYPE html>
<html>
    <?php
    $user = $this->session->userdata("guardia");
    ?>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0"/>

    <nav class="nav-extended background black">
        <div class="nav-wrapper">
            <img src="<?php echo base_url(); ?>Logo.png" class="responsive-img" width="100">

            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="<?php echo base_url(); ?>guardia">Inicio</a></li>
                <li><a href="#"><?php echo $user[0]->nombre." ". $user[0]->apellido;?></a></li>
                <li><a href="<?php echo base_url();?>logout">Salir</a></li>
            </ul>


        </div>  

        <ul id="camaras" class="dropdown-content">
            <li><a href="#!">en vivo</a></li>
            <li class="divider"></li>
            <li><a href="#!">Grabaciones</a></li>
            <li class="divider"></li>

        </ul>
        <ul id="Estacionamiento" class="dropdown-content  light-blue darken-4 ">
            <li><a href="#!">Estacionamiento</a></li>
            <li class="divider"></li>
            <li><a href="#!">Editar</a></li>
            <li class="divider"></li>

        </ul>
        <ul id="Registro" class="dropdown-content">
            <li><a href="#!">en vivo</a></li>
            <li class="divider"></li>
            <li><a href="#!">Grabaciones</a></li>
            <li class="divider"></li>

        </ul>
        <ul id="personal" class="dropdown-content">
            <li><a href="#">Buscar</a></li>
            <li class="divider"></li>
            <li><a href="#!">Registrar visita</a></li>
            <li class="divider"></li>

        </ul>
        <!-- Dropdown item fin -->
        <nav>
            <div class="nav-wrapper  light-blue darken-4 ">

                <ul class="center hide-on-med-and-down ">
                    <li><a class="dropdown-button " href="#!" data-activates="Estacionamiento">Estacionamiento<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a class="dropdown-button" href="#!" data-activates="camaras">Cámaras<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a class="dropdown-button" href="#!" data-activates="Registro">Registro<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a class="dropdown-button" href="#!" data-activates="personal">Residente/Visita<i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
            </div>
        </nav>

    </main>
    <!--       FIN MENU DE NAVEGACION        -->

    <script>
        $('select').material_select();
        $(".modal-trigger").leanModal();

        $('.Estacionamiento').dropdown();


    </script>


</nav>


</head>

<body background='fondo_web.jpg'>

