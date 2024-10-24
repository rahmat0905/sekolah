<?php 

require_once "../config.php";

// jika tombol simpan di tekan 
if (isset($_POST['simpan'])) {
    // ambil value emlemen yang di posting
$username =trim(htmlspecialchars($_POST['username']));
$nama = trim(htmlspecialchars($_POST['nama']));
$jabatan = $_POST['jabatan'];
$alamat = trim(htmlspecialchars($_POST['alamat']));
$gambar = trim(htmlspecialchars($_FILES['image']['nama']));
$password = 1234;
$pass = password_hash($password, PASSWORD_DEFAULT);

// CEK USERNAME
$cekusername = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '$username'");
if (mysqli_num_rows($cekusername) > 0)(
    header("localtion:user.php?msg=cancel");
    return;
)

// upload gambar
if ($gambar != null) {
    $url = 'user.php';
    $gambar = uploadimg($url);

}else {
    $gambar = 'dafault.png';
}

mysqli_query($koneksi, "INSERT INTO tbl_user VALUE(null,'$username','$pass','$nama','$alamat','$jabatan'.'$gambar')");

header("localtionuser.php?=added");
return;

}


?>