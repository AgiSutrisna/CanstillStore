<?php 
	session_start();
	include '../dbconnect.php';
		
	if(isset($_POST['addcategory']))
	{
		$namakategori = $_POST['namakategori'];
			  
		$tambahkat = mysqli_query($conn,"insert into kategori (namakategori) values ('$namakategori')");
		if ($tambahkat){
		echo "
		<meta http-equiv='refresh' content='1; url= kategori.php'/>  ";
		} else { echo "
		 <meta http-equiv='refresh' content='1; url= kategori.php'/> ";
		}
		
	};
	?>