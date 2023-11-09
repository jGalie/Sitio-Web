<div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="card" style="width: 50%;">
        <div class="card-header text-center">
            <h2>Iniciar sesión</h2>
        </div>
        <!-- Mensaje de Error -->
        <?php if (session()->getFlashdata('msg')): ?><!-- Esta línea inicia un bloque de código PHP que verifica si hay un mensaje flash almacenado en la sesión.-->
            <div class="alert alert-warning">
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif; ?>

        
        <!-- Inicio del formulario de login -->
        <form method="post" action="<?php echo base_url('/enviarlogin') ?>"><!--Esta línea crea un formulario HTML con el método de envío POST y la acción de enviar los datos a la URL especificada por base_url('/enviarlogin').-->

            <div class="card-body" media="(max-width:768px)"><!--un atributo de medios que establece un ancho máximo para pantallas más pequeñas.-->

                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label">Correo</label><!--Esta línea crea una etiqueta para un campo de entrada con el texto “Correo”.-->

                    <input name="email" type="text" class="form-control" placeholder="Correo"><!--Esta línea crea un campo de entrada de texto con un nombre “email”-->
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input name="pass" type="password" class="form-control" placeholder="Contraseña">
                </div>
                <input type="submit" value="Ingresar" class="btn btn-success">
                <a href="<?php echo base_url('login'); ?>" class="btn btn-danger">Cancelar</a>
                <br><span>¿Aún no se ha registrado? <a href="<?php echo base_url('/registro'); ?>">
                Registrarse aquí </a></span>
            </div>
        </form>
    </div>
</div>

  	















	">