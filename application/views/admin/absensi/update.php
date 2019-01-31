<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title ">Edit Absensi</h4>
            <p class="card-category">Absensi User</p>
          </div>
          <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label class="bmd-label-floating">Tanggal</label>
                <input type="date" id="datepicker" name="tanggal" placeholder="Masukan tanggal" class="form-control" value="<?php echo date("Y-m-d",strtotime($absensi->tanggal)) ?>">
                <?php echo form_error("tanggal") ?>
              </div>
              <div class="form-group">
                <label class="bmd-label-floating">Datang</label>
                <div class="input-group clockpicker">
                  <input type="text" class="form-control" value="<?php echo $absensi->datang ?>" name="datang">
                  <span class="input-group-addon">
                    <!-- <span class="glyphicon glyphicon-time"></span> -->
                  </span>
                  <?php echo form_error("datang") ?>
                </div>
              </div>
              <div class="form-group">
                <label class="bmd-label-floating">Pulang</label>
                <div class="input-group clockpicker">
                  <input type="text" class="form-control" value="<?php echo $absensi->datang ?>" name="pulang">
                  <span class="input-group-addon">
                    <!-- <span class="glyphicon glyphicon-time"></span> -->
                  </span>
                  <?php echo form_error("datang") ?>
                </div>
              </div>
              <div class="form-group">
                <label class="bmd-label-floating">Aktivitas</label>
                <input type="text" id="input-aktivitas" name="aktivitas" class="form-control" value="<?php echo $absensi->aktivitas ?>">
              </div>
              <div class="form-group">
                <label class="bmd-label-floating">Keterangan</label>
                <input type="text" id="input-keterangan" name="keterangan" class="form-control" value="<?php echo $absensi->keterangan ?>">
              </div>
                <div class="form-group">
                  <label for="fk_id_siswa">Nama Siswa</label>
                  <select class="custom-select" name="fk_id_siswa" required>
                    <?php foreach ($this->db->get('siswa_magang')->result_array() as $key => $value): ?>
                    <option value="<?php echo $value['id_siswa'] ?>"><?php echo $value['nama'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <input class="btn btn-success" type="submit" value="Update">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>