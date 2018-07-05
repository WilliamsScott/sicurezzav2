
<div id="modal2" class="modal black white-text" >
    <div class="modal-content">
        <p>
        <form method="post">
            <h5 class="center">Editar Usuario</h5>
            <input type="hidden" id='rut_e'/>
            <input id='nombre_e' type="text"  >
            <input id='apellido_e' type="text"  >
            <input id='direccion_e' type="text"  >

            <div class="input-field col s12">
                <select id='tipo_e'>
                    <option value="0">Administrador</option>
                    <option value="1">Guardia</option>
                </select>
                <label>Tipo</label>
            </div>
            <input id='correo_e' type="text"  >
            <button type="submit" id='bt_editu' class='btn light-blue darken-4'>
                Editar
            </button>
            <button type="submit" id='bt_deleteu' class='btn red darken-4 right'>
                Eliminar
            </button>
        </form>
        </p>
    </div>   
</div>


<div class='container'>

    <div class="row">
        <div class="col s12">
            <h4 class="center-align white-text">Editar Usuario</h4>

            <!-- Modal Trigger -->

            <table class="bordered white-text">
                <thead>
                    <tr>
                        <th>RUT</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Direccion</th>
                        <th>Tipo</th>
                        <th>Correo</th>
                        <th>Modificar</th>
                    </tr>
                </thead>
                <tbody id='bodyusuario'>

                </tbody>
            </table>
        </div>
    </div>
</div>

