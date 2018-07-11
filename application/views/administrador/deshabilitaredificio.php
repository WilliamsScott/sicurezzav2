<?php
$user = $this->session->userdata("administrador");
?>
<div class="row">
    <div class="col s12">
        <div class="container">
            <h3 class="white-text center">Deshabilitar Edificio</h3>
            <form id="formde">
                <div class="input-field col s6 offset-s3">
                    <input placeholder="Codigo" id="codigoEdificio2" type="text" class="validate white-text" required>
                </div>
                <input id="acomprobard" class="white-text" value="<?php echo $user[0]->clave; ?>" hidden=""/>
                <div class="input-field col s6 offset-s3">
                    <input placeholder="Ingrese su clave" id="acomprobard2" type="password" class="validate white-text" required>
                </div>
                <div class="input-field col s6 offset-s3">
                    <input placeholder="Reingrese su clave" id="acomprobard3" type="password" class="validate white-text" required>
                </div>
                 
                
                <div class="col s6 offset-s3 right">
                    <br><br>
                    <button class="btn waves-effect red" id="bt_deshabilitaredificio">Deshabilitar</button>
                </div>
            </form>

        </div>
    </div>
</div>