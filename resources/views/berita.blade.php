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
   
    <form class="form-signin"  method="POST" action="{{ route ('save') }}" enctype="multipart/from-data"> 
    @csrf
      <h1 class="h3 mb-3 font-weight-normal">---</h1>
      <label for="inputJudul" class="sr-only">Judul</label>
      <input name="title" type="text" id="inputJudul" class="form-control" placeholder="Judul Berita" required autofocus>
      <label for="inputContent" class="sr-only">Konten</label>
      <textarea name="content" type="text" id="inputContent" class="form-control" placeholder="Konten Berita" required></textarea>
      <label for="inputGambar" class="sr-only">Gambar</label>
      <input name="image" type="file" id="inputGambar" class="form-control"  required >
     
      <button class="btn btn-lg btn-primary btn-block" type="submit">Simpan</button>
      
    </form>
    
   
  </body>
</html>
