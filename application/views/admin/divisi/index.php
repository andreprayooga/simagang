<?php $c_name = "Divisi" ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">
              <div class="row">
              <div class="card card-profile">
                <a href="<?php echo base_url('Barang/create')?>">
                  <div class="card-header card-header-info">
                    <h4 class="card-title">Divisi PKL</h4>
                  </div>
                </a>
                <div class="card-body">
                  <h6 class="card-category text-gray">Pemilihan DIvisi</h6>
                  <p class="card-description">
                    Menambahkan divisi dan mengontrol siswa yang masuk ke dalam divisi yang di tentukan
                  </p>
                  <!-- <?php echo anchor('Barang/create', 'Tambah', array('class' => 'btn btn-info btn-round')); ?> -->
                </div>
              </div>
            </div>
          <div class="row">
            <div class="card card-profile">
              <a href="#" data-toggle="modal" data-target="#exampleModal">
                <div class="card-header card-header-danger">
                  <h4 class="card-title">Tambah Divisi PKL</h4>
                </div>
              </a>
              <div class="card-body">
                <h6 class="card-category text-gray">Divisi PKL</h6>
                <p class="card-description">
                  Mendambah Divisi Baru
                </p>
                <button type="button" class="btn btn-danger btn-round" data-toggle="modal" data-target="#exampleModal">
                  Tambah
                </button>
              </div>
            </div>
          </div>
        </div>
          <div class="col-md-9">
              <div class="card">
                <div class="card-header card-header-rose">
                  <div class="row">
                    <div class="col-md-10">
                  <h4 class="card-title ">Simple Table</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                  </div>
                </div>
              </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                    <thead class=" text-rose">
                      <th>ID.</th>
                      <th>Nama Divisi</th>
                      <th>ID Pendamping</th>
                      <th>ID Siswa</th>
                      <th>Keterangan</th>
                      <th></th>
                    </thead>
                    <tbody>
                      <?php foreach ($data as $key => $value): ?>
                        <tr>
                          <td><?php echo ++$key; ?></td>
                          <td><?php echo $value->nama_divisi ?></td>
                          <td><?php echo $value->fk_id_pendamping ?></td>
                          <td><?php echo $value->fk_id_siswa ?></td>
                          <td><?php echo $value->keterangan ?></td>
                          <td>
                            <a class="btn btn-sm btn-success" href="#" rel="tooltip" title="Detail"><i class="material-icons">zoom_out_map</i></a>
                            <a class="btn btn-sm btn-warning" href="<?php echo site_url("Admin/".$c_name."/update/".$value->id_divisi) ?>"  rel="tooltip" title="Edit"><i class="material-icons">edit</i></a>
                            <a href="<?php echo site_url("Admin/".$c_name."/delete/".$value->id_divisi) ?>" onclick="return confirm('Apakah anda yakin?')" class="btn btn-sm btn-danger"  rel="tooltip" title="Hapus"><i class="material-icons">delete</i></a>
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
