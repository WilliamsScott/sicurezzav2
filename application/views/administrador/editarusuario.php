<div id="modalconfirmarusuario" class="modal white-text" style="background-color: rgba(20,80,140,0.9)" >
    <div class="modal-content">

        <div class="row">
            <div class="col s12 center">
                <form method="post">
                    <input type="hidden" id='rut_erv'/>
                    <p class="center">
                    <h3>¿Desea Deshabilitar Usuario?</h3>
                    <div class="col s6 center">
                        <button type="submit" id='bt_cancelarmodalcu' class="btn green darken-1">cancelar</button>
                    </div>
                    <div class="col s6 center">
                        <button type="submit" id='bt_deleteu' class='btn red darken-2 right'>
                            Deshabilitar
                        </button>
                    </div>
                    </p>
                </form>



            </div>
        </div>



    </div>

</div>
<div id="modal2" class="modal white-text" style="background-color: rgba(20,80,140,0.9)" >
     <a class="btn-floating  right" id="cerrarmodaledituser"><i class="material-icons">close</i></a>
    <div class="modal-content">
       
        <p>
        <form method="post">
           
            <h5 class="center">Editar Usuario</h5>
            <input type="hidden" id='rut_e'/>
            <label class="white-text">Nombre</label>
            <input id='nombre_e' type="text"  >
            <label class="white-text">Apellido</label>
            <input id='apellido_e' type="text"  >
            <label class="white-text">Dirección</label>
            <input id='direccion_e' type="text"  >
            <label class="white-text">Tipo</label>
            <div class="input-field col s12">
                <select id='tipo_e'>
                    <option value="0">Administrador</option>
                    <option value="1">Guardia</option>
                </select>
                <label>Tipo</label>
            </div>
            <label class="white-text">Correo</label>
            <input id='correo_e' type="text"  >
            <div class="col">
                <button type="submit" id='bt_editu' class='btn blue right'>
                    Editar
                </button>
                <br>
            </div>
        </form>
        </p>
    </div>   
</div>


<div class='container'>

    <div class="row">
        <br>
        <div class="col s12" style="background-color: rgba(20,80,155,0.5)" >
            <h4 class="center-align white-text">Editar Usuario</h4>

            <div class="col s12">
                <div class="input-field col s4 offset-s4">
                    <label for="buscarusuario">Buscar por Rut</label>
                    <input placeholder="Usuario" id="buscarusuario" type="text" class="validate white-text" >
                </div>
                <a id="buscarusereditar" class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">search</i></a>
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
                        <th>Modificar</th>
                        <th>Deshabilitar</th>
                    </tr>
                </thead>
                <tbody id='bodyusuario'>

                </tbody>
            </table>
            <br>
        </div>
    </div>
</div>

