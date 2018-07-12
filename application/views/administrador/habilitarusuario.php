<div id="modalhabilitarusuario" class="modal white-text" style="background-color: rgba(20,80,140,0.9)" >
    <div class="modal-content">

        <div class="row">
            <div class="col s12 center">
                <form method="post">
                    <input type="hidden" id='rut_habilitaru'/>
                    <p class="center">
                    <h3>¿Desea Habilitar al Usuario?</h3>
                    <div class="col s6 center">
                        <button type="submit" id='bt_cancelarmodalhau' class="btn green darken-1">cancelar</button>
                    </div>
                    <div class="col s6 center">
                        <button type="submit" id='bt_habilitarusuario' class='btn light-blue darken-2 right'>
                            Habilitar
                        </button>
                    </div>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col s8 offset-s2">
    <br>
    <div class="col s12" style="background-color: rgba(20,80,155,0.5)" >
        <h4 class="center-align white-text">Habilitar Usuario</h4>

        <div class="col s12">
            <div class="input-field col s4 offset-s4">
                <label for="buscarusuarioh">Buscar por Rut</label>
                <input placeholder="Usuario" id="buscarusuarioh" type="text" class="validate white-text" >
            </div>
            <a id="buscarusereditarh" class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">search</i></a>
        </div>

        <table class="bordered white-text">
            <thead>
                <tr>
                    <th>RUT</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Direccion</th>
                    <th>Tipo</th>
                    <th>Correo</th>
                    <th>Habilitar</th>
                    
                </tr>
            </thead>
            <tbody id='bodyusuarioh'>

            </tbody>
        </table>
        <br>
    </div>
    </div>
</div>