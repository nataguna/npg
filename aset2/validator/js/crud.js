/*File	: crud.js
Pembuat : Adrian Surya Permana / 24010312130048
Deskripsi	: javascript dilengkapi jquery dan ajax
untuk kontrol operasi CRUD pada data mhs
*/

$(document).ready(function(){
	$(".editButton").click(function(){
		baris = $(this).closest("tr");
		$(baris).find("td:not(#nim, #editButton, #saveButton, #deleteButton)").each(function(){
			value = $(this).html();
			$("#div1").html(value);
			$(this).html('<input type ="text" value=\"'+value+'\"></input>');
		});
		$(baris).find("#editbutton").html('<button class="saveButton" id="saveButton">Save</button>');
		$(".saveButton").click(function(){
		baris = $(this).closest("tr");
		nim = $(baris).find("td#nim").html();
		nama = $(baris).find("td#nama").find("input:text").val();
		email = $(baris).find("td#email").find("input:text").val();
		alamat = $(baris).find("td#alamat").find("input:text").val();
		$.ajax({
			type: "POST",
			url: "edit_mhs.php",
			data: "nim="+nim+"&nama="+nama+"&email="+email+"&alamat="+alamat,
			success: function(html){
				if (html == 'Data has been updated.<br /><br />'){
					$("#div1").html(html);
					location.reload();
				}
				else{
					$("#div1").html(html);
				}
			}
		});
		$(baris).find("td:not(#editButton):not(#saveButton):not(#deleteButton)").each(function(){
			value = find("input:text").val();
			$(this).html(value);
		});
		$(baris).find("#deleteButton").html('<button class="deleteButton">Delete</button>');
	});
		$(baris).find("#deleteButton").html('');
	});
	$(".deleteButton").click(function(){
		baris = $(this).closest("tr");
		nim = $(baris).find("td#nim").html();
		$.ajax({
			type: "POST",
			url: "delete_mhs.php",
			data: "nim="+nim,
			success: function(html){
				$("#div1").html(html);
				location.reload();
			}
		});
	});
	$(".addButton").click(function(){
		baris = $(this).closest("tr");
		nim = $(baris).find("td#nim").find("input:text").val();
		nama = $(baris).find("td#nama").find("input:text").val();
		email = $(baris).find("td#email").find("input:text").val();
		alamat = $(baris).find("td#alamat").find("input:text").val();
		$.ajax({
			type: "POST",
			url: "add_mhs.php",
			data: "nim="+nim+"&nama="+nama+"&email="+email+"&alamat="+alamat,
			success: function(html){    
				if (html == '1 record added. </br></br>'){
					$("#div1").html(html);
					location.reload();
				}
				else{
					$("#div1").html(html);
				}
			}
		});
	});
});