<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
        <h1>Berita<h1>
        <a href="{{route('tambah')}}" class="btn btn-primary"> Add News</a>
            <table class="table table-stripped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Konten</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                  
                @foreach($beritas as $berita)
               
        
                    <tr>
                        <th>{{$berita->id}}</th>
                        <th>{{$berita->title }}</th>
                        <th>{{$berita->content }}</th>
                        <th><img src="{{ asset('/uploads/berita/'. $berita->image)}}" width="70px;" height="70px;" alt="image"></th>
                        <th><a href="/edit/{{ $berita->id }}" class="btn btn-success">Edit</a></th>
                        <th><a href="/delete/{{ $berita->id }}" class="btn btn-success">Delete</a></th>
                    </tr>
              
             
                @endforeach
                
                
                </tbody>
            </table>
           
        </div>
    </div>

</body>
</html>