<div class="container mt-4">
    <?php foreach ($tamu as $data) { ?>
        <form method="POST" action="<?= base_url('index.php/App/update/') . $data->id ?>">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?= $data->nama ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="Npm">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?= $data->alamat ?>">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    <?php } ?>
</div>