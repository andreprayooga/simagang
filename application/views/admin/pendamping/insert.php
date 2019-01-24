<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-7">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title ">Tambah Pendamping</h4>
            <p class="card-category">Menambah Pendamping kedalam daftar dengan informasi yang lengkap</p>
          </div>
          <div class="card-body">
             <?php echo form_open_multipart("",array("id"=>"form-input")); ?>
            <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="bmd-label-floating">Nama Pendamping</label>
                        <input type="text" id="input-nama" name="nama" class="form-control" value="<?php echo set_value("nama") ?>" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label class="bmd-label-floating">Email</label>
                        <input type="email" id="input-email" name="email" class="form-control" value="<?php echo set_value("email") ?>" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label class="bmd-label-floating">No HP</label>
                        <input type="text" id="input-no_hp" name="no_hp" class="form-control" value="<?php echo set_value("no_hp") ?>" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="input-foto_instansi">Logo Instansi</label>
                    </div>
                    <label class="file">
                      <input type="file" class="form-control-file" name="logo_instansi">
                      <span class="file-custom"></span>
                    </label>
                    <div class="row">
                      <div class="col-sm-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">Username</label>
                        <input type="text" id="input-username" name="username" class="form-control" value="<?php echo set_value("username") ?>" autocomplete="off">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">Password</label>
                        <input type="password" id="input-password" name="password" class="form-control" value="<?php echo set_value("password") ?>" autocomplete="off">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label for="kondisi_model">Pilih Level</label>
                      <select class="custom-select" name="fk_id_siswa" class="form-control">
                         <?php foreach ($this->db->get('status_level')->result_array() as $key => $value): ?>
                          <option value="<?php echo $value['id_level'] ?>"><?php echo $value['level'] ?></option>
                        <?php endforeach ?>
                      </select>
                    </div>
                  </div>
                <?php echo form_close(); ?>
                  </div>
                  <div class="form-group">
                    <input class="btn btn-info" type="submit" value="Simpan">
                  </div>
                </div>
                </form>
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
