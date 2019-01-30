<?php $c_name = "Absensi" ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2">
              <div class="row">
              <div class="card card-profile">
                <a href="">
                  <div class="card-header card-header-info">
                    <h4 class="card-title">Activity Control</h4>
                  </div>
                </a>
                <div class="card-body">
                  <h6 class="card-category text-gray">Absensi</h6>
                  <p class="card-description">
                    Mengontrol kehadiran siswa selama menjalani PKL
                  </p>
                  <!-- <?php echo anchor('Barang/create', 'Tambah', array('class' => 'btn btn-info btn-round')); ?> -->
                </div>
              </div>
            </div>
            <div class="row">
              <div class="card card-profile">
                <a href="<?= base_url('index.php/Admin/Absensi/insert') ?>">
                  <div class="card-header card-header-danger">
                    <h4 class="card-title">Absensi</h4>
                  </div>
                </a>
                <div class="card-body">
                  <h6 class="card-category text-gray">Kehadiran User</h6>
                  <p class="card-description">
                    Menambah Absensi Baru
                  </p>
                  <button type="button" class="btn btn-danger btn-round" data-toggle="modal" data-target="#exampleModal">
                    Tambah
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-10">
              <div class="card">
                <div class="card-header card-header-rose">
                  <div class="row">
                    <div class="col-md-10">
                  <h4 class="card-title ">Absensi Kehadiran</h4>
                  <p class="card-category">Untuk mencatat kehadiran siswa setiap hari</p>
                  </div>
                  <div class="col-xs-2">
                    <a href="#" rel="tooltip" title="Print" class="btn btn-secondary">
                      <i class="material-icons">print</i>
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
                              <a class="btn btn-sm btn-success" href="#" rel="tooltip" title="Detail"><i class="material-icons">zoom_out_map</i></a>
                              <a class="btn btn-sm btn-warning" href="<?php echo site_url("Admin/".$c_name."/update/".$value->id_absensi) ?>"  rel="tooltip" title="Edit"><i class="material-icons">edit</i></a>
                              <a href="<?php echo site_url("Admin/".$c_name."/delete/".$value->id_absensi) ?>" onclick="return confirm('Apakah anda yakin?')" class="btn btn-sm btn-danger"  rel="tooltip" title="Hapus"><i class="material-icons">delete</i></a>
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
