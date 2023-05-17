<?=$this->extend('layouts/main')?>


<?=$this->section('title')?>
Registrarse
<?=$this->endSection()?>

<?=$this->section('content')?>


<section>

    <div class="container my-5">
        <div class="row d-flex justify-content-center">
            <div class="col-8 g-5">

                
                
                <div class="card ">
                    <h5 class="card-header d-flex justify-content-center align-items-center">
                    <i class="bi bi-person-vcard display-6"></i>
                        REGISTRARSE
                    </h5>

                    <div class="card-body ">
                        <form action="<?=base_url(route_to('save')) ?>" method="POST">
                            <?= csrf_field(); ?>
                            <div class="row">

                                <div class="form-group col-12 col-md-6 mb-3">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" id="nombre" placeholder="Nombre" class="form-control" name="nombre" value="<?php echo set_value('nombre')?>" >
                                    <!-- ERRORES DE VALIDACION DEL CONTROLADOR -->
                                    <span class="text-danger">
                                        <?= isset($validaciones) ? mostrar_errores($validaciones, 'nombre') : ''?>
                                    </span>
                                </div>

                                <div class="form-group col-12 col-md-6 mb-3">
                                    <label for="apellido" class="form-label">Apellido</label>
                                    <input type="text" id="apellido" placeholder="Apellido" class="form-control" name="apellido"  value="<?php echo set_value('apellido')?>" >
                                    <p><?=session('errors.apellido')?></p>
                                </div>

                            </div>

                            <div class="row">

                                <div class="form-group col-12 mb-3">
                                    <label for="email" class="form-label">Correo Electronico</label>
                                    <input type="email" id="email" placeholder="ejemplo@email.com" class="form-control" name="email"  value="<?php echo set_value('email')?>" >
                                    <p><?=session('errors.email')?></p>
                                </div>

                            </div>

                            <div class="row">

                                <div class="form-group col-12 col-md-6 mb-3">
                                    <label for="password" class="form-label">Contraseña</label>
                                    <input type="text" id="password" class="form-control" name="password" >
                                </div>
                                
                                <div class="form-group col-12 col-md-6 mb-3">
                                    <label for="password_confirm" class="form-label">Confirmar contraseña</label>
                                    <input type="text" id="password_confirm" class="form-control" name="password_confirm" >
                                </div>
                                
                            </div>

                            <!-- Lista de Errores -->
                            <?php if (isset($validation)): ?>
                            <div class="row">
                                
                                <div class="col">

                                    <div class='alert alert-danger mt-2'>
                                        <?= $validation->listErrors() ?>
                                    </div>
                                
                                </div>
                            
                            </div>
                            <?php endif; ?>

                            <div class="row">

                                <div class="form-group col-12 d-flex justify-content-center">

                                    <div class="form-check mb-3 text-center">
                                        <input type="checkbox" name="terminos" id="terminos" class="form-check-input" >
                                        <label for="terminos" class="form-check-label mb-3">Acepto los terminos y condiciones</label>
                                        <button type="submit" class="btn btn-primary col-12">Enviar</button>
                                    </div>

                                </div>

                            </div>
                            
                        </form>

                    </div>

                    <div class="card-footer text-body-secondary d-flex justify-content-between">
                        <a href="<?=base_url(route_to('signin')) ?>" class=""><small>Ya tienes cuenta? Entrar ahora</small></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>

<?=$this->endSection()?>