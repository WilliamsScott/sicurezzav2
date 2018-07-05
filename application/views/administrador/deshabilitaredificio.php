<div class="row">
    <div class="col s12">
        <div class="container">
            <h3 class="white-text center">Deshabilitar Edificio</h3>
            <form>
                <div class="input-field col s6 offset-s3">
                    <input placeholder="Codigo" id="codigoEdificio2" type="text" class="validate white-text" required>
                </div>
                 <div class="col s6 offset-s3">
                <div class="g-recaptcha" data-sitekey="6Ld9fWEUAAAAACezOnvuLLwUHNMD6L9cgEojt6kD"></div>
                </div>
                <?php
                foreach ($_POST as $key => $value) {
                    echo '<p><strong>' . $key . ':</strong> ' . $value . '</p>';
                }
                ?>
                
                <div class="col s6 offset-s3 right">
                    <br><br>
                    <button class="btn waves-effect red" id="bt_deshabilitaredificio">Deshabilitar</button>
                </div>
            </form>

        </div>
    </div>
</div>