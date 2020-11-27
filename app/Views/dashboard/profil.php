<?= $this->extend('templates/header'); ?>


<?= $this->section('konten'); ?>

<main class="profil mt-2">
    <h3 class="text-center font-weight-bold pt-4 pb-3">Profil Pengguna</h3>
    <form method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-3 card">
                <h5 class="text-center pt-4">Foto Profil Anda</h5>
                <div class="avatar-me mx-auto mb-4">
                    <img id="avatar" src="<?= base_url('assets/images/icons/user.png'); ?>">
                </div>
                <div class="form-group pb-4">
                    <label for="exampleFormControlFile1">Ganti Poto Profil</label>
                    <div class="custom-file">
                        <input id="choose" type="file" name="img_file" class="custom-file-input" accept="image/*" files="" onchange="document.getElementById('avatar').src = window.URL.createObjectURL(this.files[0])" />
                        <label class="custom-file-label" for="customFile">Choose file</label>
                        <input id=deletePhoto type='submit' name="edit" value="Delete Photo" class="btn btn-danger mt-3 btn-block" onclick="document.getElementById('avatar').src =''">
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body"></div>
                </div>
            </div>
        </div>
    </form>
</main>
<?= $this->endSection(); ?>