<div class="container-fluid bg-primary opacity-75 pt-5">

<div class="row">
    <div class="col">
        <h1 class="text-center">CABECERA</h1>
    </div>
</div>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?=base_url(route_to('/')) ?>">
            <i class="bi bi-emoji-sunglasses"></i>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?=base_url(route_to('login')) ?>">Ingresar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url(route_to('formularioRegistro')) ?>">Registrarse</a>
            </li>
            <?php if(session()->has('loggedUser')):?>
                <li class="nav-item">
                <a class="nav-link" href="<?= base_url(route_to('logout')); ?>">Salir</a>
                </li>
            <?php endif;?>
        </ul>
        </div>
    </div>
</nav>
</div>