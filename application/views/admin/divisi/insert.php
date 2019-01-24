<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title ">Tambah Divisi</h4>
            <p class="card-category"> Menambah divisi kedalam daftar dengan informasi yang lengkap</p>
          </div>
          <div class="card-body">
              <?php echo form_open("",array("id"=>"form-input")); ?>
            <form action="" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label for="nama_divisi">Nama Divisi</label>
                    <select class="custom-select" name="nama_divisi" required>
                      <option selected value="">Pilih Jenis Divisi</option>
                       <option>Business Dev</option>
                       <option>Services</option>
                       <option>Production</option>
                       <option>R&D</option>
                       <?php echo set_value('nama_divisi') ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label for="nama_divisi">Pilih Pendamping</label>
                    <select class="custom-select" name="fk_id_pendamping"class="form-control">
                      <?php foreach ($this->db->get('pendamping_magang')->result_array() as $key => $value): ?>
                        <option value="<?php echo $value['id_pendamping'] ?>"><?php echo $value['nama'] ?></option>
                      <?php endforeach ?>
                    </select>
                    <div class="invalid-feedback">Pilih dulu kategorinya gan</div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label for="kondisi_model">Pilih Siswa</label>
                    <select class="custom-select" name="fk_id_siswa" class="form-control">
                      <?php foreach ($this->db->get('siswa_magang')->result_array() as $key => $value): ?>
                        <option value="<?php echo $value['id_siswa'] ?>"><?php echo $value['nama'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                  <label class="bmd-label-floating">Keterangan</label>
                  <textarea type="text" id="keterangan" name="keterangan" class="form-control" value="<?php echo set_value('keterangan') ?>"  cols="10" rows="3" ></textarea>
                  <?php echo form_close()?>
              </div>
              <div class="form-group">
                <input class="btn btn-info" type="submit" value="Simpan" >
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
