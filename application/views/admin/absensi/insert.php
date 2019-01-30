<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title ">Tambah Absensi</h4>
            <p class="card-category">Menambah Absensi kedalam daftar dengan informasi yang lengkap</p>
          </div>
          <div class="card-body">
            <form action="<?= base_url('index.php/Admin/Absensi/insert') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="bmd-label-floating">Tanggal</label>
                        <input type="date" id="input-tanggal" name="tanggal" class="form-control" value="<?php echo set_value("tangtanggalgal") ?>" autocomplete="off">
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">Datang</label>
                        <div class="input-group clockpicker">
                          <input type="text" id="input-datang" name="datang" class="form-control" value="<?php echo set_value("datang") ?>">
                          <span class="input-group-addon">
                            <span class="glyphicon glyphicon-time"></span>
                          </span>
                        </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">Pulang</label>
                        <div class="input-group clockpicker">
                          <input type="text" id="input-pulang" name="pulang" class="form-control" value="<?php echo set_value("pulang") ?>">
                          <span class="input-group-addon">
                            <span class="glyphicon glyphicon-time"></span>
                          </span>
                        </div>
                    </div>
                  </div>
                </div>
                    <div class="form-group">
                            <label class="bmd-label-floating">Aktivitas</label>
                            <input type="aktivitas" id="input-aktivitas" name="aktivitas" class="form-control" value="<?php echo set_value('aktivitas') ?>" autocomplete="off">
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                              <div class="form-group">
                                      <label class="bmd-label-floating">Keterangan</label>
                                      <input type="keterangan" id="input-keterangan" name="keterangan" class="form-control" value="<?php echo set_value('keterangan') ?>" autocomplete="off">
                                  </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for="fk_id_siswa">Nama Siswa</label>
                                <select class="custom-select" name="fk_id_siswa" required>
                                  <?php foreach ($this->db->get('siswa_magang')->result_array() as $key => $value): ?>
                                    <option value="<?php echo $value['id_siswa'] ?>"><?php echo $value['nama'] ?></option>
                                  <?php endforeach ?>
                                </select>
                              </div>
                          </div>
                        </div>
                  <div class="form-group">
                    <input class="btn btn-info  "type="submit" value="Simpan">
                  </div>
                </form>
              </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#">
                    <img src="<?= base_url('/assets/admin/img/faces/marc.jpg') ?>" alt="">
                    </a>
                  </div>
                  <div class="card-body">
                    <h6 class="card-category text-gray">Pendamping Magang</h6>
                    <p class="card-description">
                      Being honest may not get you a lot of friends but it’ll always get you the right ones..
                    </p>
                    <?php if ($this->session->id_level != 1 ) : ?>
                      <a href="#Hello" class="btn btn-warning btn-round">Hello</a>
                    <?php endif;?>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
