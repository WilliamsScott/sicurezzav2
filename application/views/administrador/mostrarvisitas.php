<div class='container'>

    <div class="row">
        <div class="col s12">
            <h4 class="center-align white-text">Visitas</h4>
            <div class="row">
                <div class="col s12">
                    <div class="input-field col s4 offset-s4">
                        <label for="fechaV"><i class="material-icons white-text">date_range</i></label>
                            <input type="text" class="datepicker white-text" id="fecha">
                    </div>
                    <a id="fechavisita" class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">search</i></a>
                    <div class="row">
                        <div class="col s6 offset-s3">
                            
                            
                            
                        </div>
                    </div>
                </div>
                <div class="col">
                    
                    <a class="btn" href="<?php echo base_url();?>dExcel">Exportar</a>
                   
                </div>
            </div>
            
           <!-- <div class="row">
                <h4 class="white-text">Seleccione mes</h4>
                <div class="col">
                    <select id="mes" class="white-text">
                        <option value="1">Enero</option>
                        <option value="2">Febrero</option>
                        <option value="3">Marzo</option>
                        <option value="4">Abril</option>
                        <option value="5">Mayo</option>
                        <option value="6">Junio</option>
                        <option value="7">Julio</option>
                        <option value="8">Agosto</option>
                        <option value="9">Septiembre</option>
                        <option value="10">Octubre</option>
                        <option value="11">Noviembre</option>
                        <option value="12">Diciembre</option>
                        
                        
                    </select>
                    
                    
                </div>
                <button class="btn waves-effect" id="cargarvisita">Mostrar</button>
            </div> -->
            <!-- Modal Trigger -->

            <table class="bordered white-text" id="ex">
                <thead>
                    <tr>
                        <th>RUT</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Telefono</th>
                        <th>Departamento</th>
                        <th>Fecha de registro</th>
                    </tr>
                </thead>
                <tbody id='bodyvisitas'>

                </tbody>
            </table>
            
           <!--<table class="bordered white-text" id="ex">
                <thead>
                    <tr>
                        <th>RUT</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Departamento</th>
                        <th>Patente</th>
                        <th>Tipo</th>
                        <th>Fecha de registro</th>
                    </tr>
                </thead>
                <tbody id='bodyvisitas2'>

                </tbody>
            </table> -->
        </div>
    </div>
</div>
