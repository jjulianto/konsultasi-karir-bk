<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                Logo
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mt-2" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto nav nav-pills">
                    <li class="nav-item align-self-center">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="page page-1">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mb-4">Hello World!</h1>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>