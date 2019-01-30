<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title ">Edit Divisi</h4>
            <p class="card-category">Divisi pemilihan untuk siswa</p>
          </div>
          <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="bmd-label-floating">Nama Divisi</label>
                        <input type="text" id="input-nama_divisi" name="nama_divisi" class="form-control" value="<?php echo $divisi->nama_divisi ?>">
                    </div>
                    <div class="row">
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label for="nama_divisi">Pilih Pendamping</label>
                          <select class="custom-select" name="fk_id_pendamping"class="form-control" value="<?php echo $divisi->fk_id_pendamping ?>">
                            <?php foreach ($this->db->get('pendamping_magang')->result_array() as $key => $value): ?>
                              <option value="<?php echo $value['id_pendamping'] ?>"><?php echo $value['nama'] ?></option>
                            <?php endforeach ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label for="kondisi_model">Pilih Siswa</label>
                          <select class="custom-select" name="fk_id_siswa" class="form-control" value="<?php echo $divisi->fk_id_siswa ?>">
                            <?php foreach ($this->db->get('siswa_magang')->result_array() as $key => $value): ?>
                              <option value="<?php echo $value['id_siswa'] ?>"><?php echo $value['nama'] ?></option>
                            <?php endforeach ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                            <label class="bmd-label-floating">Keterangan</label>
                            <text type="text" id="input-keterangan" name="keterangan" class="form-control" value="<?php echo $divisi->keterangan ?>">
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
