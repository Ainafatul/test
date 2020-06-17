<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Berita</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
   
  <form class="form-signin"  method="POST" action="{{ route('jual.index')}}" enctype="multipart/form-data"> 
    @csrf
      <h1 class="h3 mb-3 font-weight-normal">---</h1>

      <label for="inputkategori" class="sr-only">Kategori</label>
      <input name="kategori" type="text" id="inputkategori" class="form-control" placeholder="kategori" required autofocus>

      <label for="inputnama" class="sr-only">Nama Properti</label>
      <textarea name="nm_properti" type="text" id="inputnama" class="form-control" placeholder="nama properti" required></textarea>

      <label for="inputkamarmandi" class="sr-only">Jumlah Kamar Mandi</label>
      <input name="kmr_mandi" type="text" id="inputkamarmandi" class="form-control" placeholder="jumlah kamar mandi" required autofocus>

      <label for="inputnama" class="sr-only">Jumlah Kamar Tidur</label>
      <textarea name="kmr_tidur" type="text" id="inputnama" class="form-control" placeholder="jumlah kamar tidur" required></textarea>
      
      <label for="inputkamarmandi" class="sr-only">Jumlah Lantai</label>
      <input name="lantai" type="text" id="inputkamarmandi" class="form-control" placeholder="jumlah kamar mandi" required autofocus>

      <label for="inputnama" class="sr-only">Luas Tanah</label>
      <textarea name="luas_tanah" type="text" id="inputnama" class="form-control" placeholder="jumlah kamar tidur" required></textarea>
      
      <label for="inputkamarmandi" class="sr-only">Luas Bangunan</label>
      <input name="luas_bangunan" type="text" id="inputkamarmandi" class="form-control" placeholder="jumlah kamar mandi" required autofocus>

      <label for="inputnama" class="sr-only">Alamat</label>
      <textarea name="alamat" type="text" id="inputnama" class="form-control" placeholder="jumlah kamar tidur" required></textarea>

      <label for="inputkamarmandi" class="sr-only">Harga</label>
      <input name="harga" type="text" id="inputkamarmandi" class="form-control" placeholder="jumlah kamar mandi" required autofocus>

      <label for="inputnama" class="sr-only">Keterangan</label>
      <textarea name="keterangan" type="text" id="inputnama" class="form-control" placeholder="jumlah kamar tidur" required></textarea>

      <label for="inputGambar" class="sr-only">Gambar</label>
      <input name="image[]" type="file" id="inputGambar" class="form-control"  required >

      
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Simpan</button>
      
    </form>
    
   
  </body>
</html>
