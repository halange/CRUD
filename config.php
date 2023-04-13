<?php
/*
 $db = mysqli_connect('localhost', 'root', '',  'tags') 	 or        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db, 'tags' ) or die(mysqli_error($db));

*/
$con =new mysqli('localhost','root','','tags');

if($con){
	echo "";
}else{
	echo "fail";
	die(mysqli_error($con));
	echo"hi";
}



	$sql_select="select * from tags_news";
	$sql_result=mysqli_query($con,$sql_select);
	if($sql_result){
		$row=mysqli_fetch_assoc($sql_result);
		
		while($row=mysqli_fetch_assoc($sql_result)){
		$title=$row['title'];
		$content=$row['content'];
		$date=$row['date'];
		$author=$row['author'];
	/*	echo '<tr>
			  <th scope="row">'. $title.'</th>
			  <td>'.$content .'</td>
			  <td>'.$date .'</td>
			  <td>'.$author .'</td>
			</tr>
		
		'; */
		
		}
		
	}


?>