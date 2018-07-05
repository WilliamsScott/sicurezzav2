<?php
$user = $this->session->userdata("administrador");
?>
<div class="row">
    <div class="col s12">
        <div class="container">
            <h3 class="center white-text">Habilitar Edificio</h3>

            <form id="formhabilitare" >
                <input id="acomprobar" class="white-text" value="<?php echo $user[0]->clave; ?>" hidden=""/>
                <div class="input-field col s6 offset-s3">
                    <input placeholder="Codigo" id="codigoEdificio" type="text" class="validate white-text" >
                </div>
                <div class="input-field col s6 offset-s3">
                    <input placeholder="Nombre" id="nombreEdificio" type="text" class="validate white-text" >
                </div>

                <div class="input-field col s6 offset-s3">
                    <input placeholder="Ingrese su clave" id="acomprobar2" type="password" class="validate white-text" required>
                </div>
                <div class="input-field col s6 offset-s3">
                    <input placeholder="Reingrese su clave" id="acomprobar3" type="password" class="validate white-text" required>
                </div>

                <div class="col s6 offset-s3 right">
                    <br><br>
                    <button class="btn waves-effect blue" id="bt_habilitaredificio">Habilitar</button>
                </div>

            </form>
        </div>

    </div>
</div>

