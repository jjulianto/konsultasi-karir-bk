<?= $this->extend('templates/header'); ?>


<?= $this->section('konten'); ?>
<div class="container-fluid greeting">
    <div class="row">
        <div class="col-md-8 greet">
            <h1>Selamat Pagi, Jotaro</h1>
            <h5>mista444@gmail.com</h5>
        </div>
        <div class="col-md-4 float-right prof">
            <img class="rounded-circle" alt="100x100" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" data-holder-rendered="true">
        </div>
    </div>
</div>


<?= $this->endSection(); ?>