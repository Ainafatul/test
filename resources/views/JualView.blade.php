<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
        <h1>Jual<h1>
        <a href="{{route('jual.store')}}" class="btn btn-primary"> Add News</a>
            <table class="table table-stripped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Kategori</th>
                        <th>Nama</th>
                        <th>Jumlah Kamar Mandi/th>
                        <th>Jumlah Kamar Tidur</th>
                        <th>Jumlah Lantai</th>
                        <th>Luas Tanah</th>
                        <th>Luas Bangunan</th>
                        <th>Alamat</th>
                        <th>Harga</th>
                        <th>Keterangan</th>
                        <th>Gambar</th>
                    </tr>
                </thead>
                <tbody>
                  
                @foreach($juals as $jual)
               
        
                    <tr>
                        <th>{{$jual->id}}</th>
                        <th>{{$jual->kategori }}</th>
                        <th>{{$jual->nm_properti }}</th>
                        <th>{{$jual->kmr_mandi}}</th>
                        <th>{{$jual->kmr_tidur}}</th>
                        <th>{{$jual->lantai}}</th>
                        <th>{{$jual->luas_tanah}}</th>
                        <th>{{$jual->luas_bangunan }}</th>
                        <th>{{$jual->alamat}}</th>
                        <th>{{$jual->harga}}</th>
                        <th>{{$jual->keterangan}}</th>
                        <th><? foreach(json_decode($jual->image) as $picture) { ?>
                             <img src="{{asset('/uploads/jual/'.$picture)}}" style="height: 70px; width:70px"/>
                        <? } ?>
                        </th>
                        
                        <th><a href="/edit/{{ $berita->id }}" class="btn btn-success">Edit</a></th>
                        <th><a href="/delete/{{ $berita->id }}" class="btn btn-success">Delete</a></th>
                    </tr>
              
             
                @endforeach
                
                
                </tbody>
            </table>
           
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
          $(".btn-success").click(function(){ 
              var html = $(".clone").html();
              $(".increment").after(html);
          });
          $("body").on("click",".btn-danger",function(){ 
              $(this).parents(".control-group").remove();
          });
        });
    </script>
</body>
</html>