<?php 
// InsCinema by PT Mutiara Training
// Power by npg
//---------------------------------
?>
<?php
//echo $record['username'];
/*
if( !empty($record) ) {
	foreach ($record as $rec){
		echo $rec->id_user;
		echo "<br />";
		echo $rec->username;
		echo "<br />";
		echo $rec->nama_lengkap;
	}
} */
?>
<h1>PERSONAL DATA</h1>
<hr>
<form action="student/detail/upd" class="form-horizontal form-bordered" method="post">
<?php if( !empty($record) ) {

	foreach ($record as $rec){ ?>
		<div class="form-group row">
			<label class="col-lg-4 control-label text-lg-right pt-2" for="inputPlaceholder">Upload Foto</label>
			<div class="col-lg-6">
				<input type="file" name="avatar">
			</div>
		</div>	
		<div class="form-group row">
			<label class="col-lg-4 control-label text-lg-right pt-2" for="inputPlaceholder">Nama Lengkap</label>
			<div class="col-lg-6">
				<input type="hidden" name="id" value="<?php echo $rec->id_user; ?>">
				<input type="text" name="nama" class="form-control" value="<?php echo $rec->nama_lengkap; ?>" placeholder="Nama Lengkap">
				<span class="text-danger"><?php echo form_error('nama');?></span>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-lg-4 control-label text-lg-right pt-2" for="inputPlaceholder">Tempat Lahir</label>
			<div class="col-lg-6">
				<input type="text" name="tempat_lahir" value="<?php echo $rec->tempat_lahir; ?>" class="form-control" placeholder="Tempat Lahir">
				<span class="text-danger"><?php echo form_error('tempat_lahir');?></span>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-lg-4 control-label text-lg-right pt-2" for="inputPlaceholder">Tanggal Lahir</label>
			<div class="col-lg-6">
				<div class="input-group">
					<span class="input-group-addon">
						<i class="fa fa-calendar"></i>
					</span>
				<input type="text" name="tgl_lahir" data-plugin-datepicker class="form-control" value="<?php echo $rec->tgl_lahir; ?>" placeholder="Tanggal Lahir">
				<span class="text-danger"><?php echo form_error('tgl_lahir');?></span>
				</div>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-lg-4 control-label text-lg-right pt-2" for="inputPlaceholder">Agama</label>
			<div class="col-lg-6">
				<select name="agama" class="form-control mb-3">
					<option> --Pilih Agama--</option>
					<option value="Islam" <?php if($rec->agama == "Islam"){echo "selected";} ?>> Islam </option>
					<option value="Protestan" <?php if($rec->agama == "Protestan"){echo "selected";} ?>> Protestan </option>
					<option value="Katholik" <?php if($rec->agama == "Katholik"){echo "selected";} ?>> Katholik </option>
					<option value="Hindu" <?php if($rec->agama == "Hindu"){echo "selected";} ?>> Hindu </option>
					<option value="Buddha" <?php if($rec->agama == "Buddha"){echo "selected";} ?>> Buddha </option>
					<option value="Konghucu" <?php if($rec->agama == "Konghucu"){echo "selected";} ?>> Konghucu </option>
				</select>
			<span class="text-danger"><?php echo form_error('agama');?></span>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-lg-4 control-label text-lg-right pt-2" for="inputPlaceholder">Jenis Kelamin</label>
			<div class="col-lg-6">
				<div class="radio">
					<label>
						<input type="radio" name="gender" id="optionsRadios1" value="L" <?php if($rec->jenis_kelamin == "L"){echo "checked";} ?>>
						Laki-laki
					</label>
				</div>
				<div class="radio">
					<label>
						<input type="radio" name="gender" id="optionsRadios1" value="P" <?php if($rec->jenis_kelamin == "P"){echo "checked";} ?>>
						Perempuan
					</label>
				</div>
			<span class="text-danger"><?php echo form_error('jns_kel');?></span>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-lg-4 control-label text-lg-right pt-2" for="inputPlaceholder">Alamat</label>
			<div class="col-lg-6">
				<input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?php echo $rec->alamat ?>">
				<span class="text-danger"><?php echo form_error('alamat');?></span>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-lg-4 control-label text-lg-right pt-2" for="inputPlaceholder">Kota</label>
			<div class="col-lg-6">
				<input type="text" name="kota" class="form-control" placeholder="Kota" value="<?php echo $rec->kota ?>">
				<span class="text-danger"><?php echo form_error('kota');?></span>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-lg-4 control-label text-lg-right pt-2" for="inputPlaceholder">Provinsi</label>
			<div class="col-lg-6">
				<input type="text" name="provinsi" class="form-control" placeholder="Provinsi" value="<?php echo $rec->provinsi ?>" />
				<span class="text-danger"><?php echo form_error('provinsi');?></span>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-lg-4 control-label text-lg-right pt-2" for="inputPlaceholder">Email/username</label>
			<div class="col-lg-6">
				<input type="text" name="email" id="disabledInput" class="form-control" placeholder="Email" value="<?php echo $rec->username; ?>" readonly />
				<span class="text-danger"><?php echo form_error('email');?></span>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-lg-4 control-label text-lg-right pt-2" for="inputPlaceholder">Telepon/HP</label>
			<div class="col-lg-6">
				<input type="text" name="telp_hp" class="form-control" placeholder="Telepon/Handphone" value="<?php echo $rec->telepon ?>" />
				<span class="text-danger"><?php echo form_error('telp_hp');?></span>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-lg-4 control-label text-lg-right pt-2" for="inputPlaceholder">Asal Sekolah/PT</label>
			<div class="col-lg-6">
				<input type="text" name="asal_pt" class="form-control" placeholder="Asal Sekolah/PT" value="<?php echo $rec->asal_pt ?>" />
				<span class="text-danger"><?php echo form_error('asal_pt');?></span>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-lg-4 control-label text-lg-right pt-2" for="inputPlaceholder">Kota Sekolah/PT</label>
			<div class="col-lg-6">
				<input type="text" name="kota_pt" class="form-control" placeholder="Kota Sekolah/PT" value="<?php echo $rec->kota_pt ?>" />
				<span class="text-danger"><?php echo form_error('kota_pt');?></span>
			</div>
		</div>
		
		<div class="form-row">
			<div class="col-lg-12">
				<input name=BtnSubmit type="submit" value="Update Data" class="btn btn-primary float-right mb-3" data-loading-text="Loading...">
			</div>
		</div>
<?php } } ?>
</form>

