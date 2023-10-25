
<br>

<!-- awal card -->
<div class="card">
  <h5 class="card-header">Kavling</h5>
  <div class="card-body">
    <!-- ADD BUTTON -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add">
  Add +
</button>
<!-- AKHIR BUTTON -->

<!-- Modal ADD -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addLabel">Tambah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="<?php echo site_url('Welcome/BlokInsert'); ?>" method="post">
        <div class="mb-3">
            <label for="kd_blok" class="form-label">Kode Blok</label>
            <input type="text" class="form-control" id="kd_blok" name="kd_blok">
        </div>
        <div class="mb-3">
            <label for="nama-blok" class="form-label">Nama Blok</label>
            <input type="text" class="form-control" id="nama-blok" name="nama_blok">
        </div>
        <div class="mb-3">
            <label for="no_blok" class="form-label">No Blok</label>
            <input type="text" class="form-control" id="no_blok" name="no_blok">
        </div>
        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi</label>
            <input type="text" class="form-control" id="lokasi" name="lokasi">
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Save changes</button>
      </div>
      </form>
      </div>
      
    </div>
  </div>
</div>
<!-- MODAL AKHIR -->
    
<!-- AWAL TABLE -->
<table class="table table-bordered table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">No </th>
      <th scope="col">Kode Blok</th>
      <th scope="col">Nama</th>
      <th scope="col">No Blok</th>
      <th scope="col">Lokasi</th>
      <th scope="col">Tolls</th>
    </tr>
  </thead>
  <tbody>
  <?php
	if(!empty($DataPencarian))
	{
        $no=1;
		foreach($DataPencarian as $ReadDS)
	{
	?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $ReadDS->kd_blok; ?></td>
      <td><?php echo $ReadDS->nama_blok; ?></td>
      <td><?php echo $ReadDS->no_blok; ?></td>
      <td><?php echo $ReadDS->lokasi; ?></td>
      <td>
        <!-- Edit BUTTON -->
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#Edit">
                Edit 
        </button>
        <!-- EDIT BUTTON -->

        <!-- Modal -->
        <div class="modal fade" id="Edit" tabindex="-1" aria-labelledby="EditLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="EditLabel">Edit Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="<?php echo site_url('Welcome/BlokEdit'); ?>" method="post">
                <div class="mb-3">
                    <label for="kd_blok" class="form-label">Kode Blok</label>
                    <input type="text" class="form-control" id="kd_blok" name="kd_blok" value="<?php echo $ReadDS->kd_blok; ?>"hidden>
                    <input type="text" class="form-control" id="kd_blok" name="kd_blok" value="<?php echo $ReadDS->kd_blok; ?>"disabled>
                </div>
                <div class="mb-3">
                    <label for="nama_blok" class="form-label">Nama Blok</label>
                    <input type="text" class="form-control" id="nama_blok" name="nama_blok" value="<?php echo $ReadDS->nama_blok; ?>">
                </div>
                <div class="mb-3">
                    <label for="no_blok" class="form-label">No Blok</label>
                    <input type="text" class="form-control" id="no_blok" name="no_blok" value="<?php echo $ReadDS->no_blok; ?>">
                </div>
                <div class="mb-3">
                    <label for="lokasi" class="form-label">Lokasi</label>
                    <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?php echo $ReadDS->lokasi; ?>">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save </button>
                </div>
            </form>
            </div>
            </div>
        </div>
        </div>
        <!-- AKHIR MODAL -->

        <!-- Hapus button -->
        <a type="button" class="btn btn-danger" href="<?php echo site_url('Welcome/BlokHapus/'.$ReadDS->kd_blok); ?>" onclick="return confirm('are you sure?')">
            Delete
        </a>
        <!-- HAPUS BUTTON -->

      </td>
    </tr>
    <?php		
            $no++;}
        }
    ?>
  </tbody>
</table>
<!-- AKHIR TABLE -->

  </div>
</div>
<!-- card akhir -->