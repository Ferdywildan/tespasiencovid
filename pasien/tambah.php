
<?php
include '../aset/header.php';
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                  <h2>Tambah Data Pasien</h2>
                </div>
                <div class="card-body">
                  <form method="post" action="proses_tambah.php">
                <div class="form-group">
                  <label for="namalengkap_pasien">Nama Lengkap</label>
                  <input type="text" class="form-control" name="namalengkap_pasien" id="namalengkap_pasien" placeholder="Nama Lengkap Pasien">
                </div>
                <div class="form-group">
                  <label for="stok">Nama Pendek</label>
                  <input type="text" class="form-control" name="nama_pasien" id="nama_pasien" placeholder="Masukkan nama pasien">
                  <small class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                  <label for="umur_pasien">Umur</label>
                  <input type="text" class="form-control" name="umur_pasien" id="umur_pasien" placeholder="Masukkan Pengarang">
                  <small class="form-text text-muted">Contoh: 40 tahun</small>
                </div>
                <div class="form-group">
                  <label for="stok">Kota</label>
                  <input type="stok" class="form-control" name="alamat_pasien" id="alamat_pasien" placeholder="Masukkan alamat pasien">
                  <small class="form-text text-muted">Contoh : Bekasi </small>
                </div>
                <div class="form-group">
                  <label for="stok">Kecamatan</label>
                  <input type="stok" class="form-control" name="kecamatan_pasien" id="kecamatan_pasien" placeholder="Masukkan kecamatan pasien">
                  <small class="form-text text-muted">Contoh : Bekasi Barat</small>
                </div>
                <div class="form-group">
                  <label for="stok">Kelurahan/Desa</label>
                  <input type="stok" class="form-control" name="kelurahan_pasien" id="kelurahan_pasien" placeholder="Masukkan kelurahan pasien">
                  <small class="form-text text-muted">Contoh : Bekasi Barat</small>
                </div>
                <div class="form-group">
                  <label for="date">Tanggal Periksa</label>
                  <input type="date" class="form-control" name="tgl_periksa" id="tgl_periksa" placeholder="Masukkan tgl_periksa">
                  <small class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                  <label for="stok">Suhu</label>
                  <input type="number" class="form-control" name="suhu_pasien" id="suhu_pasien" placeholder="Masukkan suhupasien">
                  <small class="form-text text-muted">Contoh : 36 C</small>
                </div>
                 <!-- <div class="form-group">
                  <label for="stok">Kategori</label><br>
                  <input type="radio" name="id_kategori" value="1">Fiksi<br>
                  <input type="radio" name="id_kategori" value="2">Non Fiksi<br>
                </div> -->
                 <div class="form-group">
                  <label for="stok">Kategori</label>
                  <select class="form-control" name="id_kategori" style="width : 50">
                    <option value="">---pilih kategori---</option>
                    <option value="1">Isolasi Mandiri</option>
                     <option value="2">Dalam Pengawasan Medis</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="stok">Status</label>
                  <select class="form-control" name="id_status" style="width : 50">
                    <option value="">---pilih kategori---</option>
                    <option value="1">ODP(Oarang Dalam Pemantauan)</option>
                     <option value="2">PDP(PasienDalam Pemantauan</option>
                  </select>
                </div>

                <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<?php
include '../aset/footer.php';
?>