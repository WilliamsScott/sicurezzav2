<?php
$user = $this->session->userdata("administrador");
?>
<div class="row">
    <div class="col s12">
        <div class="container">
            <br>
            <div class="col s6 offset-s3" style="background-color: rgba(20,80,155,0.5)" >
            <h3 class="center white-text">Habilitar Departamento</h3>

            <form id="formhabilitarde" >
                <input id="acomprobarhdepto" class="white-text" value="<?php echo $user[0]->clave; ?>" hidden=""/>
                <div class="col s12">
                    <label for="idDepartamento" class="white-text">Departamento</label>
                    <select id="idDepartamento" class="white-text">

                    </select>
                </div>

                <div class="input-field col s12">
                    <input placeholder="Ingrese su clave" id="acomprobarhdepto2" type="password" class="validate white-text" required>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Reingrese su clave" id="acomprobarhdepto3" type="password" class="validate white-text" required>
                </div>

                <div class="col s6 offset-s3 right">
                    <br><br>
                    <button class="btn waves-effect blue" id="bt_habilitardepto">Habilitar</button>
                    <br><br>
                </div>

            </form>
            </div>
        </div>

    </div>
</div>

