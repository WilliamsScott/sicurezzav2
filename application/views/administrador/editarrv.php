<div id="modalconfirmar" class="modal white-text" style="background-color: rgba(20,80,140,0.9)" >
    <div class="modal-content">

        <div class="row">
            <div class="col s12 center">
                <form method="post">
                    <input type="hidden" id='rut_erv'/>
                    <p class="center">
                    <h3>¿Desea eliminar Residente?</h3>
                    <div class="col s6 center">
                        <button type="submit" id='bt_cancelarmodal' class="btn green">cancelar</button>
                    </div>
                    <div class="col s6 center">
                        <button type="submit" id='bt_drv' class="btn red">eliminar</button> 
                    </div>
                    </p>
                </form>


                
            </div>
        </div>



    </div>

</div>


<div id="modalrv" class="modal white-text" style="background-color: rgba(20,80,140,0.9)" >
    <a class="btn-floating  right" id="cerrarmodale"><i class="material-icons">close</i></a>
    <div class="modal-content">
        <p>
        <form method="post">
            <h5 class="center">Editar Residente</h5>
            <input type="hidden" id='rut_rv'/>
            <label class="white-text">Nombre</label>
            <input id='nombre_rv' type="text"  readonly="">
            <label class="white-text">Apellido</label>
            <input id='apellido_rv' type="text" readonly="" >
            <label class="white-text">Edificio</label>
            <select id="edificio_rv">

            </select>
            <br>
            <label class="white-text">Departamento</label>
            <select id="departamento_rv">

            </select>
            <br>
            <label class="white-text">Telefono</label>
            <input id='telefono_rv' type="text"  >
            <div class="col">
                <br>
                <label class="white-text">Vehiculo</label>
                <a href="<?php echo base_url(); ?>vehiculoRe" class="btn-floating waves-effect green"><i class='material-icons green'>directions_car</i></a>
                 
                <br><br>
            </div>
                
                
            <button type="submit" id='bt_erv' class='btn light-blue  right'>
                Editar
            </button>
            <br><br>
        </form>
        </p>
    </div>   
</div>


<div class='container'>

    <div class="row">
         <br>
        <div class="col s12" style="background-color: rgba(20,80,155,0.5)" >
           
            <h4 class="center-align white-text">Editar Residente</h4>

            <!-- Modal Trigger -->
            <div class="col s12">
                <div class="input-field col s4 offset-s4">
                    <label for="resib">Buscar por Rut</label>
                    <input placeholder="Residente" id="resib" type="text" class="validate white-text" >
                </div>
                <a id="buscarreseditar" class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">search</i></a>
            </div>
            <table class="bordered white-text">
                <thead>
                    <tr>
                        <th>RUT</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Edificio</th>
                        <th>Departamento</th>
                        <th>Telefono</th>
                        <th>Fecha de Registro</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody id='bodyrv'>

                </tbody>
            </table>
            <br>
        </div>
    </div>
</div>

