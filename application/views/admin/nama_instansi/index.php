<?php $c_name = "NamaInstansi" ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-info">
                  <div class="row">
                    <div class="col-md-10">
                  <h4 class="card-title ">Nama Instansi</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                  </div>
                </div>
              </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                    <thead class=" text-danger">
                      <th>ID.</th>
                      <th>Nama Sekolah</th>
                      <th>Alamat</th>
                      <th>No. HP</th>
                      <th>Logo</th>
                      <th>ID Siswa</th>
                      <th></th>
                    </thead>
                    <tbody>
                      <?php foreach ($data as $key => $value): ?>
                        <tr>
                          <td><?php echo ++$key; ?></td>
                          <td><?php echo $value->nama_instansi ?></td>
                          <td><?php echo $value->alamat ?></td>
                          <td><?php echo $value->no_hp ?></td>
                          <td><?php echo $value->gambar ?></td>
                            <td><?php echo $value->fk_id_siswa ?></td>
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
