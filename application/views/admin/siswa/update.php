<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title ">Edit Siswa</h4>
            <p class="card-category">Mengedit Siswa kedalam daftar dengan informasi yang lengkap</p>
          </div>
          <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="nim_nisn" class="bmd-label-floating">NIM / NISN</label>
                    <input type="text" class="form-control" name="nim_nisn" value="<?php echo $siswa_magang->nim_nisn ?>" required autofocus>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="form-group">
                    <label for="nama" class="bmd-label-floating">Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $siswa_magang->nama ?>" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="email" class="bmd-label-floating">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $siswa_magang->email ?>" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="jurusan" class="bmd-label-floating">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" value="<?php echo $siswa_magang->jurusan ?>" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="nama_instansi" class="bmd-label-floating">Nama Instansi</label>
                    <input type="text" name="nama_instansi" class="form-control" value="<?php echo $siswa_magang->nama_instansi ?>" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="semester" class="bmd-label-floating">Semester</label>
                    <input type="number" name="semester" class="form-control" value="<?php echo $siswa_magang->semester ?>" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8">
                  <div class="form-group">
                    <label for="alamat" class="bmd-label-floating">Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?php echo $siswa_magang->alamat ?>" required>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="no_hp" class="bmd-label-floating">No HP</label>
                    <input type="number" name="no_hp" class="form-control" value="<?php echo $siswa_magang->no_hp ?>" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-3">
                        <label for="tempat_lahir" class="bmd-label-floating">Tempat Lahir</label>
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
                    <input type="date" name=tanggal_lahir class="form-control"  value="<?php echo $siswa_magang->tanggal_lahir ?>" autofocus required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="username" class="bmd-label-floating">Username</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $siswa_magang->username ?>" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="password" class="bmd-label-floating">Password</label>
                    <input type="password" name="password" class="form-control" value="<?php echo $siswa_magang->password ?>" required>
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
                    </select>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label for="nama_divisi">Pilih Pendamping</label>
                    <select class="custom-select" name="fk_id_pendamping"class="form-control">
                      <?php foreach ($this->db->get('pendamping_magang')->result_array() as $key => $value): ?>
                      <option value="<?php echo $value['id_pendamping'] ?>"><?php echo $value['nama'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label for="nama_divisi">Pilih Divisi</label>
                    <select class="custom-select" name="fk_posisi_magang"class="form-control">
                      <?php foreach ($this->db->get('posisi_magang')->result_array() as $key => $value): ?>
                      <option value="<?php echo $value['id_posisi'] ?>"><?php echo $value['nama_posisi'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
              </div>
              <img src="<?php echo base_url('./assets/uploads/siswa/'.$siswa_magang->foto.'');?>" height="200px" width="200px">
              <label class="file">
                <input type="file" class="form-control-file" name="foto">
                <span class="file-custom"></span>
              </label>
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