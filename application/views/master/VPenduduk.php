<br>

<!-- card awal -->
<div class="card">
  <h5 class="card-header">Penduduk</h5>
  <div class="card-body">
    
  <!-- ADD BUTTON -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add">
  Add +
</button>
<!-- Button Add -->

<!-- Modal add -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addLabel">Tambah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="<?php echo site_url('Welcome/pendudukInsert'); ?>" method="post">
        <div class="mb-3">
            <label for="kd_penduduk" class="form-label">Kode</label>
            <input type="text" class="form-control" id="kode" name="kd_penduduk" >
        </div>
        <div class="mb-3">
            <label for="nik" class="form-label"> nik</label>
            <input type="text" class="form-control" id="nik" name="nik">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
            <label for="tempat_lahir" class="form-label">Tempat lahir</label>
            <input type="text" class="form-control" id="tmpt_lahir" name="tempat_lahir">
        </div>
        <div class="mb-3">
            <label for="tgl_lahir" class="form-label">Tanggakl lahir</label>
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
        </div>
        <div class="mb-3">
					<label for="status1" class="form-label">Status 1</label>
					<select name="status1" id="status1" class="form-select">
						<option value="menikah">Menikah</option>
						<option value="belum menikah">Belum Menikah</option>
						<option value="janda">Janda</option>
						<option value="duda">Duda</option>
					</select>
				</div>
				<div class="mb-3">
					<label for="status2" class="form-label">Status 2</label>
					<select name="status2" id="status2" class="form-select">
						<option value="laki-laki">Laki-laki</option>
						<option value="perempuan">Perempuan</option>
					</select>
				</div>
				<div class="mb-3">
					<label for="status3" class="form-label">Status 3</label>
					<select name="status3" id="status3" class="form-select">
						<option value="kepala keluarga">Kepala Keluarga</option>
						<option value="istri">Istri</option>
						<option value="anak">Anak</option>
						<option value="orang tua">Orang Tua</option>
						<option value="saudara">Saudara</option>
						<option value="tinggal sendiri">Tinggal sendiri</option>
					</select>
				</div>
        <div class="mb-3">
            <label for="kd_blok" class="form-label">Kode Blok</label>
            <select name="kd_blok" id="kd_blok" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
								<option value="" selected disabled>Pilih Kavling</option>		
								<?php foreach ($select as $item) : ?>
									<option value="<?= $item->kd_blok; ?>"><?= $item->nama_blok; ?></option>		
								<?php endforeach ?>
						</select>
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
<!-- Akhir Add -->


<!-- <-- Awal Table --> 
<table class="table table-bordered table-striped table-hover">
  <thead>
    
    <tr >
      <th scope="col">Kode </th>
      <th scope="col">Nik</th>
      <th scope="col">Nama</th>
      <th scope="col">Tempat lahir</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Status1</th>
      <th scope="col">Status2</th>
      <th scope="col">Status3</th>
      <th scope="col">kode blok</th>
      <th scope="col">Tolls</th>
    </tr>
  </thead>
  <tbody>
  <?php
	if(!empty($DataPencarian))
	{
        
		foreach($DataPencarian as $ReadDS)
	{
	?>
    <tr>
      <td class="btn-group"><?php echo $ReadDS->kd_penduduk; ?></td>
      <td><?php echo $ReadDS->nik; ?></td>
      <td><?php echo $ReadDS->nama; ?></td>
      <td><?php echo $ReadDS->tempat_lahir; ?></td>
      <td><?php echo $ReadDS->tgl_lahir; ?></td>
      <td><?php echo $ReadDS->status1; ?></td>
      <td><?php echo $ReadDS->status2; ?></td>
      <td><?php echo $ReadDS->status3; ?></td>
      <td><?php echo $ReadDS->kd_blok; ?></td>
      <td>

        <!-- Edit BUTTON -->
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#Edit">
                Edit 
        </button>
        <!-- BUTTON AKHIR -->

        <!-- Modal edit -->
        <div class="modal fade" id="Edit" tabindex="-1" aria-labelledby="EditLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="EditLabel">Edit Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="<?php echo site_url('Welcome/pendudukUpdate'); ?>" method="post">
            <div class="mb-3">
            <label for="kd_penduduk" class="form-label">kd_penduduk</label>
            <input type="text" class="form-control" id="kd_penduduk" name="kd_penduduk" value="<?php echo $ReadDS->kd_penduduk; ?>"hidden>
            <input type="text" class="form-control" id="kd_penduduk" name="kd_penduduk" value="<?php echo $ReadDS->kd_penduduk; ?>"disabled>
        </div>
        <div class="mb-3">
            <label for="nik" class="form-label"> nik</label>
           <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $ReadDS->nik; ?>">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $ReadDS->nama; ?>">
        </div>
        <div class="mb-3">
            <label for="tempat_lahir" class="form-label">Tempat lahir</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo $ReadDS->tempat_lahir; ?>">
        </div>
        <div class="mb-3">
            <label for="tgl_lahir" class="form-label">Tanggakl lahir</label>
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?php echo $ReadDS->tgl_lahir; ?>">
        </div>
        <div class="mb-3">
					<label for="status1" class="form-label">Status 1</label>
					<select name="status1" id="status1" class="form-select" value="<?php echo $ReadDS->status1; ?>">
						<option value="menikah">Menikah</option>
						<option value="belum menikah">Belum Menikah</option>
						<option value="janda">Janda</option>
						<option value="duda">Duda</option>
					</select>
				</div>
				<div class="mb-3">
					<label for="status2" class="form-label">Status 2</label >
					<select name="status2" id="status2" class="form-select" value="<?php echo $ReadDS->status2; ?>">
						<option value="laki-laki">laki</option>
						<option value="perempuan">Perempuan</option>
					</select>
				</div>
				<div class="mb-3">
					<label for="status3" class="form-label">Status 3</label>
					<select name="status3" id="status3" class="form-select" value="<?php echo $ReadDS->status3; ?>">
						<option value="kepala_keluarga">Kepala Keluarga</option>
						<option value="istri">Istri</option>
						<option value="anak">Anak</option>
						<option value="orang tua">Orang Tua</option>
						<option value="saudara">Saudara</option>
						<option value="tinggal sendiri">Tinggal Sendiri</option>
					</select>
				</div>
                <div class="mb-3">
                    <label for="kd_blok" class="form-label">Kode Blok</label>
                    <input type="text" class="form-control" id="kd_blok" name="kd_blok" value="<?php echo $ReadDS->kd_blok; ?>"hidden>
                    <input type="text" class="form-control" id="kd_blok" name="kd_blok" value="<?php echo $ReadDS->kd_blok; ?>"disabled>
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
        <!-- AKHIR edit -->


        <!-- Hapus button -->
        <a type="button" class="btn btn-danger" href="<?php echo site_url('Welcome/pendudukHapus/'.$ReadDS->kd_penduduk); ?>" onclick="return confirm('are you sure?')">
            Hapus
        </a>
        <!-- BUTTON akhir -->
        
      </td>
    </tr>
    <?php		
            $no++;}
        }
    ?>
  </tbody>
</table>
  </div>
</div>
<!-- card akhir -->