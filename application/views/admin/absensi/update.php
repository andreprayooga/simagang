<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title ">Edit Komentar</h4>
            <p class="card-category">Komentar dan Masukan dari User</p>
          </div>
          <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="bmd-label-floating">Tanggal</label>
                        <div class="col-12 col-md-9">
                          <label for="input-tanggal" class="form-control-label">Tanggal</label>
                          <input type="date" id="datepicker" name="tanggal" placeholder="Masukan tanggal" class="form-control" value="<?php echo date("Y-m-d",strtotime($absensi->tanggal)) ?>">
                            <?php echo form_error("tanggal") ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="bmd-label-floating">Datang</label>
                      <div class="col-12 col-md-9">
                          <div class="input-group clockpicker">
                          <label for="input-datang" class="form-control-label">Datang</label>
                          <input type="text" class="form-control" value="<?php echo $absensi->datang ?>" name="datang">
                          <span class="input-group-addon">
                            <!-- <span class="glyphicon glyphicon-time"></span> -->
                          </span>
                          <?php echo form_error("datang") ?>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <label class="bmd-label-floating">Pulang</label>
                      <div class="col-12 col-md-9">
                          <div class="input-group clockpicker">
                          <label for="input-pulang" class="form-control-label">Pulang</label>
                          <input type="text" class="form-control" value="<?php echo $absensi->datang ?>" name="pulang">
                          <span class="input-group-addon">
                            <!-- <span class="glyphicon glyphicon-time"></span> -->
                          </span>
                          <?php echo form_error("datang") ?>
                        </div>
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
                    <input class="btn btn-success" type="submit" value="Update">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
