<?php
$sql = mysqli_query($koneksi, "SELECT max(id_barang) as maxid FROM barang");
$data = mysqli_fetch_array($sql);
$kodeBarang = $data['maxid'];

$urutan = (int) substr($kodeBarang, 3, 3);

$urutan++;

$huruf = "IDB";
$kdBarang = $huruf . sprintf("%03s", $urutan);
?>
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Barang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label>ID Barang</label>
                    <input type="text" class="form-control" name="id_barangs" id="id_auto_input" value="<?php echo $kdBarang; ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label >Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang" id="namaBarang" placeholder="Masukan Nama Barang">
                  </div>
                  <div class="form-group">
                    <label>Jenis Barang</label>
                    <input type="text" class="form-control" name="jenis_barang" id="jenisBarang" placeholder="Masukan Jenis Barang">
                  </div>
                  <div class="form-group">
                    <label>Jumlah Barang</label>
                    <input type="number" class="form-control" name="jumlah_barang" id="jenisBarang" placeholder="Masukan Jumlah Barang">
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
    
  $idb = $_POST['id_barangs'];
  $nama_barang = $_POST['nama_barang'];
  $jenis_barang = $_POST['jenis_barang'];
  $jumlah_barang = $_POST['jumlah_barang'];

  $sql = mysqli_query($koneksi,"INSERT INTO barang VALUE('$idb','$nama_barang','$jenis_barang','$jumlah_barang')");

    if ($sql) {
        ?>
        <script>
            alert('Data Berhasil Di Simpan')
            window.location.href = '?page=barang';
        </script>
        <?php
        
    }

}
?>