<?php

$sql = mysqli_query($koneksi, "SELECT max(id_faktor) as maxid FROM penjualan");
$data = mysqli_fetch_assoc($sql);
$kodePenjualan = $data['maxid'];

$urutan = (int) substr($kodePenjualan, 3, 3);

$urutan++;

$huruf = "IDU";
$kodePenjualan = $huruf . sprintf("%03s", $urutan);
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
        <input type="text" class="form-control" name="id_faktor" value="<?php echo $kodePenjualan; ?>" readonly>
      </div>
      <div class="form-group">
        <label>ID Barang</label>

        <Select class="form-control" name="id_barang">
          <option value="">-> Pilih ID Barang <- </option>
              <?php
              $idB = mysqli_query($koneksi, "SELECT * FROM barang INNER JOIN penjualan ON barang.id_barang = penjualan.id_barang");
              while ($result = mysqli_fetch_assoc($idB)) {
              ?>
          <option value="<?= $result['id_barang'] ?>"><?= $result['id_barang'] ?></option>
        <?php } ?>
        </Select>
      </div>

      <div class="form-group">
        <label>Tanggal Penjualan</label>
        <input type="date" class="form-control" name="tgl_penjualan" placeholder="Masukkan Pengguna">
      </div>
      <div class="form-group">
        <label>Jumlah Penjualan</label>
        <input class="form-control" name="jumlah_penjualan" value="">
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

  $id_faktor = $_POST['id_faktor'];
  $id_barang = $_POST['id_barang'];
  $tgl_penjualan = $_POST['tgl_penjualan'];
  $jumlah_penjualan = $_POST['jumlah_penjualan'];

  $sql = mysqli_query($koneksi, "INSERT INTO penjualan VALUE('$id_faktor','$id_barang','$tgl_penjualan','$jumlah_penjualan')");


  if ($sql) {
?>
    <script>
      alert('Data Berhasil Di Simpan')
      window.location.href = '?page=penjualan';
    </script>
<?php
  }
}
?>