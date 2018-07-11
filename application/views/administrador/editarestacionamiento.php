
<div class="row">
    <br>
    <div class="col s8 offset-s2"  style="background-color: rgba(20,80,155,0.5)" >
        <div class="container center">
            <h3 class="white-text">Editar Estacionamiento</h3>
            <br>
            <div class="col s12">
                <button class="btn left blue waves-effect" id="mostarer" type="submit">Residente</button>
                <button class="btn right blue waves-effect" id="mostarev" type="submit">Visita</button>
            </div><br><br>
            <form id="formestacionamiento">

                <div class="col s6 offset-s3" style="display:none" id="selecter">
                    <br>
                    <h5 class="center white-text">Estacionamiento Residente</h5>
                    <select class="white-text center" id="selecteditarestacionamiento">
                        <option value="">Seleccione Opción</option>
                        <option value="1">Agregar</option>
                        <option value="2">Quitar</option>
                        <option value="3">Reservar</option>
                    </select>
                    <br><br><br>
                    <div class="col s12" style="display:none" id="ragregarestacionamiento">

                        <div class="input-field ">
                            <input placeholder="Numero Estacionamiento" id="rnumeroestacionamiento" type="text" class="validate white-text" required>
                        </div>
                        <div class="input-field ">
                            <input placeholder="Nombre" id="rnombre" type="text" class="validate white-text" required>
                        </div>
                        <div class="input-field ">
                            <input placeholder="Residente" id="rresidente" type="text" class="validate white-text" required>
                        </div>
                        <div class="right">
                            <button class="btn waves-effect blue" id="bt_agregarestacionamiento">Agregar</button>
                            <br><br>
                        </div>

                    </div>
                    <div class="col s12" style="display:none" id="rquitarestacionamiento">

                        <div class="input-field ">
                            <input placeholder="Numero Estacionamiento" id="rnumeroestacionamientoquitar" type="text" class="validate white-text" required>
                        </div>
                        <div class="right">
                            <button class="btn waves-effect red darken-4" id="bt_quitarestacionamiento">Quitar</button>
                            <br><br>
                        </div>


                    </div>
                    <div class="col s12" style="display:none" id="rreservarestacionamiento">

                        <div class="input-field ">
                            <input placeholder="Numero Estacionamiento" id="rnumeroestacionamientores" type="text" class="validate white-text" required>
                        </div>
                        <div class="input-field ">
                            <input placeholder="Nombre" id="rnombreres" type="text" class="validate white-text" required>
                        </div>
                        <div class="input-field ">
                            <input placeholder="Residente" id="rresidenteres" type="text" class="validate white-text" required>
                        </div>
                        <div class="right">
                            <button class="btn waves-effect grey" id="bt_reservarestacionamiento">Reservar</button>
                            <br><br>
                        </div>

                    </div>
                </div>
                
                <!--VISITA-->
                <div class="col s6 offset-s3" style="display:none" id="selectev">
                    <br>
                    <h5 class="center white-text">Estacionamiento Visita</h5>
                    <select class="white-text center" id="selecteditarestacionamientovis">
                        <option value="">Seleccione Opción</option>
                        <option value="3">Agregar</option>
                        <option value="2">Quitar</option>
                        
                    </select>
                    <br><br><br>
                    
                    <div class="col s12" style="display:none" id="vquitarestacionamiento">

                        <div class="input-field ">
                            <input placeholder="Numero Estacionamiento" id="vnumeroestacionamientoquitar" type="text" class="validate white-text" required>
                        </div>
                        <div class="right">
                            <button class="btn waves-effect red darken-4" id="bt_quitarestacionamientov">Quitar</button>
                            <br><br>
                        </div>


                    </div>
                    <div class="col s12" style="display:none" id="vagregarestacionamiento">

                        <div class="input-field ">
                            <input placeholder="Numero Estacionamiento" id="vnumeroestacionamiento" type="text" class="validate white-text" required>
                        </div>
                        <div class="input-field ">
                            <input placeholder="Nombre" id="vnombre" type="text" class="validate white-text" required>
                        </div>
                        
                        <div class="right">
                            <button class="btn waves-effect blue" id="bt_agregarestacionamientov">Agregar</button>
                            <br><br>
                        </div>

                    </div>
                </div>

            </form>

        </div>
    </div>
</div>