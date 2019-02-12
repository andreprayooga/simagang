<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title ">Edit Nama INstansi</h4>
            <p class="card-category">Nama Instansi Siswa Magang</p>
          </div>
          <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label class="bmd-label-floating">Nama Instansi</label>
                <input type="text" id="input-nama_instansi" name="nama_instansi" class="form-control" value="<?php echo $nama_instansi->nama_instansi ?>">
              </div>
              <div class="form-group">
                <label class="bmd-label-floating">Alamat</label>
                <input type="text" id="input-alamat" name="alamat" class="form-control" value="<?php echo $nama_instansi->alamat ?>">
              </div>
              <div class="form-group">
                <label class="bmd-label-floating">No. HP</label>
                <input type="text" id="input-no_hp" name="no_hp" class="form-control" value="<?php echo $nama_instansi->no_hp ?>">
              </div>
              <img src="<?php echo base_url('./assets/uploads/nama_instansi/'.$nama_instansi->gambar.'');?>" height="250px" width="500px">
                 <label class="file">
                    <input type="file" class="form-control-file" name="gambar">
                    <span class="file-custom"></span>
                  </label>
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label for="nama_divisi">Pilih Siswa</label>
                    <select class="custom-select" name="fk_id_siswa"class="form-control">
                      <?php foreach ($this->db->get('siswa_magang')->result_array() as $key => $value): ?>
                      <option value="<?php echo $value['id_siswa'] ?>"><?php echo $value['nama'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
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
