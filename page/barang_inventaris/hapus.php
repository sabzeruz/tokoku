<?php
$id=$_GET['ID'];
$sql = mysqli_query($koneksi,"DELETE FROM barang WHERE id_barang='$id'");
if ($sql) {
    ?>
        <script>
            alert('Data Berhasil Di Hapus')
            window.location.href = '?page=barang';
        </script>
        <?php
}
?>