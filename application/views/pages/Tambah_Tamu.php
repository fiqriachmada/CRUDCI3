
<div class="container mt-4">
    <form method="POST" action="<?= base_url(); ?>index.php/App/insert">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama">
            </div>
            <div class="form-group col-md-6">
                <label for="Npm">Alamat</label>
                <input type="text" class="form-control" name="alamat" placeholder="Alamat">
            </div>
        </div>
        <!-- <div class="form-group">
            <label for="">Jurusan</label>
            <select class="form-control" name="slctJurusan">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Kimia">Teknik Kimia</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
            </select>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="">Kelamin </label>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="" value="Laki-laki">
                    <label class="form-check-label" for="">
                        Laki - laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="" value="Perempuan">
                    <label class="form-check-label" for="">
                        Perempuan
                    </label>
                </div>
            </div>
            <div class="form-group col-md-2">
                <label for="">Umur</label>
                <input type="number" class="form-control" name="umur">
            </div>
        </div> -->
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>