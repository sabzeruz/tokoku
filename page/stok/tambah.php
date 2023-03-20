<?php
$sql = mysqli_query($koneksi, "SELECT max(id_stok) as maxid FROM stok");
$data = mysqli_fetch_array($sql);
$KodeStok = $data['maxid'];

$urutan = (int) substr($KodeStok, 3, 3);

$urutan++;

$huruf = "STK";
$kdStok = $huruf . sprintf("%03s", $urutan);
?>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Data Stok</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST">
        <div class="card-body">
            <div class="form-group">
                <label>ID Stok</label>
                <input type="text" class="form-control" name="id_stok" id="id_auto_input"
                    value="<?php echo $kdStok; ?>" readonly>
            </div>
            <div class="form-group">
        <label>Nama Barang</label>

        <Select class="form-control" name="id_barang">
          <option value="">-> Pilih Nama Barang <- </option>
              <?php
              $idB = mysqli_query($koneksi, "SELECT * FROM barang ");
              while ($result = mysqli_fetch_assoc($idB)) {
              ?>
          <option value="<?= $result['id_barang'] ?>"><?= $result['nama_barang'] ?></option>
        <?php } ?>
        </Select>
      </div>
            <div class="form-group">
                <label>Jumlah Barang</label>
                <input type="number" class="form-control" name="jumlah_stok" id="jenisBarang"
                    placeholder="Masukan Jumlah Barang">
            </div>
            <!-- <div class="form-group">
                    <label>Kategori Buku</label>
                    <Select class="form-control" name="jumlah_barang" value="<?php echo $data['kategori_buku']; ?>">
                      <option value="">-> Pilih Kategori Buku <-</option>
                      <option value="Blok">Blok</option>
                      <option value="Non Blok">Non Blok</option>
                    </Select>
                  </div> -->
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
                <!-- <button type="reset" class="btn btn-info">Reset</button> -->
            </div>
    </form>
</div>
<?php
if (isset($_POST['simpan'])) {
    
  $id_stok = $_POST['id_stok'];
  $id_barang = $_POST['id_barang'];
  $jumlah_Stok = $_POST['jumlah_stok'];

  $sql = mysqli_query($koneksi,"INSERT INTO stok VALUE('$id_stok','$id_barang','$jumlah_Stok')");

    if ($sql) {
        ?>
<script>
alert('Data Berhasil Di Simpan')
window.location.href = '?page=stok';
</script>
<?php
        
    }

}
?>