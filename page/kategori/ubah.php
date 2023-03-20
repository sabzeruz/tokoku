<?php
$id_kategori= $_GET['ID'];
$sql = mysqli_query($koneksi,"SELECT * FROM kategori WHERE id_kategori='$id_kategori'");
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
                    <label>ID Kategori</label>
                    <input type="text" class="form-control" name="id_kategori" value="<?php echo $data['id_kategori'];?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>Nama Kategori</label>
                    <input type="text" class="form-control" name="nama_kategori" value="<?php echo $data['nama_kategori'];?>">
                  </div>

                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
                  <!-- <button type="submit" class="btn btn-info">Reset</button> -->
                </div>
              </form>
            </div>
    <?php
    if (isset($_POST['simpan'])) {
    
    $id_kategori = $_POST['id_kategori'];
    $nama_kategori = $_POST['nama_kategori'];

        $sql = mysqli_query($koneksi,"UPDATE kategori SET nama_kategori='$nama_kategori' WHERE id_kategori='$id_kategori'");

        if ($sql) {
            ?>
            <script>
                alert ('Data Berhasil Di Ubah')
                window.location.href = '?page=kategori';
            </script>
            <?php
        }

    }
    ?>