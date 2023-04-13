<?PHP
include 'include/config.php';
if(isset($_POST['submit'])){
	
	$section=$_POST['section'];
	$title=$_POST['title'];
	$content=$_POST['content'];
	$author=$_POST['author'];
/*	$image1=$_POST['image1'];
	$image2=$_POST['image2'];
	$image3=$_POST['image3'];
	$image4=$_POST['image4'];
*/	$publishnot=$_POST['publishnot'];
	
	
	/*$sql="insert into tags_news(section,title,content,author,image1,image2,image,image4,publishnot)values('$section','$title','$content','$author','$image1','$image2','$image','$image4','$publishnot')";*/
	$sql="insert into tags_news(section,title,content,author,publishnot)values('$section','$title','$content','$author','$publishnot')";

	$result=mysqli_query($con,$sql);

	if($result){
		/*echo "data was inserted";*/
		header('location:display.php');
	}else{
		echo"data undfsdfsdf";
		// show error from config.php
	}
	/*$sql_select="select * from tags_news";
	$sql_result=mysqli_fetch_array($sql_select);*/

}
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>INSERT </title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>
<body>
<div class="container">
<div>
<button class="btn btn-primary my-5 text-light " style="color:white;"><a href="insert.php"  style="color:white;"> Add</a> </button>
<button class="btn btn-primary my-5 text-light " style="color:white;"><a href="display.php"  style="color:white;"> View</a> </button>
<button class="btn btn-primary my-5 text-light " style="color:white;"><a href="index.php"  style="color:white;"> Dashboard</a> </button>
</div>

	<form method="post" action="insert.php">
		<div>
			<label>section</label>
			<input type="text" class="form-control"  placeholder="enter name" name="section" id="section">
		</div>

		<div>
			<label>title</label>
			<input type="text" class="form-control"  placeholder="enter title" name="title" id="title">
		</div>

		<div>
			<label>content</label>
			<input type="text" class="form-control"  placeholder="enter content" name="content" id="content">
		</div>
		
		<div>
			<label>author</label>
			<input type="text" class="form-control"  placeholder="enter author" name="author" id="author">
		</div>
		
		<div>
			<label>publishnot</label>
			<input type="text" class="form-control"  placeholder="enter publishnot" name="publishnot" id="publishnot">
		</div>

		<div><button type="submit" name="submit" value="submit" class="btn btn-primary">submit</button></div>
	</form>



</body>
</html>