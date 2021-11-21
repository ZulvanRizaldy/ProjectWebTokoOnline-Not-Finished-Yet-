<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php 
    include "koneksi.php";
    $qry_get_makanan=mysqli_query($conn,"select * from makanan where id_makanan = '".$_GET['id_makanan']."'");
    $dt_makanan=mysqli_fetch_array($qry_get_makanan);
    ?>
    <h3>Ubah Data Makanan</h3>
    <form action="proses_ubah_makanan.php" method="post">
    <input type="hidden" name="id_makanan" value= <input type="hidden" name="id_makanan" value= "<?=$dt_makanan['id_makanan']?>">
        <br>Nama makanan 
        <input type="text" name="nama_makanan" value="<?=$dt_makanan['nama_makanan']?>" class="form-control">
        <br>Harga : 
        <input type="text" name="harga" value="<?=$dt_makanan['harga']?>" class="form-control"><?=$dt_makanan['harga']?>">
        <br>Deskripsi
        <textarea name="deskripsi" wid="" cols="30" rows="10" class="form-control"><?=$dt_makanan['deskripsi']?>"></textarea>
        <br>Foto Pizza :
        <input type="file" name="foto" id="foto" value="<?=$dt_makanan['foto']?>"class = "form-control"><?=$dt_makanan['harga']?>">
        <input type="submit" name="simpan" value="Tambah Pizza" class="btn btn-primary">
        <input type="submit" name="edit" value="Edit Pizza" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
