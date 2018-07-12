<?php
$user = $this->session->userdata("administrador");
?>
<div class="row">
    <div class="col s12">
        <div class="container">
            <br>
            <div class="col s6 offset-s3" style="background-color: rgba(20,80,155,0.5)" >
                <h3 class="center white-text">Deshabilitar Departamento</h3>

                <form id="formdhabilitare" >
                    <input id="acomprobarddepto" class="white-text" value="<?php echo $user[0]->clave; ?>" hidden=""/>
                    <div class="col s12">
                        <label for="idDepartamentod" class="white-text">Departamento</label>
                        <select id="idDepartamentod" class="white-text">

                        </select>
                    </div>

                    <div class="input-field col s12">
                        <input placeholder="Ingrese su clave" id="acomprobarddepto2" type="password" class="validate white-text" required>
                    </div>
                    <div class="input-field col s12">
                        <input placeholder="Reingrese su clave" id="acomprobarddepto3" type="password" class="validate white-text" required>
                    </div>

                    <div class="col s6 offset-s3 right">
                        <br><br>
                        <button class="btn waves-effect red darken-2" id="bt_deshabilitardepto">Deshabilitar</button>
                        <br><br>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>

