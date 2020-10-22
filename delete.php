<?php

include 'connect.php';

if(isset($_GET['id'])){
		
		$sql="delete from user where id='".$_GET['id']."'";
	
		if(mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn)))
			
			//if(mysqli_query($conn, $sql))
			{
			header ('Location:index.php');	
			}
		else
			{
				
			echo ("Error Occured".mysqli_errno($conn));	
			}
		}

?>