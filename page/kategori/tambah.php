<?php
$sql = mysqli_query($koneksi, "SELECT max(id_kategori) as maxid FROM kategori");
$data = mysqli_fetch_array($sql);
$kodeKategori = $data['maxid'];

$urutan = (int) substr($kodeKategori, 3, 3);

$urutan++;

$huruf = "KTG";
$kdKategori = $huruf . sprintf("%03s", $urutan);
?>
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Kategori</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label>ID Kategori</label>
                    <input type="text" class="form-control" name="id_kategori" id="id_auto_input" value="<?php echo $kdKategori; ?>" readonly>
                  </div>
                  <div class="form-group">
        <!-- <label>ID Barang</label> -->

        <div class="form-group">
                    <label >Nama Barang</label>
                    <input type="text" class="form-control" name="nama_kategori" id="namaKategori" placeholder="Masukan Nama Kategori">
                  </div>  

        <!-- <Select class="form-control" name="id_kategori">
          <option value="">-> Pilih ID Barang <- </option>
              <?php
              $idB = mysqli_query($koneksi, "SELECT * FROM barang INNER JOIN kategori ON barang.id_kategori = kategori.id_kategori");
              while ($result = mysqli_fetch_assoc($idB)) {
              ?>
          <option value="<?= $result['id_kategori'] ?>"><?= $result['nama_kategori'] ?></option>
        <?php } ?>
        </Select> -->
      </div>
                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
                  <!-- <button type="reset" class="btn btn-info">Reset</button> -->
                </div>
              </form>
            </div>
<?php
if (isset($_POST['simpan'])) {
    
  $id_kategori = $_POST['id_kategori'];
  $nama_kategori = $_POST['nama_kategori'];
  $sql = mysqli_query($koneksi,"INSERT INTO kategori VALUE('$id_kategori','$nama_kategori')");

    if ($sql) {
        ?>
        <script>
            alert('Data Berhasil Di Simpan')
            window.location.href = '?page=kategori';
        </script>
        <?php
        
    }

}
?>