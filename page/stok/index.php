<div class="card">
              <div class="card-header">
                <h3 class="card-title">stok</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <a href="?page=stok&aksi=tambah" class="btn btn-info btn-sm">Tambah Data</a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>ID stok</th>
                    <th>ID Barang</th>
                    <th>Jumlah Stok</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $no = 1;
                  $sql = mysqli_query($koneksi,"SELECT * FROM stok INNER JOIN barang ON stok.id_barang = barang.id_barang");
                  while ($data = $sql->fetch_assoc()) {
                  ?>
                      <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $data['id_stok'];?></td>
                          <td><?php echo $data['id_barang'];?></td>
                          <td><?php echo $data['jumlah_stok'];?></td>
                          <td> 
                            <a href="?page=stok&aksi=ubah&ID=<?php echo $data['id_stok'];?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="?page=stok&aksi=hapus&ID=<?php echo $data['id_stok'];?>" class="btn btn-danger btn-sm">Hapus</a>
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