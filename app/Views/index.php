<?=$this->extend('layouts/main')?>


<?=$this->section('title')?>
    Inicio
<?=$this->endSection()?>
<?=$this->section('content')?>
<div class="container">
    <div class="row">
        <div class="col">

            <?php if(session()->get('fail')): ?>

                <div class="alert alert-danger" role="alert">
                    <?=session()->get('fail')?>
                </div>
            
            <?php endif; ?>

            <p>
                HOLA A TODOS LOS USUARIOS NO REGISTRADOS
            </p>
        </div>
    </div>
</div>



<?=$this->endSection()?>