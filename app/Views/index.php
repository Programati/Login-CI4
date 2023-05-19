<?=$this->extend('layouts/main')?>


<?=$this->section('title')?>
    Inicio
<?=$this->endSection()?>
<?=$this->section('content')?>
<div class="container">
    <div class="row">
        <div class="col my-5">

            <?php if(session()->get('fail')): ?>

                <div class="alert alert-danger" role="alert">
                    <?=session()->get('fail')?>
                </div>
            
            <?php endif; ?>

            <div class="row">
                <div class="col d-flex justify-content-center">
                    
                    <div class="card mb-3" style="max-width: 540px;">
                        <img src="assets/img/codeigniter.png" class="card-img-top" alt="logo">
                        <div class="card-body text-center">
                            <h5 class="card-title text-center">Sistema de Login</h5>
                            <p class="card-text"><small class="text-body-secondary">constantemente actualziandolo...</small></p>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</div>



<?=$this->endSection()?>