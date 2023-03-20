<?php
$id= $_GET['ID'];
$sql = mysqli_query($koneksi,"DELETE FROM supplier WHERE id_supplier='$id'");

    if ($sql) {
        ?>
            <script>
                alert ('Data Berhasil Di Hapus')
                window.location.href = '?page=supply';
            </script>
            <?php
    }
?>