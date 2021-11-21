<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
if($_POST){
    include "koneksi.php";
    // $nama_makanan = mysqli_real_escape_string($conn, $_POST['nama_makanan']);
    // $penulis = mysqli_real_escape_string($conn, $_POST['harga']);
    // $penerbit = mysqli_real_escape_string($conn, $_POST['deskripsi']);
    $username=$_POST['username'];
    $password=$_POST['password'];
    $alamat=$_POST['alamat'];
    $telp=$_POST['telp'];


    if(empty($username)){
        echo "<script> alert ('username tidak boleh kosong'); 
        location.href = 'registrasi_pelanggan.php';</script>";
    } elseif (empty($password)){
        echo "<script> alert ('password tidak boleh kosong'); 
        location.href = 'registrasi_pelanggan.php';</script>";
    } elseif (empty($alamat)){
        echo "<script> alert ('alamat tidak boleh kosong'); 
        location.href = 'registrasi_pelanggan.php';</script>";
    } elseif (empty($telp)){
        echo "<script> alert ('No. Telp tidak boleh kosong'); 
        location.href = 'registrasi_pelanggan.php';</script>";
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into pelanggan (username,password, alamat, telp ) value ('".$username."','".md5($password)."','".$alamat."','".$telp."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses melakukan registrasi');location.href='login.php';</script>";
        } else {
            echo "<script>alert('Gagal melakukan registrasi');location.href='login.php';</script>";
        }
        mysqli_close($conn);
    }
}
?>