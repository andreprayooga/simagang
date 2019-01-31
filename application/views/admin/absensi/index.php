<?php $c_name = "Absensi" ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-rose">
                  <div class="row">
                    <div class="col-md-10">
                  <h4 class="card-title ">Absensi Kehadiran</h4>
                  <p class="card-category">Untuk mencatat kehadiran siswa setiap hari</p>
                  </div>
                  <div class="col-xs-2">
                    <a href="<?= base_url('index.php/Admin/Absensi/insert') ?>" rel="tooltip" title="Tambah Data" class="btn btn-secondary">
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
                        <th>Tanggal</th>
                        <th>Datang</th>
                        <th>Pulang</th>
                        <th>Aktivitas</th>
                        <th>Keterangan</th>
                        <th>Siswa</th>
                        <th></th>
                      </thead>
                      <tbody>
                        <?php foreach ($data as $key => $value): ?>
                          <tr>
                            <td><?php echo ++$key; ?></td>
                            <td><?php echo date("Y-m-d", strtotime($value->tanggal)) ?></td>
                            <td><?php echo $value->datang ?></td>
                            <td><?php echo $value->pulang ?></td>
                            <td><?php echo $value->aktivitas ?></td>
                            <td><?php echo $value->keterangan ?></td>
                            <td><?php echo $value->fk_id_siswa ?></td>

                            <td>
                              <a class="btn btn-sm btn-warning" href="<?php echo site_url("Admin/".$c_name."/update/".$value->id_absensi) ?>"><i class="fa fa-pencil"></i> Edit</a>
                              <a href="<?php echo site_url("Admin/".$c_name."/delete/".$value->id_absensi) ?>" onclick="return confirm('Apakah anda yakin?')" class="btn btn-sm btn-danger">
                                <i class="fa fa-trash"></i> Hapus
                              </a>
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
