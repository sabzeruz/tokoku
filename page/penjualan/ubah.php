<?php
$id= $_GET['ID'];
$sql = mysqli_query($koneksi,"SELECT * FROM penjualan WHERE id_faktor='$id'");
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
                    <label>ID Faktor</label>
                    <input type="text" class="form-control" name="id_faktor" value="<?php echo $data['id_faktor'];?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>ID Barang</label>
                    <input type="text" class="form-control" name="id_barang" value="<?php echo $data['id_barang'];?>">
                  </div>
                  <div class="form-group">
                    <label>Tanggal Penjualan</label>
                    <input type="date" class="form-control" name="tgl_penjualan" value="<?php echo $data['tgl_penjualan'];?>">
                  </div>
                  <div class="form-group">
                    <label>Jumlah Penjualan</label>
                    <input type="text" class="form-control" name="jumlah_penjualan" value="<?php echo $data['jumlah_penjualan'];?>">
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
    
    $id_faktor = $_POST['id_faktor'];
    $id_barang = $_POST['id_barang'];
    $tgl_penjualan = $_POST['tgl_penjualan'];
    $jumlah_penjualan = $_POST['jumlah_penjualan'];

        $sql = mysqli_query($koneksi,"UPDATE user SET id_barang='$id_barang', tgl_penjualan='$tgl_penjualan',jumlah_penjualan='$jumlah_penjualan' WHERE id_faktor='$id_faktor'");

        if ($sql) {
            ?>
            <script>
                alert ('Data Berhasil Di Ubah')
                window.location.href = '?page=user';
            </script>
            <?php
        }

    }
    ?>