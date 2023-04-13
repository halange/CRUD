<?php
include 'include/config.php';
if(isset($_GET['deleteid'])){
	$id=$_GET['deleteid'];
	
	$sql="delete from tags_news  where id=$id";
	$result=mysqli_query($con,$sql);
	if($result){
		echo "delete";
		header('location:display.php');
	}else{
		echo "no delete";
	}
	
	
}


?>