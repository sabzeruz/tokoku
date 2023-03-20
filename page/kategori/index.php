<div class="card">
              <div class="card-header">
                <h3 class="card-title">Kategori</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <a href="?page=kategori&aksi=tambah" class="btn btn-info btn-sm">Tambah Data</a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>ID Kategori</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $no = 1;
                  $sql = mysqli_query($koneksi,"SELECT * FROM kategori");
                  while ($data = $sql->fetch_assoc()) {
                  ?>
                      <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $data['id_kategori'];?></td>
                          <td><?php echo $data['nama_kategori'];?></td>
                          <td> 
                            <a href="?page=kategori&aksi=ubah&ID=<?php echo $data['id_kategori'];?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="?page=kategori&aksi=hapus&ID=<?php echo $data['id_kategori'];?>" class="btn btn-danger btn-sm">Hapus</a>
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