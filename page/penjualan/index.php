
<div class="card">

              <div class="card-header">
                <h3 class="card-title">Laporan Penjualan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="?page=penjualan&aksi=tambah" class="btn btn-info btn-sm">Tambah Data</a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>ID Faktor</th>
                    <th>ID Barang</th>
                    <th>Tanggal Penjualan</th>
                    <th>Jumlah Penjualan</th>
                    
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $no = 1;
                  $sql = mysqli_query($koneksi,"SELECT * FROM penjualan INNER JOIN barang ON penjualan.id_barang = barang.id_barang");
                  while ($data = $sql->fetch_assoc()) {
                  ?>
                      <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $data['id_faktor'];?></td>
                          <td><?php echo $data['id_barang']; ?></td>
                          <td><?php echo $data['tgl_penjualan']; ?></td>
                          <td><?php echo $data['jumlah_penjualan']; ?></td>
                        <td>
                        <a href="?page=penjualan&aksi=ubah&ID=<?php echo $data['id_faktor'];?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="?page=penjualan&aksi=hapus&ID=<?php echo $data['id_faktor'];?>" class="btn btn-danger btn-sm">Hapus</a>
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