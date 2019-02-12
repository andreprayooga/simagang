<?php $c_name = "Absensi" ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
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
                  </div>
                </div>
              </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="table-export">
                      <thead class=" text-rose">
                        <th>ID.</th>
                        <th>Tanggal</th>
                        <th>Datang</th>
                        <th>Pulang</th>
                        <th>Aktivitas</th>
                        <th>Keterangan</th>
                        <th>Siswa</th>
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
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script>
$(document).ready(function() {
    $('#table-export').DataTable( {
        dom: 'Bfrtip',
        buttons: [
          'excel', 'pdf', 'print'
        ]
    } );
} );
</script>