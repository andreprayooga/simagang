<?php $c_name = "SiswaMagang" ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-rose">
                  <div class="row">
                    <div class="col-md-10">
                  <h4 class="card-title ">Siswa Magang</h4>
                  <p class="card-category">List Siswa yang magang</p>
                  </div>
                </div>
              </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                    <thead class=" text-rose">
                      <th>ID.</th>
                      <th>NIM / NISN</th>
                      <th>Nama Siswa</th>
                      <th>Email</th>
                      <th>Jurusan</th>
                      <th>Nama Instansi</th>
                      <th>Semester</th>
                      <th>Alamat</th>
                      <th>No. HP</th>
                      <th>Jenis Kelamin</th>
                      <th></th>
                    </thead>
                    <tbody>
                      <?php foreach ($data as $key => $value): ?>
                        <tr>
                          <td><?php echo ++$key; ?></td>
                          <td><?php echo $value->nim_nisn ?></td>
                          <td><?php echo $value->nama ?></td>
                          <td><?php echo $value->email ?></td>
                          <td><?php echo $value->jurusan ?></td>
                          <td><?php echo $value->nama_instansi ?></td>
                          <td><?php echo $value->semester ?></td>
                          <td><?php echo $value->alamat ?></td>
                          <td><?php echo $value->no_hp ?></td>
                          <td><?php echo $value->jenis_kelamin ?></td>
                          <td>
                            <a class="btn btn-sm btn-success" href="#" rel="tooltip" title="Detail"><i class="material-icons">zoom_out_map</i></a>
                            <a class="btn btn-sm btn-warning" href="<?php echo site_url("Admin/".$c_name."/update/".$value->id_siswa) ?>"  rel="tooltip" title="Edit"><i class="material-icons">edit</i></a>
                            <a href="<?php echo site_url("Admin/".$c_name."/delete/".$value->id_siswa) ?>" onclick="return confirm('Apakah anda yakin?')" class="btn btn-sm btn-danger"  rel="tooltip" title="Hapus"><i class="material-icons">delete</i></a>
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
