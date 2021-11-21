<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tambah Makanan</h3>
    <form action="ptambahmakanan.php" method="post">
        <br>Nama makanan :
        <input type="text" name="nama_makanan" value="" class="form-control">
        <br>Harga : 
        <input type="text" name="harga" value="" class="form-control">
        <br>Deskripsi
        <textarea name="deskripsi" wid="" cols="30" rows="10" class="form-control"></textarea>
        <br>Foto Pizza :
        <input type="file" name="foto" id="foto" class = "form-control">
        <input type="submit" name="simpan" value="Tambah Pizza" class="btn btn-primary">
        <input type="submit" name="edit" value="Edit pizza" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"></script>
</body>
</html>