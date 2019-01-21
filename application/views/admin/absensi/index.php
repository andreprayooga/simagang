      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Simple Table</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>ID.</th>
                        <th>Tanggal</th>
                        <th>Datang</th>
                        <th>Pulang</th>
                        <th>Siswa</th>
                        <th>Aksi</th>
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
                              <a class="badge badge-warning" href="<?php echo site_url("Admin/".$c_name."/update/".$value->id_absensi) ?>"><i class="fa fa-pencil"></i> Edit</a>
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
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>
