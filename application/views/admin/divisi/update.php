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
                <input type="text" id="input-nama_divisi" name="nama_divisi" class="form-control" value="<?php echo $divisi_magang->nama_divisi ?>">
              </div>
              <img src="<?php echo base_url('./assets/uploads/divisi/'.$divisi_magang->gambar.'');?>" height="150px" width="150px">
                 <label class="file">
                    <input type="file" class="form-control-file" name="gambar">
                    <span class="file-custom"></span>
                  </label>
              <div class="form-group">
                <label class="bmd-label-floating">Keterangan</label>
                <input type="text" id="input-keterangan" name="keterangan" class="form-control" value="<?php echo $divisi_magang->keterangan ?>">
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