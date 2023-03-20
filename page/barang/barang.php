<div class="card">
              <div class="card-header">
                <h3 class="card-title">Barang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <a href="?page=barang&aksi=tambah" class="btn btn-info btn-sm">Tambah Data</a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Jenis Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $no = 1;
                  $sql = mysqli_query($koneksi,"SELECT * FROM barang");
                  while ($data = $sql->fetch_assoc()) {
                  ?>
                      <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $data['id_barang'];?></td>
                          <td><?php echo $data['nama_barang'];?></td>
                          <td><?php echo $data['jenis_barang'];?></td>
                          <td><?php echo $data['jumlah_barang'];?></td>
                          <td> 
                            <a href="?page=barang&aksi=ubah&ID=<?php echo $data['id_barang'];?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="?page=barang&aksi=hapus&ID=<?php echo $data['id_barang'];?>" class="btn btn-danger btn-sm">Hapus</a>
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