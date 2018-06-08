
	$(document).on("click", ".open-EditRiwayatPendidikanDialog", function () {
				var nomor = $(this).data('id1');
				var namaperguruantinggi = $(this).data('id2');
				var programstudi = $(this).data('id3');
				var kota = $(this).data('id4');
				var tahunlulus = $(this).data('id5'); 
				var nomorijazah = $(this).data('id6'); 
				var tingkatpendidikan = $(this).data('id7'); 
				$(".modal-body #nama_perguruan_tinggi").val( namaperguruantinggi );
				$(".modal-body #jurusan").val( programstudi );
				$(".modal-body #kota").val( kota );
				$(".modal-body #tahun_lulus").val( tahunlulus );
				$(".modal-body #nomor_ijazah").val( nomorijazah );
				$("#tingkatpendidikan").val( nomor );
				
				$('#defaultEditRiwayatPendidikan')
			.bootstrapValidator({
				message: 'This value is not valid',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					tingkat_pendidikan: {
						validators: {
							notEmpty: {
								message: 'The field is required'
							}
						}
					},
					nama_perguruan_tinggi: {
						validators: {
							notEmpty: {
								message: 'The full name is required and cannot be empty'
							},
							stringLength: {
								max: 50,
								message: 'The university must less than 50 characters long'
							},
						}
					},
					jurusan: {
						validators: {
							notEmpty: {
								message: 'The full name is required and cannot be empty'
							},
							stringLength: {
								max: 50,
								message: 'The major must less than 50 characters long'
							},
						}
					},
					tahun_lulus: {
						validators: {
							regexp: {
								regexp: /^[0-9]+$/,
								message: 'The number can only consist of number'
							},
							stringLength: {
								max: 4,
								min: 4,
								message: 'The number must 4 number long'
							},
							notEmpty: {
								message: 'The number is required and cannot be empty'
							}
						}
					},
					nomor_ijazah: {
						validators: {
							stringLength: {
								max: 30,
								message: 'The character must less than 30 character'
							},
							notEmpty: {
								message: 'The number is required and cannot be empty'
							}
						}
					},
					kota: {
						validators: {
							stringLength: {
								max: 30,
								message: 'The branch of city must less than 30 characters long'
							},
							notEmpty: {
								message: 'The branch of bank is required and cannot be empty'
							}
						}
					}
				}
			})
			});
			
	$(document).on("click", ".open-HapusRiwayatPendidikanDialog", function () {
		var nomor = $(this).data('id1');
		$(".modal-body #nomor").val( nomor );
	});
