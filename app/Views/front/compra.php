<!DOCTYPE html>
<html>
<head>
    <title>Registro de compra</title>
</head>
<body>
    <h1>Registro de Compra</h1>

<div class="container mt-0 mb-0">
    <div class="card-header text-justify">
        <div class="row d-flex justify-content-center"><!-- Esto se utiliza para alinear horizontalmente el contenido de la fila en el centro.-->

            <div class="card col-lg-6" style="width: 50%;">
                <h4>Mi compra</h4>

                <?php $validation = \Config\Services::validation(); ?> <!--crea una instancia de una clase de validación.-->

                <form method="post" action="<?php echo base_url('/enviar-forma') ?>">

                    <?= csrf_field(); ?><!--Este token se utiliza para proteger el formulario contra ataques CSRF.-->

                    <?php if (!empty(session()->getFlashdata('fail'))): ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                    <?php endif; ?>
                    <div class="card-body justify-content-center" media="(max-width:768px)">
                        <div class="form-group">


                        <!--NOMBRE-->
                            <label for="exampleFormControlInput1" class="form-label">Nombre del Producto</label><!--crea una etiqueta de etiqueta con el texto “Nombre”.-->

                            <input name="nombre" type="text" class="form-control" placeholder="Ej: Lip oil"><!-- crea un campo de entrada de texto con el nombre “nombre”. -->
                            <!-- Error -->
                            <?php if ($validation->getError('nombre')): ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $error = $validation->getError('nombre'); ?><!--verifican si hay algún error de validación asociado al campo “nombre”. -->
                                </div>
                            <?php endif; ?>
                        </div>


                        <!--CATEGORIA-->
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Categoria</label>
                            <input type="text" name="categoria" class="form-control" placeholder="Ej: Labios">
                            <!-- Error -->
                            <?php if ($validation->getError('apellido')): ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $error = $validation->getError('categoria'); ?>
                                </div>
                            <?php endif; ?>
                        </div>


                        <!--MARCA-->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Marca</label>
                            <input name="marca" type="marca" class="form-control" placeholder="Ej: Mac">
                            <!-- Error -->
                            <?php if ($validation->getError('marca')): ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $error = $validation->getError('marca'); ?>
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