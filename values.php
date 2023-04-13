 <?php
 include 'include/config.php';
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