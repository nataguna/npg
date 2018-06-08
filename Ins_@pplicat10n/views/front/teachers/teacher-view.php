<!DOCTYPE html>
<html lang="id">
<head>
	<title>Selamat Datang di Halaman <?php echo $tutor_nama;?></title>
</head>
<body>
<?php 
	foreach($data->result_array() as $i):
		$tutor_id=$i['tutor_id'];
		$tutor_nip=$i['nip'];
		$tutor_nama=$i['nama_lengkap'];
?>
<table>
	<tr><td><?php echo $tutor_id;?></td></tr>
	<tr><td><?php echo $tutor_nip;?></td></tr>
	<tr><td><?php echo $tutor_nama;?></td></tr>
</table>
<?php endforeach;?>	
		
</body>
</html>
			
