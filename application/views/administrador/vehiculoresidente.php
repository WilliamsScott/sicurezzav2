<div id="modaleliminarvehiculo" class="modal white-text" style="background-color: rgba(37,111,197,0.95)">
    <div class="modal-content">

        <div class="row">
            <div class="col s12 center">
                <form method="post">
                    <input type="hidden" id='patentevehiculoe'/>
                    <p class="center">
                    <h3>¿Desea eliminar el Vehiculo?</h3>
                    <div class="col s6 center">
                        <button type="submit" id='bt_cancelarmodalelim' class="btn green">cancelar</button>
                    </div>
                    <div class="col s6 center">
                        <button type="submit" id='bt_eliminarvehiculo' class="btn red">eliminar</button> 
                    </div>
                    </p>
                </form>



            </div>
        </div>



    </div>

</div>
<div class="row">
    <div class="col s12">
        <div class="container">
            <div class="row">
                <br>
                <div class="col s12 center" style="background-color: rgba(20,80,155,0.5)" >
                    <h3 class="white-text center">Vehiculo Residente</h3>
                    <br><br>
                    <table class="center">

                        <tr class="center">
                            <th></th><th></th><th></th><th></th><th></th>


                            <th><a id="vehiculorbuscar" class="btn-floating btn-large waves-effect waves-light blue darken-1"><i class="material-icons">search</i></a></th>
                            <th><a id="vehiculoragregar" class="btn-floating btn-large waves-effect waves-light green darken-1"><i class="material-icons">directions_car</i></a></th>

                        </tr>

                    </table>




                    <form id="formbuscarVpR" style="display:none" >
                        <div class="col s12">
                            <br><br>
                            <h5 class="center-align white-text">Buscar Vehiculo por Residente</h5>

                            <div id="diveliminarvr">
                                <div class="col s12">
                                    <br>
                                    <div class="input-field col s4 offset-s4">
                                        <label for="rutresidentevehiculo">Buscar por Rut</label>
                                        <input placeholder="Rut" id="rutresidentevehiculo" type="text" class="validate white-text" >
                                    </div>
                                    <a id="buscarresidentevehiculo" class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">search</i></a>
                                </div>
                                <div class="col s6 offset-s3" >
                                    <table class="bordered white-text">
                                        <thead>
                                            <tr>
                                                <th>Rut</th>
                                                <th>Nombre</th>
                                                <th>Vehiculo</th>
                                                <th>Quitar</th>
                                            </tr>
                                        </thead>
                                        <tbody id='bodyresidentevehiculo'>

                                        </tbody>
                                    </table>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form id="vehiculoagregarvr" style="display:none">
                        <div class="col s6 offset-s3" >
                            <br><br>
                            <h5 class="center white-text">Agregar Vehiculo</h5>
                            <br>
                            <label for="rutagregarv" class="white-text left">Rut</label>
                            <input class="white-text" type="text" id="rutagregarv"/>
                            <label for="patenteagregarv" class="white-text left">Patente</label>
                            <input class="white-text" type="text" id="patenteagregarv"/>
                            <label for="marcaagregarv" class="white-text left">Marca</label>
                            <input class="white-text" type="text" id="marcaagregarv"/>
                            <label for="modeloagregarv" class="white-text left">Modelo</label>
                            <input class="white-text" type="text" id="modeloagregarv"/>
                            <label for="numeroagregarv" class="white-text left">Numero Estacionamiento</label>
                            <div class="col s12 white-text">
                                <select id="numeroagregarv">

                                </select>
                            </div>

                            <div class="right">
                                <br>
                                <button class="btn waves-effect blue" id="bt_agregarvehiculor">Agregar</button>
                                <br><br>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

