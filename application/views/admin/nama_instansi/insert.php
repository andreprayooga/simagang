<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title ">Tambah Instansi</h4>
            <p class="card-category">Menambah Instansi kedalam daftar dengan informasi yang lengkap</p>
          </div>
          <div class="card-body">
             <?php echo form_open_multipart("",array("id"=>"form-input")); ?>
            <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="bmd-label-floating">Nama Sekolah</label>
                        <input type="text" id="input-no_hp" name="nama" class="form-control" value="<?php echo set_value("nama_instansi") ?>" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label class="bmd-label-floating">Alamat</label>
                        <input type="text" id="input-alamat" name="alamat" class="form-control" value="<?php echo set_value("alamat") ?>" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label class="bmd-label-floating">No HP</label>
                        <input type="text" id="input-no_hp" name="no_hp" class="form-control" value="<?php echo set_value("no_hp") ?>" autocomplete="off">
                    </div>
                    <div class="row">
                      <div class="col-sm-3">
                    <div class="form-group">
                      <label for="input-foto_instansi">Logo Instansi</label>
                    </div>
                    <label class="file">
                      <input type="file" class="form-control-file" name="logo_instansi">
                      <span class="file-custom"></span>
                    </label>
                  </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="kondisi_model">Pilih Siswa</label>
                        <select class="custom-select" name="fk_id_siswa" class="form-control">
                          <?php foreach ($this->db->get('siswa_magang')->result_array() as $key => $value): ?>
                            <option value="<?php echo $value['id_siswa'] ?>"><?php echo $value['nama'] ?></option>
                          <?php endforeach ?>
                        </select>
                      </div>
                    </div>
                    <?php echo form_close(); ?>
                  </div>
                  <div class="form-group">
                    <input class="btn btn-info" type="submit" value="Simpan">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
