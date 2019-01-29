<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title ">Tambah Siswa</h4>
            <p class="card-category">Menambah Siswa kedalam daftar dengan informasi yang lengkap</p>
          </div>
          <div class="card-body">
            <form action="<?php base_url('index.php/Admin/SiswaMagang/insert') ?>" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="nim_nisn" class="bmd-label-floating">NIM / NISN</label>
                    <input type="text" class="form-control" name="nim_nisn" value="<?php echo set_value('nim_nisn') ?>" required autofocus>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="form-group">
                    <label for="nama" class="bmd-label-floating">Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo set_value("nama") ?>" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="email" class="bmd-label-floating">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo set_value("email") ?>" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="jurusan" class="bmd-label-floating">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" value="<?php echo set_value("jurusan") ?>" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="nama_instansi" class="bmd-label-floating">Nama Instansi</label>
                    <input type="text" name="nama_instansi" class="form-control" value="<?php echo set_value("nama_instansi") ?>" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="semester" class="bmd-label-floating">Semester</label>
                    <input type="number" name="semester" class="form-control" value="<?php echo set_value("semester") ?>" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8">
                  <div class="form-group">
                    <label for="alamat" class="bmd-label-floating">Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?php echo set_value("alamat") ?>" required>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="no_hp" class="bmd-label-floating">No HP</label>
                    <input type="number" name="no_hp" class="form-control" value="<?php echo set_value("no_hp") ?>" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="provinsi">Provinsi</label>
                    <select class="custom-select" name="provinsi"class="form-control" id="provinsi">
                      <?php foreach ($provinsi as $prov): ?>
                        <option <?php echo $provinsi_selected == $prov->id_provinsi ? 'selected="selected"' : '' ?>
                          value="<?php echo $prov->id_provinsi ?>"><?php echo $prov->nama_provinsi ?>
                        </option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="kota">Kabupaten / Kota</label>
                    <select class="custom-select" name="kota" class="form-control" id="kota">
                      <?php foreach ($kota as $kot): ?>
                        <option <?php echo $kota_selected == $kot->fk_id_provinsi ? 'selected="selected"' : '' ?>class="<?php echo $kot->fk_id_provinsi ?>"
                          value="<?php echo $kot->id_kota ?>"><?php echo $kot->nama_kota ?>
                        </option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-3">
                        <label for="tempat_lahir" class="bmd-label-floating">Tampat Lahir</label>
                      </div>
                      <div class="col-md-9">
                        <select class="custom-select" name="tempat_lahir"class="form-control" id="tempat_lahir">
                          <?php foreach ($this->db->get('kota')->result_array() as $key => $value): ?>
                            <option value="<?php echo $value['id_kota'] ?>"><?php echo $value['nama_kota'] ?></option>
                          <?php endforeach ?>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" name=tanggal_lahir class="form-control" autofocus required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="username" class="bmd-label-floating">Username</label>
                    <input type="text" name="username" class="form-control" value="<?php echo set_value("username") ?>" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="password" class="bmd-label-floating">Password</label>
                    <input type="password" name="password" class="form-control" value="<?php echo set_value("password") ?>" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="custom-select" name="jenis_kelamin" required>
                      <option selected value="">Pilih Jenis Kelamin</option>
                      <option>Laki - Laki</option>
                      <option>Perempuan</option>
                      <?php echo set_value('jenis_kelamin') ?>
                    </select>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label for="foto">Logo Instansi</label>
                  </div>
                  <label class="file">
                    <input type="file" class="form-control-file" name="foto">
                    <span class="file-custom"></span>
                  </label>
                </div>
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
