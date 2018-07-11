<?php
$user = $this->session->userdata("administrador");
?>
<div class="row">
    <div class="col s12">
        <div class="container">
            <h3 class="center white-text">Habilitar Departamento</h3>

            <form id="formhabilitare" >
                <input id="acomprobarhdepto" class="white-text" value="<?php echo $user[0]->clave; ?>" hidden=""/>
                <div class="input-field col s6 offset-s3">
                    <input placeholder="ID" id="idDepartamento" type="text" class="validate white-text" >
                </div>
                
                <div class="col s6 offset-s3 ">
                    <label for="edificiohdepto" class="white-text">Edificio  <label for="edificiohdepto">(Si el departamento ya se habia ingresado antes y fue deshabilitado, seleccione cualquiera)</label></label>
                    <select id="edificiohdepto" class="white-text">
                        
                    </select>
                   
                </div>

                <div class="input-field col s6 offset-s3">
                    <input placeholder="Ingrese su clave" id="acomprobarhdepto2" type="password" class="validate white-text" required>
                </div>
                <div class="input-field col s6 offset-s3">
                    <input placeholder="Reingrese su clave" id="acomprobarhdepto3" type="password" class="validate white-text" required>
                </div>

                <div class="col s6 offset-s3 right">
                    <br><br>
                    <button class="btn waves-effect blue" id="bt_habilitardepto">Habilitar</button>
                </div>

            </form>
        </div>

    </div>
</div>

