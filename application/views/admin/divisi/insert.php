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
            <form action="<?php base_url('index.php/Admin/Divisi/insert') ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                  <label class="bmd-label-floating">Nama Divisi</label>
                  <input type="text" id="input-nama_divisi" name="nama_divisi" class="form-control" value="<?php echo set_value("nama_divisi") ?>" autocomplete="off">
              </div>
              <div class="row">
              <div class="col-sm-2">
                <div class="form-group">
                  <label for="foto">Logo Divisi</label>
                </div>
                <label class="file">
                  <input type="file" class="form-control-file" name="gambar">
                  <span class="file-custom"></span>
                </label>
              </div>
            </div>
              <div class="form-group">
                  <label class="bmd-label-floating">Keterangan</label>
                  <textarea type="text" id="keterangan" name="keterangan" class="form-control" value="<?php echo set_value('keterangan') ?>"  cols="10" rows="3" ></textarea>
              </div>
              <div class="form-group">
                <input class="btn btn-info" type="submit" value="Simpan" >
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
