<script type="text/javascript">
	/* Validasi */
	$(document).ready(function() {
		$('#defaultForm')
			.bootstrapValidator({
				message: 'This value is not valid',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					nama_lengkap: {
						validators: {
							notEmpty: {
								message: 'The first name is required and cannot be empty'
							}
						}
					},
					jenisKelamin: {
						validators: {
							notEmpty: {
								message: 'The gender is required'
							}
						}
					},
					tempat_lahir: {
						validators: {
							notEmpty: {
								message: 'The last name is required and cannot be empty'
							}
						}
					},
					tgl_lahir: {
						validators: {
							notEmpty: {
								message: 'The last name is required and cannot be empty'
							}
						}
					},
					username: {
						message: 'The username is not valid',
						validators: {
							notEmpty: {
								message: 'The username is required and cannot be empty'
							},
							stringLength: {
								min: 6,
								max: 30,
								message: 'The username must be more than 6 and less than 30 characters long'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_\.]+$/,
								message: 'The username can only consist of alphabetical, number, dot and underscore'
							},
	//                        remote: {
	//                            url: 'remote.php',
	//                            message: 'The username is not available'
	//                        },
							different: {
								field: 'password',
								message: 'The username and password cannot be the same as each other'
							}
						}
					},
					password: {
						validators: {
							notEmpty: {
								message: 'The password is required and cannot be empty'
							},
							identical: {
								field: 'confirmPassword',
								message: 'The password and its confirm are not the same'
							},
							different: {
								field: 'username',
								message: 'The password cannot be the same as username'
							}
						}
					},
					repassword: {
						validators: {
							notEmpty: {
								message: 'The confirm password is required and cannot be empty'
							},
							identical: {
								field: 'password',
								message: 'The password and its confirm are not the same'
							},
							different: {
								field: 'username',
								message: 'The password cannot be the same as username'
							}
						}
					},
					nomor_handphone: {
						validators: {
							notEmpty: {
								message: 'The last name is required and cannot be empty'
							}
						}
					},
					kartu_identitas: {
						validators: {
							notEmpty: {
								message: 'The last name is required and cannot be empty'
							}
						}
					},
					pendidikanTerakhir: {
						validators: {
							notEmpty: {
								message: 'The last name is required and cannot be empty'
							}
						}
					},
					program_studi: {
						validators: {
							notEmpty: {
								message: 'The last name is required and cannot be empty'
							}
						}
					},
					idcabang_kampus: {
						validators: {
							notEmpty: {
								message: 'The last name is required and cannot be empty'
							}
						}
					},
					provinsiRumah: {
						validators: {
							notEmpty: {
								message: 'The last name is required and cannot be empty'
							}
						}
					},
					kabupatenRumah: {
						validators: {
							notEmpty: {
								message: 'The last name is required and cannot be empty'
							}
						}
					},
					kecamatanRumah: {
						validators: {
							notEmpty: {
								message: 'The last name is required and cannot be empty'
							}
						}
					},
					kelurahanRumah: {
						validators: {
							notEmpty: {
								message: 'The last name is required and cannot be empty'
							}
						}
					},
					alamat_rumah_jalan: {
						validators: {
							notEmpty: {
								message: 'The last name is required and cannot be empty'
							}
						}
					},
					nomor_telepon_rumah: {
						validators: {
							notEmpty: {
								message: 'The last name is required and cannot be empty'
							}
						}
					},
					email_pribadi: {
						validators: {
							emailAddress: {
								message: 'The input is not a valid email address'
							}
						}
					},
					kodepos_rumah: {
						validators: {
							notEmpty: {
								message: 'The last name is required and cannot be empty'
							}
						}
					},
					statusBekerja: {
						validators: {
							notEmpty: {
								message: 'The last name is required and cannot be empty'
							}
						}
					},
					provinsiKantor: {
						validators: {
							notEmpty: {
								message: 'The last name is required and cannot be empty'
							}
						}
					},
					kabupatenKantor: {
						validators: {
							notEmpty: {
								message: 'The last name is required and cannot be empty'
							}
						}
					},
					kecamatanKantor: {
						validators: {
							notEmpty: {
								message: 'The last name is required and cannot be empty'
							}
						}
					},
					kelurahanKantor: {
						validators: {
							notEmpty: {
								message: 'The last name is required and cannot be empty'
							}
						}
					},
					alamat_kantor_jalan: {
						validators: {
							notEmpty: {
								message: 'The last name is required and cannot be empty'
							}
						}
					},
					nomor_telepon_kantor: {
						validators: {
							notEmpty: {
								message: 'The last name is required and cannot be empty'
							}
						}
					},
					email_kantor: {
						validators: {
							emailAddress: {
								message: 'The input is not a valid email address'
							}
						}
					},
					kodepos_kantor: {
						validators: {
							notEmpty: {
								message: 'The last name is required and cannot be empty'
							}
						}
					},
					'languages[]': {
						validators: {
							notEmpty: {
								message: 'Please specify at least one language you can speak'
							}
						}
					},
					'programs[]': {
						validators: {
							choice: {
								min: 2,
								max: 4,
								message: 'Please choose 2 - 4 programming languages you are good at'
							}
						}
					}
				}
			})
			.on('error.form.bv', function(e) {
				console.log('error.form.bv');
	 
				// You can get the form instance and then access API
				var $form = $(e.target);
				console.log($form.data('bootstrapValidator').getInvalidFields());
	 
				// If you want to prevent the default handler (bootstrapValidator._onError(e))
				// e.preventDefault();
			})
			.on('success.form.bv', function(e) {
				console.log('success.form.bv');
	 
				// If you want to prevent the default handler (bootstrapValidator._onSuccess(e))
				// e.preventDefault();
			})
			.on('error.field.bv', function(e, data) {
				console.log('error.field.bv -->', data);
			})
			.on('success.field.bv', function(e, data) {
				console.log('success.field.bv -->', data);
			})
			.on('status.field.bv', function(e, data) {
				// I don't want to add has-success class to valid field container
				data.element.parents('.form-group').removeClass('has-success');
	 
				// I want to enable the submit button all the time
				data.bv.disableSubmitButtons(false);
			});
	 
		// Validate the form manually
		$('#validateBtn').click(function() {
			$('#defaultForm').bootstrapValidator('validate');
		});
	});
	
	
	/* Tanggal */
	$('.datepicker').datetimepicker({
		language:  'id',
		weekStart: 1,
		todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
	});	
	
	/* Alamat */	
	function tampilKabupaten()
	{
		kdprop = document.getElementById("provinsiRumah").value;
		$.ajax({
			url:"<?php echo base_url();?>pendaftaran/c_pendaftaran/pilih_kabupaten/"+kdprop+"",
			success: function(response){
				$("#kabupatenRumah").html(response);
			},
		dataType:"html"
		});
		return false;
	}
			 
	function tampilKecamatan()
	{
		kdkab = document.getElementById("kabupatenRumah").value;
		$.ajax({
			url:"<?php echo  base_url();?>pendaftaran/c_pendaftaran/pilih_kecamatan/"+kdkab+"",
			success: function(response){
				$("#kecamatanRumah").html(response);
			},
		dataType:"html"
		});
		return false;
	}
			 
	function tampilKelurahan()
	{
		kdkec = document.getElementById("kecamatanRumah").value;
		$.ajax({
			url:"<?php echo  base_url();?>pendaftaran/c_pendaftaran/pilih_kelurahan/"+kdkec+"",
			success: function(response){
				$("#kelurahanRumah").html(response);
			},
		dataType:"html"
		});
		return false;
	}
			 
	function tampilKabupatenKantor()
	{
		kdprop = document.getElementById("provinsiKantor").value;
		$.ajax({
			url:"<?php echo base_url();?>pendaftaran/c_pendaftaran/pilih_kabupaten/"+kdprop+"",
			success: function(response){
				$("#kabupatenKantor").html(response);
			},
		dataType:"html"
		});
		return false;
	}
			 
	function tampilKecamatanKantor()
	{
		kdkab = document.getElementById("kabupatenKantor").value;
		$.ajax({
			url:"<?php echo  base_url();?>pendaftaran/c_pendaftaran/pilih_kecamatan/"+kdkab+"",
			success: function(response){
				$("#kecamatanKantor").html(response);
			},
		dataType:"html"
		});
		return false;
	}
			 
	function tampilKelurahanKantor()
	{
		kdkec = document.getElementById("kecamatanKantor").value;
		$.ajax({
			url:"<?php echo  base_url();?>pendaftaran/c_pendaftaran/pilih_kelurahan/"+kdkec+"",
			success: function(response){
				$("#kelurahanKantor").html(response);
			},
			dataType:"html"
		});
		return false;
	}

</script>