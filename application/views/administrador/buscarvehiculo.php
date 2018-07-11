<div class="container">
    <div class="row"><
        <br>
        <div class="col s12"  style="background-color: rgba(20,80,155,0.5)" >
            <h4 class="center-align white-text">Buscar Vehiculo</h4>

            <!-- Modal Trigger -->
            <div class="col s12">
                <div class="input-field col s4 offset-s4">
                    <label for="patente">Buscar por Patente</label>
                    <input placeholder="Patente" id="patente" type="text" class="validate white-text" >
                </div>
                <a id="buscarVehiculo" class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">search</i></a>
            </div>
            <table class="bordered white-text">
                <thead>
                    <tr>
                        <th>Patente</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Estacionamiento Asignado</th>
                        <th>Pertenece a</th>
                        <th>Telefono</th>
                    </tr>
                </thead>
                <tbody id='bodyvehiculo'>

                </tbody>
            </table>
            <br>
        </div>
    </div>
</div>
