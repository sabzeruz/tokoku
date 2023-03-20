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
                    <input type="text" class="form-control" name="id_barang" id="id_auto_input" value="<?php echo $kdBarang; ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label >Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang" id="namaBarang" placeholder="Masukan Nama Barang">
                  </div>  
                  <div class="form-group">
        <label>Nama Kategori</label>

        <Select class="form-control" name="id_kategori">
          <option value="">-> Pilih ID Kategori <- </option>
              <?php
              $idB = mysqli_query($koneksi, "SELECT * FROM kategori");
              while ($result = mysqli_fetch_assoc($idB)) {
              ?>
          <option value="<?= $result['id_kategori'] ?>"><?= $result['nama_kategori'] ?></option>
        <?php } ?>
        </Select>
      </div>
      <div class="form-group">
                    <label >Harga</label>
                    <input type="text" class="form-control" name="harga" id="harga" placeholder="Masukan Nama Barang">
                  </div>  
                  <div class="form-group">
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
    
  $id_barang = $_POST['id_barang'];
  $nama_barang = $_POST['nama_barang'];
  $id_kategori = $_POST['id_kategori'];
  $harga = $_POST['harga'];

  $sql = mysqli_query($koneksi,"INSERT INTO barang VALUE('$id_barang','$nama_barang','$id_kategori','$harga')");

    if ($sql) {
        ?>
        <script>
            alert('Data Berhasil Di Simpan')
            window.location.href = '?page=barang_inventaris';
        </script>
        <?php
        
    }

}
?>