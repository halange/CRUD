<?php include 'include/header.php';?>

<body>
<div class="container">
<div>
<button class="btn btn-primary my-5 text-light " style="color:white;"><a href="insert.php"  style="color:white;"> Add</a> </button>
<button class="btn btn-primary my-5 text-light " style="color:white;"><a href="display.php"  style="color:white;"> View</a> </button>
<button class="btn btn-primary my-5 text-light " style="color:white;"><a href="index.php"  style="color:white;"> Dashboard</a> </button>
</div>

<table class="table table-dark">
  <thead>     <tr>       <th scope="col">TITLE</th>       <th scope="col">CONTENT</th>        <th scope="col">DATE</th>       <th scope="col">AUTHOR</th>       <th scope="col">UPDATE</th>      <th scope="col">DELETE</th>   </tr>   </thead>
  <tbody>
  <?php
	$sql_select="select * from tags_news";
	$sql_result=mysqli_query($con,$sql_select);
	if($sql_result){
		$row=mysqli_fetch_assoc($sql_result);
		
		while($row=mysqli_fetch_assoc($sql_result)){
		$id=$row['id'];
		$title=$row['title'];
		$content=$row['content'];
		$date=$row['date'];
		$author=$row['author'];
		echo '<tr>
			  <th scope="row">'. $title.'</th>
			  <td>'.$content .'</td>
			  <td>'.$date .'</td>
			  <td>'.$author .'</td>
			  <td> <button class="btn btn-primary my-5 text-light " style="color:white;"><a href="update.php?updateid='.$id.'"  style="color:white;"> update</a> </button></td>
			  <td><button class="btn btn-danger my-5 text-light " style="color:white;"><a href="delete.php?deleteid='.$id.'"  style="color:white;"> delete</a> </button></td>
			</tr>		
		';
		}
		}
 ?>
</table>



</div>
</body>
</html>
</html>