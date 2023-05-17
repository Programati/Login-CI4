<?=$this->extend('layouts/main')?>


<?=$this->section('title')?>
Login
<?=$this->endSection()?>

<?=$this->section('content')?>

    <div class="container my-5">

        <!-- Si existe un mensaje, va a mostrar la FILA de ALERTA  -->
    <?php if(session('msg')): ?>
        <div class="row">

            <div class="alert alert-<?=session('msg.type')?>" role="alert">
                <?=session('msg.body')?>
            </div>

        </div>
    <?php endif ?>

        <div class="row d-flex justify-content-center">
            <div class="col-4 g-5">
            

                <div class="card ">
                    <h5 class="card-header text-center d-flex justify-content-center align-items-center">
                    <i class="bi bi-person-circle display-6"></i>
                        INGRESAR
                    </h5>

                    <div class="card-body ">
                        
                        <form action="<?=base_url(route_to('signin')) ?>" method="POST">
                            
                            <div class="form-group">

                                <label for="email" class="form-label">Correo Electronico</label>
                                <input type="email" id="email" placeholder="ejemplo@email.com" class="form-control" name="email" value="<?php echo set_value('email')?>" >
                                <p><?=session('errors.usuario')?></p>

                            </div>

                            <div class="form-group">

                                <label for="password">Contraseña</label>
                                <input type="text" class="form-control mb-3" name="password">
                                <p><?=session('errors.password')?></p>

                            </div>

                            <div class="form-group">

                                <button type="submit" class="btn btn-primary">Ingresr</button>

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

                        </form>
                        
                    </div>
                    <div class="card-footer text-body-secondary">
                        <div class="row ">
                            <div class="col">
                                <a href="<?=base_url(route_to('formularioRegistro')) ?>" class=""><small>Aun no tienes cuenta? Ir a crear</small></a>                            
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?=$this->endSection()?>    