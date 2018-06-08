/* Validasi */
$(document).on("click", ".open-EditRiwayatPendidikanDialog", function () {
	var nomor = $(this).data('id1');
	var namaperguruantinggi = $(this).data('id2');
	var programstudi = $(this).data('id3');
	var kota = $(this).data('id4');
	var tahunlulus = $(this).data('id5'); 
	var nomorijazah = $(this).data('id6'); 
	var tingkatpendidikan = $(this).data('id7'); 
	var nomorriwayatpendidikan = $(this).data('id8'); 
	$(".modal-body #nama_perguruan_tinggi").val( namaperguruantinggi );
	$(".modal-body #jurusan").val( programstudi );
	$(".modal-body #kota").val( kota );
	$(".modal-body #tahun_lulus").val( tahunlulus );
	$(".modal-body #nomor").val( nomorriwayatpendidikan );
	$(".modal-body #nomor_ijazah").val( nomorijazah );
	$("#tingkatpendidikan").val( nomor );
});

$(document).on("click", ".open-HapusRiwayatPendidikanDialog", function () {
	var nomor = $(this).data('id1');
	$(".modal-body #nomor").val( nomor );
});
