
<div class="row">
    <div class="col s12">
        <div class="container">
            <br>
            <div class="col s6 offset-s3" style="background-color: rgba(20,80,155,0.5)" >
                <h3 class="center white-text">Registro Residente</h3>
                <form id="regres">
                    <div class="input-field ">
                        <input placeholder="Rut" id="rutres" type="text" class="validate white-text" required>
                    </div>
                    <div class="input-field">
                        <input placeholder="Nombre" id="nombreres" type="text" class="validate white-text" required>
                    </div>
                    <div class="input-field ">
                        <input placeholder="Apellido" id="apellidores" type="text" class="validate white-text" required>
                    </div>

                    <div class="input-field ">
                        <select id="edificiores" class="white-text">

                        </select>
                        <label class="white-text">Edificio</label>
                    </div>
                    <div class="input-field ">
                        <select id="departamentores" class="white-text">

                        </select>
                        <label class="white-text">Departamento</label>
                    </div>
                    <div class="input-field ">
                        <input placeholder="Telefono" id="telefonores" type="number" class="validate white-text" required>
                    </div>
                     <div class="col s6 offset-s3">
                    <h6 class="white-text">Vehiculo</h6>
                    <div class="switch white-text">
                        <label>
                            No
                            <input type="checkbox" id="vehiculor">
                            <span class="lever"></span>
                            Si
                        </label>
                    </div>
                </div>
                <div class="col s12" style="display:none" id="agregarvehiculor">
                    <h5 class="center white-text">Agregar Vehiculo</h5>
                    <label for="patenter" class="white-text">Patente</label>
                    <input class="white-text" type="text" id="patenter"/>
                    <label for="marcavr" class="white-text">Marca</label>
                    <input class="white-text" type="text" id="marcavr"/>
                    <label for="modelor" class="white-text">Modelo</label>
                    <input class="white-text" type="text" id="modelor"/>
                    <label for="numeroer" class="white-text">Numero Estacionamiento</label>
                    <input class="white-text" type="text" id="numeroer"/>
                    
                </div>
                    <br>
                    <div class="right">
                        <button class="btn waves-effect blue" id="bt_registrarres">Registrar</button>
                        <br><br>
                    </div>
                   

                </form>
            </div>
        </div>

    </div>
</div>

