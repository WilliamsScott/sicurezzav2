<?php
$user = $this->session->userdata("administrador");
?>
<div class="row">
    <div class="col s12">
        <div class="container">
            <br>
            <div class="col s6 offset-s3" style="background-color: rgba(20,80,155,0.5)" >
            <h3 class="white-text center">Deshabilitar Edificio</h3>
            <form id="formde">
                <div class="col s12">
                <label for="codigoEdificio2" class="white-text">Edificio</label>
                <select id="codigoEdificio2" class="white-text">
                    
                </select>
                </div>
                <input id="acomprobard" class="white-text" value="<?php echo $user[0]->clave; ?>" hidden=""/>
                <div class="input-field col s12">
                    <input placeholder="Ingrese su clave" id="acomprobard2" type="password" class="validate white-text" required>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Reingrese su clave" id="acomprobard3" type="password" class="validate white-text" required>
                </div>
                 
                
                <div class="col s6 offset-s3 right">
                    <br><br>
                    <button class="btn waves-effect red" id="bt_deshabilitaredificio">Deshabilitar</button>
                    <br><br>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>