<?php
$id_stok= $_GET['ID'];
$sql = mysqli_query($koneksi,"SELECT * FROM stok WHERE id_stok='$id_stok'");
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
                    <label>ID Stok</label>
                    <input type="text" class="form-control" name="id_stok" value="<?php echo $data['id_stok'];?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>ID Barang</label>
                    <input type="text" class="form-control" name="id_Barang" value="<?php echo $data['id_barang'];?>">
                  </div>
                  <div class="form-group">
                    <label>Jenis Barang</label>
                    <input type="text" class="form-control" name="jumlah_stok" value="<?php echo $data['jumlah_stok'];?>">
                  </div>
            

                  <!-- <div class="form-group">
                    <label>Kategori barang</label>
                    <Select class="form-control" name="jumlah_stok">
                    <option value="<?php echo $data['jumlah_barang'];?>"><?php echo $data['jumlah_barang'];?></option>
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
    
    $id_stok = $_POST['id_stok'];
    $id_barang = $_POST['id_barang'];

        $sql = mysqli_query($koneksi,"UPDATE stok SET id_barang='$id_barang', jumlah_stok='$jumlah_stok' WHERE id_stok='$id_stok'");

        if ($sql) {
            ?>
            <script>
                alert ('Data Berhasil Di Ubah')
                window.location.href = '?page=barang';
            </script>
            <?php
        }

    }
    ?>