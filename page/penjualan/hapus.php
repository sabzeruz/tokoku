<?php
$id= $_GET['ID'];
    $sql = mysqli_query($koneksi,"DELETE FROM penjualan WHERE id_faktor='$id'");

    if ($sql) {
        ?>
            <script>
                alert ('Data Berhasil Di Hapus')
                window.location.href = '?page=penjualan';
            </script>
            <?php
    }
?>