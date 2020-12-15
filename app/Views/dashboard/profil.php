<?= $this->extend('templates/header'); ?>


<?= $this->section('konten'); ?>

<main class="profil mt-2">
    <h3 class="text-center font-weight-bold pt-4 pb-3">Profil Pengguna</h3>
    <form method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-12 prof">
                <div id='profile-upload'>
                    <div class="hvr-profile-img">
                        <input type="file" name="logo" id='getval' class="upload" id="imag">

                        <div class="icon">
                            <div class="camera4"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-md-10 col-12 prof2">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-3">Simpan Perubahan</button>
                <div class="form-group">
                    <label for="exampleInputNis">NIS</label>
                    <input type="number" class="form-control" id="exampleInpuNis" aria-describedby="NIShelp" placeholder="Masukkan NIS">
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label for="exampleFormControlSelect1">Jurusan</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group col">
                        <label for="exampleFormControlSelect1">Kelas</label>
                        <select class="form-control" id="exampleFormControlSelect2">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                    <div class="form-group col">
                        <label for="exampleFormControlSelect1">Rombel</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputNomor">Nomor Telp</label>
                    <input type="number" class="form-control" id="exampleInpuNis" aria-describedby="NIShelp" placeholder="Masukkan Nomor Telepon">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-md-3 card">
                <h5 class="text-center pt-4">Foto Profil Anda</h5>
                <div class="avatar-me mx-auto mb-4">
                    <img id="avatar" src=" base_url('assets/images/icons/user.png');"> 
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
        </div> -->
    </form>
</main>

<script>
    document.getElementById('getval').addEventListener('change', readURL, true);

    function readURL() {
        var file = document.getElementById("getval").files[0];
        var reader = new FileReader();
        reader.onloadend = function() {
            document.getElementById('profile-upload').style.backgroundImage = "url(" + reader.result + ")";
        }
        if (file) {
            reader.readAsDataURL(file);
        } else {}
    }
</script>
<?= $this->endSection(); ?>