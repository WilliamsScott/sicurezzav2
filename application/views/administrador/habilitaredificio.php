<?php
$user = $this->session->userdata("administrador");
?>
<div class="row">
    <div class="col s12">
        <div class="container">
            <br>
            <div class="col s6 offset-s3" style="background-color: rgba(20,80,155,0.5)" >
                <h3 class="center white-text">Habilitar Edificio</h3>

                <form id="formhabilitare" >
                    <div class="col s12">
                        <input id="acomprobar" class="white-text" value="<?php echo $user[0]->clave; ?>" hidden=""/>
                        <label for="codigoEdificio" class="white-text">Edificio</label>
                        <select id="codigoEdificio" class="white-text">

                        </select>
                    </div>
                    <div class="input-field col s12">
                        <input placeholder="Ingrese su clave" id="acomprobar2" type="password" class="validate white-text" required>
                    </div>
                    <div class="input-field col s12">
                        <input placeholder="Reingrese su clave" id="acomprobar3" type="password" class="validate white-text" required>
                    </div>

                    <div class="col s6 offset-s3 right">
                        <br><br>
                        <button class="btn waves-effect blue" id="bt_habilitaredificio">Habilitar</button>
                        <br><br>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>

