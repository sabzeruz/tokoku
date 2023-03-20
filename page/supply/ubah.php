<?php
$id = $_GET['ID'];
$sql = mysqli_query($koneksi, "SELECT * FROM supplier WHERE id_supplier='$id'");
$data = $sql->fetch_assoc();
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
        <label>ID supplier</label>
        <input type="text" class="form-control" name="id_supplier" value="<?php echo $data['id_supplier']; ?>" readonly>
      </div>
      <label>ID Barang</label>
      
      <div class="form-group">
        <label>Nama Supllier</label>
        <input type="text" class="form-control" name="nama_supplier" value="<?php echo $data['nama_supplier']; ?>">
      </div>
      <div class="form-group">
        <label>Tanggal</label>
        <input type="date" class="form-control" name="tanggal" value="<?php echo $data['tanggal']; ?>">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
      <!-- <button type="submit" class="btn btn-info">Kembali</button> -->
    </div>
  </form>
</div>
<?php
if (isset($_POST['simpan'])) {

  $id_supplier = $_POST['id_supplier'];
  $id_barang = $_POST['id_barang'];
  $nama_supplier = $_POST['nama_supplier'];
  $tanggal = $_POST['tanggal'];

  $sql = mysqli_query($koneksi, "UPDATE supplier SET id_barang='$id_barang', nama_supplier='$nama_supplier',tanggal='$tanggal' WHERE id_supplier='$id_supplier'");

  if ($sql) {
?>
    <script>
      alert('Data Berhasil Di Ubah')
      window.location.href = '?page=supply';
    </script>
<?php
  }
}
?>