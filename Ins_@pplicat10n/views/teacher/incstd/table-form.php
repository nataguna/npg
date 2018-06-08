<?php 
// InsCinema by PT Mutiara Training
// Power by npg
//---------------------------------
?>
<form action="profile" class="form-horizontal form-bordered" method="post">
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2" for="inputPlaceholder">Nama Lengkap</label>
											<div class="col-lg-6">
												<input type="text" name="nama" class="form-control" value="<?php echo $this->session->userdata('nama'); ?>" placeholder="Nama Lengkap">
												<span class="text-danger"><?php echo form_error('nama');?></span>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2" for="inputPlaceholder">Tempat Lahir</label>
											<div class="col-lg-6">
												<input type="text" name="tempat_lahir" value="<?php echo $this->session->userdata('tempat_lahir'); ?>" class="form-control" placeholder="Tempat Lahir">
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
												<input type="text" name="tgl_lahir" data-plugin-datepicker class="form-control" value="<?php echo $this->session->userdata('tgl_lahir'); ?>" placeholder="Tanggal Lahir">
												<span class="text-danger"><?php echo form_error('tgl_lahir');?></span>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2" for="inputPlaceholder">Agama</label>
											<div class="col-lg-6">
												<select name="agama" class="form-control mb-3">
													<option> --Pilih Agama--</option>
													<option value="Islam"> Islam </option>
													<option value="Protestan"> Protestan </option>
													<option value="Katholik"> Katholik </option>
													<option value="Hindu"> Hindu </option>
													<option value="Buddha"> Buddha </option>
													<option value="Konghucu"> Konghucu </option>
												</select>
											<span class="text-danger"><?php echo form_error('agama');?></span>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2" for="inputPlaceholder">Jenis Kelamin</label>
											<div class="col-lg-6">
												<div class="radio">
													<label>
														<input type="radio" name="jns_kel" id="optionsRadios1" value="L">
														Laki-laki
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" name="jns_kel" id="optionsRadios1" value="P">
														Perempuan
													</label>
												</div>
											<span class="text-danger"><?php echo form_error('jns_kel');?></span>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2" for="inputPlaceholder">Alamat</label>
											<div class="col-lg-6">
												<input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?php echo $this->session->userdata('alamat'); ?>">
												<span class="text-danger"><?php echo form_error('alamat');?></span>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2" for="inputPlaceholder">Kota</label>
											<div class="col-lg-6">
												<input type="text" name="kota" class="form-control" placeholder="Kota" value="<?php echo $this->session->userdata('kota'); ?>">
												<span class="text-danger"><?php echo form_error('kota');?></span>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2" for="inputPlaceholder">Provinsi</label>
											<div class="col-lg-6">
												<input type="text" name="provinsi" class="form-control" placeholder="Provinsi" value="<?php echo $this->session->userdata('provinsi'); ?>" />
												<span class="text-danger"><?php echo form_error('provinsi');?></span>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2" for="inputPlaceholder">Email/username</label>
											<div class="col-lg-6">
												<input type="text" name="email" id="disabledInput" class="form-control" placeholder="Email" value="<?php echo $this->session->userdata('username'); ?>" readonly />
												<span class="text-danger"><?php echo form_error('email');?></span>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2" for="inputPlaceholder">Telepon/HP</label>
											<div class="col-lg-6">
												<input type="text" name="telp_hp" class="form-control" placeholder="Telepon/Handphone" value="<?php echo $this->session->userdata('telepon'); ?>" />
												<span class="text-danger"><?php echo form_error('telp_hp');?></span>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2" for="inputPlaceholder">Asal Sekolah/PT</label>
											<div class="col-lg-6">
												<input type="text" name="asal_pt" class="form-control" placeholder="Asal Sekolah/PT" value="<?php echo $this->session->userdata('asal_pt'); ?>" />
												<span class="text-danger"><?php echo form_error('asal_pt');?></span>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2" for="inputPlaceholder">Kota Sekolah/PT</label>
											<div class="col-lg-6">
												<input type="text" name="kota_pt" class="form-control" placeholder="Kota Sekolah/PT" value="<?php echo $this->session->userdata('kota_pt'); ?>" />
												<span class="text-danger"><?php echo form_error('kota_pt');?></span>
											</div>
										</div>
										
										
										<div class="form-row">
											<div class="col-lg-12">
												<input type="submit" value="Submit" class="btn btn-primary float-right mb-3" data-loading-text="Loading...">
											</div>
										</div>
</form>

