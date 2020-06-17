<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="jumbotron">
        <form action="/update/{{ $beritas->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <input type="hidden" name="id" id="id" value="{{ $beritas->id }}">
        
        <div class="form-group">
            <label>Judul</label>
        <input type="text" name="title" class="form-control" value="{{ $beritas->title }}">
        </div>
        <div class="form-group">
            <label>Konten</label>
        <input type="text" name="content" class="form-control" value="{{ $beritas->content }}">
        </div>
        <label>Image</label>
        <div class="input-group">
            <div class="custom-file">
            <input type="file" name="image" class="custom-file-input" value="{{ $beritas->image }}">
            <label class="custom-file-label">Choose File</label>
            </div>
        </div>
        <br><br>

            <button type="submit" name="submit" class="btn btn-primary btn-lg">Update</button>

        </form>
        </div>
    </div>
    
</body>
</html>