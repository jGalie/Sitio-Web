<!-- mt-0 y mb-0: se utilizan para establecer márgenes superiores e inferiores en 0-->

<div class="container mt-0 mb-0">
    <div class="card-header text-justify">
        <div class="row d-flex justify-content-center"><!-- Esto se utiliza para alinear horizontalmente el contenido de la fila en el centro.-->

            <div class="card col-lg-6" style="width: 50%;">
                <h4>Registrarse</h4>

                <?php $validation = \Config\Services::validation(); ?> <!--crea una instancia de una clase de validación.-->

                <!--crea un formulario con el método de envío “post” y la acción de envío configurada en “/enviar-form”. Esto significa que cuando se envíe el formulario, los datos se enviarán a la URL “/enviar-form”.-->

                <form method="post" action="<?php echo base_url('/enviar-forma') ?>">


                    <?= csrf_field(); ?><!--Este token se utiliza para proteger el formulario contra ataques CSRF.-->

                    <?php if (!empty(session()->getFlashdata('fail'))): ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                    <?php endif; ?>
                    <div class="card-body justify-content-center" media="(max-width:768px)">
                        <div class="form-group"><!--Esta clase se utiliza en Bootstrap para agrupar elementos relacionados dentro de un formulario.

                        -->

                        <!--NOMBRE-->
                            <label for="exampleFormControlInput1" class="form-label">Nombre</label><!--crea una etiqueta de etiqueta con el texto “Nombre”.-->

                            <input name="nombre" type="text" class="form-control" placeholder="nombre"><!-- crea un campo de entrada de texto con el nombre “nombre”. -->
                            <!-- Error -->
                            <?php if ($validation->getError('nombre')): ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $error = $validation->getError('nombre'); ?><!--verifican si hay algún error de validación asociado al campo “nombre”. -->
                                </div>
                            <?php endif; ?>
                        </div>


                        <!--APELLIDO-->
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Apellido</label>
                            <input type="text" name="apellido" class="form-control" placeholder="apellido">
                            <!-- Error -->
                            <?php if ($validation->getError('apellido')): ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $error = $validation->getError('apellido'); ?>
                                </div>
                            <?php endif; ?>
                        </div>


                        <!--EMAIL-->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" placeholder="correo@algo.com">
                            <!-- Error -->
                            <?php if ($validation->getError('email')): ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $error = $validation->getError('email'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Usuario</label>
                            <input type="text" name="usuario" class="form-control" placeholder="usuario">
                            <!-- Error -->
                            <?php if ($validation->getError('usuario')): ?>
                                <div class="alert-danger mt-2">
                                    <?= $error = $validation->getError('usuario'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                            <input name="pass" type="password" class="form-control" placeholder="password">
                            <!-- Error -->
                            <?php if ($validation->getError('pass')): ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $error = $validation->getError('pass'); ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!--Este elemento se utiliza para enviar el formulario cuando se hace clic en él.-->
                        <input type="submit" value="Guardar" class="btn btn-success">

                        <!--Este elemento se utiliza para restablecer los valores del formulario a sus valores predeterminados cuando se hace clic en él.-->
                        <input type="reset" value="Cancelar" class="btn btn-danger">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
