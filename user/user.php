<?php 

require_once "../config.php";

$title = "Tambah User - Pesantren AL-HUDA Dumai";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";

if (isset($_GET['msg'])) {
    $msg = $_GET['msg'];

}else {
   $msg = '';
} 

$alert = '';
if($msg == 'cancel') {
    $alert = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <i class="fa-solid fa-xmark"></i> tambah user gagal, username sudah ada..
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
}
if($msg == 'notimage') {
    $alert = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <i class="fa-solid fa-xmark"></i> tambah user gagal, file yang anda upload bukan gambar..
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
}
if($msg == 'oversize') {
    $alert = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <i class="fa-solid fa-circle-check"></i> tambah user berhasil, segera ganti password anda !
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
}
if($msg == 'added') {
    $alert = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fa-solid fa-xmark"></i> tambah user gagal, maximal ukuran gambar 1 MB..
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
}




?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tambah User</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                            <li class="breadcrumb-item active">Tambah User</li>
                        </ol>
                        <form action="proses-user.php" method="POST" enctype="multipart/form-data">
                            <?php 
                                if ($msg !== '') {
                                    echo $alert;
                                }
                            
                            
                            ?>
                        <div class="card">
                            <div class="card-header">
                                    <span class="h5 my-2"><i class="fa-solid fa-square-plus"></i> Tambah User</span>
                                    <button type="submit" name="simpan" class="btn btn-primary float-end"><i class="fa-solid fa-floppy-disk"></i>Simpan</button>
                                    <button type="reset" name="reset" class="btn btn-danger float-end me-2"><i class="fa-solid fa-xmark"></i>Reset</button>


                            </div>
                            <div class="card-body">
                                 <div class="row">
                                    <div class="col-8">                                 
                                    <div class="mb-3 row">
                                        <label for="username" class="col-sm-1 col-form-label">Usernam</label>
                                        <label for="" class="col-sm-1 col-form-label"> :</label>
                                        <div class="col-sm-9" style="margin-left: -60px;">
                                        <input type="text" pattern="[A-Za-z0-9](3,)" title="minimal 3 karakter kombinasi huruf besar huruf kecil dan angka"class="form-control" id="username" name="username" maxlength="20" require>
                                        </div>
                                    </div>                                                               
                                    <div class="mb-3 row">
                                        <label for="username" class="col-sm-1 col-form-label">Nama</label>
                                        <label for="" class="col-sm-1 col-form-label"> :</label>
                                        <div class="col-sm-9" style="margin-left: -60px;">
                                        <input type="text" class="form-control" id="nama" name="nama" maxlength="20" required>
                                        </div>
                                    </div>   
                                                                 
                                    <div class="mb-3 row">
                                        <label for="username" class="col-sm-1 col-form-label">Jabatan</label>
                                        <label for="" class="col-sm-1 col-form-label"> :</label>
                                        <div class="col-sm-9" style="margin-left: -60px;">
                                            <select name="jabatan" id="jabatan" class="form-select" required>
                                                <option value="" selected>--Pilih Jabatan--</option>
                                                <option value="kepsek">Kepsek</option>
                                                <option value="staf tu">Staf Tu</option>
                                                <option value="staf tu">Guru Mata Pelajaran</option>
                                            </select>
                                        </div>
                                    </div> 
                                    <div class="mb-3 row">
                                        <label for="username" class="col-sm-1 col-form-label">Alamat</label>
                                        <label for="" class="col-sm-1 col-form-label"> :</label>
                                        <div class="col-sm-9" style="margin-left: -50px;">
                                        <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control" placeholder="domisili" required></textarea>
                                    </div>                                                                  
                                </div>
                                <div class="col-4 text-center px-5"></div>
                                       <img src="../asset/image/default.png" alt="gambar user" class="mb-3" witdh="40px">
                                       <input type="file" name="image" class="form-control form-control-sm">
                                       <small class="text-secondary">pilih foto PNG, JPG atau JPEG dengan ukuran maximal 1 MB</small>
                                      
                                 </div>                    
                            </div>
                        </div>
                     </form>
                    </div>
                </main>
                <?php 
                
                require_once "../template/footer.php";
                


                ?>
