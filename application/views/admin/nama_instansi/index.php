<?php $c_name = "NamaInstansi" ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2">
              <div class="row">
              <div class="card card-profile">
                <a href="<?php echo base_url('Barang/create')?>">
                  <div class="card-header card-header-info">
                    <h4 class="card-title">Profile</h4>
                  </div>
                </a>
                <div class="card-body">
                  <h6 class="card-category text-gray">Nama Instansi User</h6>
                  <p class="card-description">
                    Pendidikan yang ditempuh oleh user
                  </p>
                  <!-- <?php echo anchor('Barang/create', 'Tambah', array('class' => 'btn btn-info btn-round')); ?> -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-10">
              <div class="card">
                <div class="card-header card-header-rose">
                  <div class="row">
                    <div class="col-md-10">
                  <h4 class="card-title ">Simple Table</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                  </div>
                  <div class="col-xs-2">
                    <a href="<?= base_url('index.php/Admin/NamaInstansi/insert') ?>" rel="tooltip" title="Tambah Data" class="btn btn-secondary">
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
                      <th>Nama Sekolah</th>
                      <th>Alamat</th>
                      <th>Provinsi</th>
                      <th>Kota</th>
                      <th></th>
                    </thead>
                    <tbody>
                      <?php foreach ($data as $key => $value): ?>
                        <tr>
                          <td><?php echo ++$key; ?></td>
                          <td><?php echo $value->nama_sekolah ?></td>
                          <td><?php echo $value->alamat ?></td>
                          <td><?php echo $value->provinsi ?></td>
                          <td><?php echo $value->kota ?></td>
                          <td>
                            <a class="btn btn-sm btn-success" href="#" rel="tooltip" title="Detail"><i class="material-icons">zoom_out_map</i></a>
                            <a class="btn btn-sm btn-warning" href="<?php echo site_url("Admin/".$c_name."/update/".$value->id_instansi) ?>"  rel="tooltip" title="Edit"><i class="material-icons">edit</i></a>
                            <a href="<?php echo site_url("Admin/".$c_name."/delete/".$value->id_instansi) ?>" onclick="return confirm('Apakah anda yakin?')" class="btn btn-sm btn-danger"  rel="tooltip" title="Hapus"><i class="material-icons">delete</i></a>
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
