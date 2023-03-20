<?php
$id_barang= $_GET['ID'];
$sql = mysqli_query($koneksi,"SELECT * FROM barang LEFT JOIN kategori ON barang.id_kategori = kategori.id_kategori WHERE id_barang='$id_barang'");
$data = mysqli_fetch_assoc($sql);
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
                    <label>ID Barang</label>
                    <input type="text" class="form-control" name="id_barang" value="<?php echo $data['id_barang'];?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang" value="<?php echo $data['nama_barang'];?>">
                  </div>
                  <div class="form-group">
                    <label>Nama Kategori</label>
                    <Select class="form-control" name="id_kategori">
                  <option value="<?php echo $data['id_kategori'];?>"><?php echo $data['nama_kategori'];?></option>
              <?php
              $idB = mysqli_query($koneksi, "SELECT * FROM kategori");
              while ($result = mysqli_fetch_assoc($idB)) {
              ?>
          <option value="<?= $result['id_kategori'] ?>"><?= $result['nama_kategori'] ?></option>
        <?php } ?>
                    </Select>
                  </div>
                  <div class="form-group">
                    <label>Jumlah Barang</label>
                    <input type="text" class="form-control" name="harga" value="<?php echo $data['harga'];?>">
                  </div>

                  <!-- <div class="form-group">
                    <label>Kategori barang</label>
                    <Select class="form-control" name="harga">
                    <option value="<?php echo $data['harga'];?>"><?php echo $data['harga'];?></option>
                      <option value="Blok">Blok</option>
                      <option value="Non Blok">Non Blok</option>
                    </Select>
                  </div> -->
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
                  <!-- <button type="submit" class="btn btn-info">Reset</button> -->
                </div>
              </form>
            </div>
    <?php
    if (isset($_POST['simpan'])) {
    
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $id_kategori = $_POST['id_kategori'];
    $harga = $_POST['harga'];

        $sql = mysqli_query($koneksi,"UPDATE barang SET nama_barang='$nama_barang', id_kategori='$id_kategori', harga='$harga' WHERE id_barang='$id_barang'");

        if ($sql) {
            ?>
            <script>
                alert ('Data Berhasil Di Ubah')
                window.location.href = '?page=barang_inventaris';
            </script>
            <?php
        }

    }
    ?>