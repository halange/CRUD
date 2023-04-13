<?PHP
include 'include/config.php';
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$path=$_POST['path'];
	$detail=$_POST['detail'];
	$sql="insert into tags(name,path,detail)values('$name','$path','$detail')";
	$result=mysqli_query($con,$sql);
	if($result){
		echo "data was inserted";
	}else{
		echo"data undfsdfsdf";
	}
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

    <title>DASHBOARD </title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<link rel="stylesheet" href="path/to/line-awesome/css/line-awesome-font-awesome.min.css">
<i class="las la-battery-three-quarters"></i>


    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="style.css" rel="stylesheet" type="text/css">


</head>
<body>
 
 
 
	<div class="sidebar">
		<div class="sidebar-brand">
			<h1><span class="lab la-accusoft"></span>DASHBOARD</h1>
		</div>
	</div> 
	
	<div class="sidebar-menu">
		<ul>
			<li>
				<a href=""><span class="las la-igloo"></span><span>DASHBOARD</span></a>
			</li>
			
			<li>
				<a href=""><span class="las la-users"></span><span>Customers</span></a>
			</li>
			
			<li>
				<a href=""><span class="las la-clipboard-list"></span><span>Orders</span></a>
			</li>
			
			<li>
				<a href=""><span class="las la-shipping-bag"></span><span>DASHBOARD</span></a>
			</li>
			
			<li>
				<a href=""><span class="las la-receipt"></span><span>DASHBOARD</span></a>
			</li>
			
			<li>
				<a href=""><span class="las la-user-circle"></span><span>DASHBOARD</span></a>
			</li>
			
			<li>
				<a href=""><span class="las la-clipboard-list"></span><span>DASHBOARD</span></a>
			</li>			
		</ul>
	</div>
	</div>

	<div class="main-content">
		<header>
		<h1>
				<label for="">
					<span class="las la-bars">			
					</span>
				</label>
				DASHBOARD
				</h1>
				<div class="search=wrapper">
					<span class="las la-search"></span>
					<input type="search" placeholder="Search here">
				</div>
				
				<div class="user-wrapper">
					<img src="" alt="" width="30px" height="30px"/>
					<div>
						<h4> John Does </h4>
						<small>Super Admin </small>
					</div>
				</div>
		</header>
		<main>
			<div class="cards">
				<div class="card-single">
					<div>
						<h1>54</h1>
						<span>Customers</span>
					</div>
					<div>
						<span class="las la-users"></span>
					</div>
				</div>
			</div>
			
			<div class="cards">
				<div class="card-single">
					<div>
						<h1>54</h1>
						<span>Customers</span>
					</div>
					<div>
						<span class="las la-users"></span>
					</div>
				</div>
			</div>
			
			<div class="cards">
				<div class="card-single">
					<div>
						<h1>54</h1>
						<span>Order</span>
					</div>
					<div>
						<span class="las la-shopping-bag"></span>
					</div>
				</div>
			</div>
			
			<div class="cards">
				<div class="card-single">
					<div>
						<h1>79</h1>
						<span>Projects</span>
					</div>
					<div>
						<span class="las la-clipboard"></span>
					</div>
				</div>
			</div>
			
			<div class="cards">
				<div class="card-single">
					<div>
						<h1>54</h1>
						<span>Customers</span>
					</div>
					<div>
						<span class="las la-google-walet"></span>
					</div>
				</div>
			</div>
		
		</main>
	</div>
	
	
<div class="container-fluid">
	<div class="wrap">
		<div class="left-site"><h2>DASHBOARD</h2></div>
		<div class="butttons">
		<button class="btn btn-primary my-5 text-light " style="color:white;"><a href="insert.php"  style="color:white;"> Add</a> </button>
		<button class="btn btn-primary my-5 text-light " style="color:white;"><a href="display.php"  style="color:white;"> View</a> </button>
		<button class="btn btn-primary my-5 text-light " style="color:white;"><a href="index.php"  style="color:white;"> Dashboard</a> </button>
		</div>
	</div>
</div>

</body>
</html>