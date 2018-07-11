<?php
$user = $this->session->userdata("administrador");
?>
<div class="row">
    <div class="col s12">
        <div class="container">
            <br>
            <div class="col s6 offset-s3" style="background-color: rgba(20,80,155,0.5)" >
                <h3 class="center white-text">Registrar Visita</h3>
                <form id="regvis" >
                    <div class="input-field ">
                        <input placeholder="Rut" id="rutvis" type="text" class="validate white-text" required>

                    </div>
                   <div class="input-field">
                        <input placeholder="Nombre" id="nombrevis" type="text" class="validate white-text" required>
                    </div>
                    <div class="input-field">
                        <input placeholder="Apellido" id="apellidovis" type="text" class="validate white-text" required>
                    </div>
                    <div class="input-field">
                        <input placeholder="Telefono" id="telefonovis" type="number" class="validate white-text" required>
                    </div>
                    <div class="input-field">
                        <select id="edificiovis" class="white-text">

                        </select>
                        <label class="white-text">Edificio</label>
                    </div>
                    <div class="input-field">
                        <select id="departamentovis" class="white-text">

                        </select>
                        <label class="white-text">Departamento</label>
                    </div>
                    <input id="usr" class="white-text" value="<?php echo $user[0]->rut; ?>" hidden=""/>

                    <div class="col s6 offset-s3">
                        <h6 class="white-text">Vehiculo</h6>
                        <div class="switch">
                            <label>
                                No
                                <input type="checkbox" id="vehiculov">
                                <span class="lever"></span>
                                Si
                            </label>
                        </div>
                    </div>
                    <div class="col s12" style="display:none" id="agregarvehiculov">
                        <h5 class="center white-text">Agregar Vehiculo</h5>
                        <label for="patentev" class="white-text">Patente</label>
                        <input type="text" class="white-text" id="patentev" />
                        <label for="marcavv" class="white-text">Marca</label>
                        <input type="text" class="white-text" id="marcavv"/>
                        <label for="modelovv" class="white-text">Modelo</label>
                        <input type="text" class="white-text" id="modelovv"/>
                        <label for="numeroev" class="white-text">Numero Estacionamiento</label>
                        <select id="numeroev" class="white-text">
                            
                        </select>

                    </div>

                    <div class="right">
                        <br>
                        <button class="btn waves-effect blue" id="bt_registrarvis">Registrar</button>
                        <br><br>
                    </div>





                </form>
            </div>
        </div>

    </div>
</div>

