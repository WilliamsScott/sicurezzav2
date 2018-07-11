<div class="row">
    <div class="col s12" >
        <div class="container">
            <br>
            <div class="col s6 offset-s3" style="background-color: rgba(20,80,155,0.5)" >
                <h3 class="center white-text">Registro de Personal</h3>
                <form >
                    <div class="input-field">
                        <input placeholder="Rut" id="rutr" type="text" class="validate white-text" required>
                    </div>
                    <div class="input-field">
                        <input placeholder="Nombre" id="nombrer" type="text" class="validate white-text" required>
                    </div>
                    <div class="input-field">
                        <input placeholder="Apellido" id="apellidor" type="text" class="validate white-text" required>
                    </div>
                    <div class="input-field">
                        <input placeholder="Direccion" id="direccionr" type="text" class="validate white-text" required>
                    </div>
                    <div class="input-field">
                        <input placeholder="Correo" id="correor" type="email" class="validate white-text" required>
                    </div>
                    <div class="input-field">
                        <input placeholder="Clave" id="claver" type="password" class="validate white-text" required>
                    </div>
                    <div class="input-field">
                        <input placeholder="Confirme clave" id="claver2" type="password" class="validate white-text" required>
                    </div>
                    <div class="input-field">
                        <select id="tipo" class="white-text">
                            <option value=1>Guardia</option>
                            <option value=0>Administrador</option>

                        </select>
                        <label class="white-text">Tipo</label>
                    </div>


                    <div class="col right">
                        <br>
                        <button class="btn waves-effect blue" id="bt_registrar">Registrar</button>
                        <br><br>
                    </div>

                </form><br><br>
            </div>
        </div>

    </div>
</div>

