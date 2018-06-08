<?php
	include 'headnya.php';
	include 'vendornya.php';
?>
<?php
//echo $record['username'];
if( !empty($record) ) {
	foreach ($record as $rec){
/*		echo $rec->id_user;
		echo "<br />";
		echo $rec->username;
		echo "<br />";
		//echo "<img src='$rec->foto_loc' class='rounded img-fluid'>"; */
	}
}
?>
<br />
<p align=center>
	<img src='<?php echo $rec->foto_loc ?>' width='300'>
		<form class="form-horizontal" name="form" method="post" enctype="multipart/form-data" action="avatar">
		<input type="hidden" name="id" value="<?php echo $rec->id_user ?>">
		<p align='center'>
		<input type="hidden" name="nif" value="<?php echo $rec->username ?>">
		<input name="filefoto" type="file" />
		<button name="BtnUpload" class="btn btn-default">Upload</button> </p>

		</form>	
</p>	

</body>
</html>