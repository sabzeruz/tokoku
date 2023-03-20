<?php

$sql = mysqli_query($koneksi, "SELECT max(id_supplier) as maxid FROM supplier");
$data = mysqli_fetch_assoc($sql);
$kodeSupplier = $data['maxid'];

$urutan = (int) substr($kodeSupplier, 3, 3);

$urutan++;

$huruf = "IDS";
$kodeSupplier = $huruf . sprintf("%03s", $urutan);
?>
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Input Data</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form method="POST">
    <div class="card-body">
      <div class="form-group">
        <label>ID Faktor</label>
        <input type="text" class="form-control" name="id_supplier" value="<?php echo $kodeSupplier; ?>" readonly>
      </div>
      <div class="form-group">
        <label>ID Barang</label>

        <Select class="form-control" name="id_barang">
          <option value="">-> Pilih ID Barang <- </option>
              <?php
              $idB = mysqli_query($koneksi, "SELECT * FROM barang");
              while ($result = mysqli_fetch_assoc($idB)) {
              ?>
          <option value="<?= $result['id_barang'] ?>"><?= $result['id_barang'] ?></option>
        <?php } ?>
        </Select>
      </div>

      <div class="form-group">
        <label>Nama Supplier</label>
        <input type="text" class="form-control" name="nama_supplier" placeholder="Masukkan Pengguna">
      </div>
      <div class="form-group">
        <label>Tanggal</label>
        <input type="date" class="form-control" name="tanggal" value="">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
      <!-- <button type="submit" class="btn btn-info">Reset</button> -->
    </div>
  </form>
</div>
<?php
if (isset($_POST['simpan'])) {

  $id_supplier = $_POST['id_supplier'];
  $id_barang = $_POST['id_barang'];
  $nama_supplier = $_POST['nama_supplier'];
  $tanggal = $_POST['tanggal'];

  $sql = mysqli_query($koneksi, "INSERT INTO supplier VALUE('$id_supplier','$id_barang','$nama_supplier','$tanggal')");


  if ($sql) {
?>
    <script>
      alert('Data Berhasil Di Simpan')
      window.location.href = '?page=supply';
    </script>
<?php
  }
}
?>