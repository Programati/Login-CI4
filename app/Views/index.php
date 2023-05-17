<?=$this->extend('layouts/main')?>


<?=$this->section('title')?>
Inicio
<?=$this->endSection()?>

<?=$this->section('content')?>
    <div class="container mt-5 mb-5">
    <?php if(session()->get('success')): ?>
    <div class="alert alert-success" role="alert">
        <?=session()->get('success')?>
    </div>

    <?php endif; ?>
        <div class="row">
            <div class="col">
                <h1 class="text-center my-5">SISTEMA LOGIN</h1>
                <h3 class="text-center">Hola <?=session()->get('nombre')?></h3>
            </div>
        </div>
    </div>
<?=$this->endSection()?>