
<div class="card">

              <div class="card-header">
                <h3 class="card-title">Laporan Penjualan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="?page=supply&aksi=tambah" class="btn btn-info btn-sm">Tambah Data</a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>ID Supplier</th>
                    <th>ID Barang</th>
                    <th>Nama Supplier</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $no = 1;
                  $sql = mysqli_query($koneksi,"SELECT * FROM barang INNER JOIN supplier ON barang.id_barang = supplier.id_barang");
                  while ($data = $sql->fetch_assoc()) {
                  ?>
                      <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $data['id_supplier'];?></td>
                          <td><?php echo $data['id_barang']; ?></td>
                          <td><?php echo $data['nama_supplier']; ?></td>
                          <td><?php echo $data['tanggal']; ?></td>
                        <td>
                        <a href="?page=supply&aksi=ubah&ID=<?php echo $data['id_supplier'];?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="?page=supply&aksi=hapus&ID=<?php echo $data['id_supplier'];?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                      </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->