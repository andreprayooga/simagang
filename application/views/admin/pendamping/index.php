<?php $c_name = "PendampingMagang" ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-rose">
                  <div class="row">
                    <div class="col-md-10">
                  <h4 class="card-title ">Data Pendamping Magang</h4>
                  <p class="card-category">List table Pendamping Siswa</p>
                  </div>
                  <div class="col-xs-2">
                    <a href="<?= base_url('index.php/Admin/PendampingMagang/insert') ?>" rel="tooltip" title="Tambah Data" class="btn btn-secondary">
                      <i class="material-icons">add_box</i>
                    </a>
                  </div>
                </div>
              </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                    <thead class=" text-rose">
                      <th>ID.</th>
                      <th>Nama Pendamping</th>
                      <th>Email</th>
                      <th>No HP</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th></th>
                    </thead>
                    <tbody>
                      <?php foreach ($data as $key => $value): ?>
                        <tr>
                          <td><?php echo ++$key; ?></td>
                          <td><?php echo $value->nama ?></td>
                          <td><?php echo $value->email ?></td>
                          <td><?php echo $value->no_hp ?></td>
                          <td><?php echo $value->username ?></td>
                          <td><?php echo $value->password ?></td>
                          <td>
                            <a class="btn btn-sm btn-warning" href="<?php echo site_url("Admin/".$c_name."/update/".$value->id_pendamping) ?>"  rel="tooltip" title="Edit"><i class="material-icons">edit</i></a>
                            <a href="<?php echo site_url("Admin/".$c_name."/delete/".$value->id_pendamping) ?>" onclick="return confirm('Apakah anda yakin?')" class="btn btn-sm btn-danger"  rel="tooltip" title="Hapus"><i class="material-icons">delete</i></a>
                          </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                  </table>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
