<?= $this->extend('templates/template'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-6">
        <form action="/store" method="POST">
<div class="p-4">

<form action="/store" method="POST">

            <div class="form-group">
                <label for="npm">NPM</label>
                <input type="text" name="npm" class="form-control" id="npm">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea type="text" name="deskripsi" class="form-control" id="deskripsi"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


<?= $this->endSection(); ?>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control" id="nama">
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" class="form-control" id="alamat">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>