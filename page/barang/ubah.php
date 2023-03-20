<?php
$id_barang= $_GET['ID'];
$sql = mysqli_query($koneksi,"SELECT * FROM barang WHERE id_barang='$id_barang'");
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
                    <label>ID Barang</label>
                    <input type="text" class="form-control" name="id_barang" value="<?php echo $data['id_barang'];?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang" value="<?php echo $data['nama_barang'];?>">
                  </div>
                  <div class="form-group">
                    <label>Jenis Barang</label>
                    <input type="text" class="form-control" name="jenis_barang" value="<?php echo $data['jenis_barang'];?>">
                  </div>
                  <div class="form-group">
                    <label>Jumlah Barang</label>
                    <input type="text" class="form-control" name="jumlah_barang" value="<?php echo $data['jumlah_barang'];?>">
                  </div>

                  <!-- <div class="form-group">
                    <label>Kategori barang</label>
                    <Select class="form-control" name="jumlah_barang">
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
    
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];

        $sql = mysqli_query($koneksi,"UPDATE barang SET nama_barang='$nama_barang', jenis_barang='$jenis_barang', jumlah_barang='$jumlah_barang' WHERE id_barang='$id_barang'");

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