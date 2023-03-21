<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
// include "koneksi.php";
include "koneksi_inventaris.php";
?>
<!DOCTYPE html
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">



</head>
<body class="">
<div class="">
      <nav class="navbar navbar-dark bg-dark">
        <ul class="nav nav-pills nav-sidebar" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="?page=" class="nav-link">
              <!-- <i class="nav-icon fas fa-home"></i> -->
              <p>
              Dashboard
              </p>
            </a>
          </li>
              <li class="nav-item">
                <a href="?page=penjualan" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Laporan Penjualan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=barang" class="nav-link">
                  <i class="fas fa-book nav-icon"></i>
                  <p>Barang</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="?page=barang_inventaris" class="nav-link">
                  <i class="fas fa-book nav-icon"></i>
                  <p>Barang (Inventaris)</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="?page=supply" class="nav-link">
                  <i class="fas fa-book nav-icon"></i>
                  <p>Supplier</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="?page=kategori" class="nav-link">
                  <i class="fas fa-book nav-icon"></i>
                  <p>Kategori</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="?page=stok" class="nav-link">
                  <i class="fas fa-book nav-icon"></i>
                  <p>Stok</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="logout.php" class="nav-link">
                  <i class="fas fa-book nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li> 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0">Dashboard</h1> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <?php
      $page=$_GET['page'];
      $aksi=$_GET['aksi'];
      
      if ($page == "penjualan") {
        if ($aksi == "") {
          include "page/penjualan/index.php";
          } elseif ($aksi == "tambah") {
            include "page/penjualan/tambah.php";
          } elseif ($aksi == "ubah") {
            include "page/penjualan/ubah.php";
          } elseif ($aksi == "hapus") {
            include "page/penjualan/hapus.php";
          } 
        } elseif ($page == "barang") {
          if ($aksi == "") {
            include "page/barang/index.php";
            } elseif ($aksi == "tambah") {
              include "page/barang/tambah.php";
            } elseif ($aksi == "ubah") {
              include "page/barang/ubah.php";
            } elseif ($aksi == "hapus") {
              include "page/barang/hapus.php";
            } 
        } elseif ($page == "barang_inventaris") {
          if ($aksi == "") {
            include "page/barang_inventaris/index.php";
            } elseif ($aksi == "tambah") {
              include "page/barang_inventaris/tambah.php";
            } elseif ($aksi == "ubah") {
              include "page/barang_inventaris/ubah.php";
            } elseif ($aksi == "hapus") {
              include "page/barang_inventaris/hapus.php";
            } 
        } elseif ($page == "supply") {
          if ($aksi == "") {
            include "page/supply/index.php";
            } elseif ($aksi == "tambah") {
              include "page/supply/tambah.php";
            } elseif ($aksi == "ubah") {
              include "page/supply/ubah.php";
            } elseif ($aksi == "hapus") {
              include "page/supply/hapus.php";
            } 
        } elseif ($page == "kategori") {
          if ($aksi == "") {
            include "page/kategori/index.php";
            } elseif ($aksi == "tambah") {
              include "page/kategori/tambah.php";
            } elseif ($aksi == "ubah") {
              include "page/kategori/ubah.php";
            } elseif ($aksi == "hapus") {
              include "page/kategori/hapus.php";
            } 
        } 
        elseif ($page == "stok") {
          if ($aksi == "") {
            include "page/stok/index.php";
            } elseif ($aksi == "tambah") {
              include "page/stok/tambah.php";
            } elseif ($aksi == "ubah") {
              include "page/stok/ubah.php";
            } elseif ($aksi == "hapus") {
              include "page/stok/hapus.php";
            } 
        } 
         elseif ($page == "index") {
            include "index.php";
      }
      ?>
      
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->

</div>

<!-- script -->
<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
<!-- ./wrapper -->
</body>
</html>