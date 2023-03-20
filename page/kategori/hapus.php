<?php
$id=$_GET['ID'];
$sql = mysqli_query($koneksi,"DELETE FROM kategori WHERE id_kategori='$id'");
if ($sql) {
    ?>
        <script>
            alert('Data Berhasil Di Hapus')
            window.location.href = '?page=kategori';
        </script>
        <?php
}
?>