<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title ">Edit Pendamping</h4>
            <p class="card-category">Pendamping Siswa Magang</p>
          </div>
          <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label class="bmd-label-floating">Nama Pendamping</label>
                <input type="text" id="input-nama" name="nama" class="form-control" value="<?php echo $pendamping_magang->nama ?>">
              </div>
              <div class="form-group">
                <label class="bmd-label-floating">Email</label>
                <input type="email" id="input-email" name="email" class="form-control" value="<?php echo $pendamping_magang->email ?>">
              </div>
              <div class="form-group">
                <label class="bmd-label-floating">No. HP</label>
                <input type="text" id="input-no_hp" name="no_hp" class="form-control" value="<?php echo $pendamping_magang->no_hp ?>">
              </div>
              <div class="form-group">
                <label class="bmd-label-floating">Username</label>
                <input type="text" id="input-username" name="username" class="form-control" value="<?php echo $pendamping_magang->username ?>">
              </div>
              <div class="form-group">
                <label class="bmd-label-floating">Password</label>
                <input type="text" id="input-password" name="password" class="form-control" value="<?php echo $pendamping_magang->password ?>">
              </div>
              <div class="form-group">
                <label for="fk_id_level">Pilih Level</label>
                <select class="custom-select" name="fk_id_level" required>
                  <?php foreach ($this->db->get('status_level')->result_array() as $key => $value): ?>
                  <option value="<?php echo $value['id_level'] ?>"><?php echo $value['keterangan'] ?></option>
                  <?php endforeach ?>
                </select>
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
