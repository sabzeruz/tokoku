<?php
$id=$_GET['ID'];
$sql = mysqli_query($koneksi,"DELETE FROM stok WHERE id_stok='$id'");
if ($sql) {
    ?>
        <script>
            alert('Data Berhasil Di Hapus')
            window.location.href = '?page=stok';
        </script>
        <?php
}
?>