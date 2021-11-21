<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
if($_POST){
    include "koneksi.php";
    // $nama_makanan = mysqli_real_escape_string($conn, $_POST['nama_makanan']);
    // $penulis = mysqli_real_escape_string($conn, $_POST['harga']);
    // $penerbit = mysqli_real_escape_string($conn, $_POST['deskripsi']);
    $nama_makanan=$_POST['nama_makanan'];
    $harga=$_POST['harga'];
    $deskripsi=$_POST['deskripsi'];
    // if(isset($_FILES['foto'])){
    //     $foto=$_FILES['foto'];
    // } else {
    //     $foto = "";
    // }



    if(empty($nama_makanan)){
        echo "<script> alert ('nama makanan tidak boleh kosong'); 
        location.href = 'tambah_makanan.php';</script>";
    } elseif (empty($harga)){
        echo "<script> alert ('harga tidak boleh kosong'); 
        location.href = 'tambah_makanan.php';</script>";
    } elseif (empty($deskripsi)){
        echo "<script> alert ('deskripsi tidak boleh kosong'); 
        location.href = 'tambah_makanan.php';</script>";
    } /*elseif(!isset($_FILES['foto'])) {
            $fp=addslashes(file_get_contents($_FILES['foto']['tmp_name'])); //will store the image to fp
            var_dump($fp); die;
    } */ else {
        
        $ekstensi_diperbolehkan	= array('png','jpg');
        $namaFile = $_FILES['foto']['name'];
        $x = explode('.', $namaFile);
        $ekstensi = strtolower(end($x));
        $ukuran	= $_FILES['foto']['size'];
        $file_tmp = $_FILES['foto']['tmp_name'];
        // die("5");
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            die("1");
            if($ukuran < 1044070){		
                die("2");	
                move_uploaded_file($file_tmp, 'foto_produk/'.$namaFile);
            }else{
                die("3");
                echo "<script> alert ('ukuran file terlalu besar'); 
                location.href = 'tambah_makanan.php.php';</script>";
            }
        }else{
            die("4");
            echo "<script> alert ('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN'); 
            location.href = 'tambah_makanan.php';</script>";
        }
        
        $foto = 'http://localhost/toko/foto_produk/'.$namaFile;
        // $foto = $namaFile;
        $link = "insert into makanan(nama_makanan, harga, deskripsi, foto) values ('".$nama_makanan."','".$harga."','".$deskripsi."','".$foto."')";
        $insert = mysqli_query($conn, $link) or trigger_error(mysqli_error($conn)." ".$link);

        if ($insert){
            echo "<script> alert ('Sukses menambahkan makanan'); 
            location.href = 'tambah_makanan.php';</script>";
        } else {
            echo "<script> alert ('Gagal menambahkan makanan'); 
            location.href = 'tambah_makanan.php';</script>".mysqli_error($conn);
        }

        mysqli_close($conn);
    }
}
?>