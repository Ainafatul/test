<form action="/posts" method="POST">
@csrf
<div class="form-group">
    <label>Judul</label>
    <input type="text" class="form-control" name="judul">
</div>
<div class="form-group">
    <label>Konten</label>
    <textarea type="text" class="form-control" name="content"></textarea>
</div>
<div class="form-group">
    <label>Thumbnail</label>
    <input type="file" class="form-control" name="gambar">
</div>
<div class="form-group">
    <button class="btn btn-primary btn-block">Simpan</button>
</div>
</form>