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
            <form action="<?php echo base_url('index.php/Admin/SiswaMagang/insert') ?>" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="bmd-label-floating">NIM / NISN</label>
                        <input type="text" id="input-nim_nisn" name="nim_nisn" class="form-control" value="<?php echo set_value("nim_nisn") ?>" autocomplete="off">
                    </div>
                  </div>
                  <div class="col-sm-8">
                    <div class="form-group">
                        <label class="bmd-label-floating">Nama</label>
                        <input type="text" id="input-nama" name="nama" class="form-control" value="<?php echo set_value("nama") ?>" autocomplete="off">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">Email</label>
                        <input type="email" id="input-email" name="email" class="form-control" value="<?php echo set_value("email") ?>" autocomplete="off">
                    </div>
                  </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">Jurusan</label>
                        <input type="text" id="input-jusuan" name="alamat" class="form-control" value="<?php echo set_value("jurusan") ?>" autocomplete="off">
                    </div>
                  </div>
                </div>
                    <div class="row">
                      <div class="col-sm-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">Nama Instansi</label>
                        <input type="text" id="input-nama_instansi" name="nama_instansi" class="form-control" value="<?php echo set_value("nama_instansi") ?>" autocomplete="off">
                    </div>
                  </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">Semester</label>
                        <input type="text" id="input-semester" name="semester" class="form-control" value="<?php echo set_value("semester") ?>" autocomplete="off">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                        <label class="bmd-label-floating">Alamat</label>
                        <input type="text" id="input-alamat" name="alamat" class="form-control" value="<?php echo set_value("alamat") ?>" autocomplete="off">
                    </div>
                  </div>
                    <div class="col-sm-4">
                    <div class="form-group">
                        <label class="bmd-label-floating">No HP</label>
                        <input type="text" id="input-no_hp" name="no_hp" class="form-control" value="<?php echo set_value("no_hp") ?>" autocomplete="off">
                    </div>
                  </div>
                </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="nama_divisi">Provinsi</label>
                          <select class="custom-select" name="provinsi"class="form-control" id="provinsi">
                            <?php
                            foreach ($provinsi as $prov) {
                                ?>
                                <option <?php echo $provinsi_selected == $prov->id_provinsi ? 'selected="selected"' : '' ?>
                                    value="<?php echo $prov->id_provinsi ?>"><?php echo $prov->nama_provinsi ?></option>
                                <?php
                            }
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="kondisi_model">Kabupaten / Kota</label>
                          <select class="custom-select" name="kota" class="form-control" id="kota">
                            <?php
                            foreach ($kota as $kot) {
                                ?>
                                <!--di sini kita tambahkan class berisi id provinsi-->
                                <option <?php echo $kota_selected == $kot->fk_id_provinsi ? 'selected="selected"' : '' ?>
                                    class="<?php echo $kot->fk_id_provinsi ?>" value="<?php echo $kot->id_kota ?>"><?php echo $kot->nama_kota ?></option>
                                <?php
                            }
                            ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="nama_divisi">Tampat Lahir</label>
                          <select class="custom-select" name="tempat_lahir"class="form-control" id="tempat_lahir">
                            <?php foreach ($this->db->get('kota')->result_array() as $key => $value): ?>
                              <option value="<?php echo $value['id_kota'] ?>"><?php echo $value['nama_kota'] ?></option>
                            <?php endforeach ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-2">
                      <div class="form-group">
                        <label for="nama_divisi">Tanggal</label>
                        <select class="custom-select" name="tanggal" required>
                          <?php foreach ($this->db->get('tanggal')->result_array() as $key => $value): ?>
                            <option value="<?php echo $value['id_date'] ?>"><?php echo $value['date_number'] ?></option>
                          <?php endforeach ?>
                        </select>
                      </div>
                      </div>
                      <div class="col-sm-2">
                      <div class="form-group">
                        <label for="nama_divisi">Bulan</label>
                        <select class="custom-select" name="bulan" required>
                          <?php foreach ($this->db->get('bulan')->result_array() as $key => $value): ?>
                            <option value="<?php echo $value['id_bulan'] ?>"><?php echo $value['nama_bulan'] ?></option>
                          <?php endforeach ?>
                        </select>
                      </div>
                      </div>
                      <div class="col-sm-2">
                      <div class="form-group">
                        <label for="nama_divisi">Tahun</label>
                        <select class="custom-select" name="tahun" required>
                          <?php foreach ($this->db->get('tahun')->result_array() as $key => $value): ?>
                            <option value="<?php echo $value['id_tahun'] ?>"><?php echo $value['pilih_tahun'] ?></option>
                          <?php endforeach ?>
                        </select>
                      </div>
                      </div>
                    </div>
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
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="nama_divisi">Jenis Kelmin</label>
                        <select class="custom-select" name="nama_divisi" required>
                          <option selected value="">Pilih Jenis Kelamin</option>
                           <option>Laki - Laki</option>
                           <option>Perempuan</option>
                           <?php echo set_value('jenis_kelamin') ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-2">
                    <div class="form-group">
                      <label for="input-foto">Logo Instansi</label>
                    </div>
                    <label class="file">
                      <input type="file" class="form-control-file" id="input-foto" name="foto">
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
