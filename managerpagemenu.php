<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql="SELECT category,image from food group by category";
$results=  $conn->query($sql);

$options="";


$options=$options.'<div class="container-fluid">';
$url='http://localhost/project/managerpagehome.php';
echo '<form action="" method="post"><input type="submit" name="back"class="btn btn-info" value="Back" style="color:black;margin:5px 0px -200px 100px"></form>';
 
	echo "<form action='' method='post'>";
	echo "<br><center><input type='submit' name='deletemultiple' class='btn btn-info'style='width:130px;height:60px;margin-top:-20px;'value='Delete'></center>";

while($row=mysqli_fetch_array($results))
{
	
	$options=$options.'<div class="row">';
	$ima=$row['image'];
	$options=$options."<div class='col-sm-12'><center>".$row['category']."</center></div></div>";
	$options=$options.'<div class="row">';
	$c=$row['category'];
	$sql1="SELECT * from food where category= '$c'";
	$results1=  $conn->query($sql1);
	while($row1=mysqli_fetch_array($results1))
	{
	
		$im=$row1['image'];
		$id=$row1['id'];
		
		
		$options=$options.'<div class="col-sm-2">'."<h4><br><center>".$row1[2]."</center></h4><hr><center><img src='$im' style='width:150px;height:150px;'></center><hr><h5><center>Price : ₹".$row1[3]."</center></h4>"."<input type='checkbox' style='margin:-250px 0px 0px 200px;' name='records[]' value='$id'></form>"."</div>";
	}
	$options=$options.'</div>';
	//echo '</div>';
	
}
$options=$options.'</div>';

	

if(isset($_POST['back']))
{
	header("refresh:1; url= managerpagehome.php");
	
}



if(isset($_POST['deletemultiple']))
{

	if(!isset($_POST['records'])){
		//echo "<h3 style='margin-top:-800px;margin-left:-500px;'>".""."</h3>
		echo '<script type="text/javascript">';
		echo ' alert("Select at least one item to delete")';  
		echo '</script>';
	}
	else
	{
		$n=count($_POST['records']);
		$i=0;
		while($i<$n){
			$k=$_POST['records'][$i];
			$sql2="DELETE from food where id='$k'";
			$results=  $conn->query($sql2);

			$i++;
		}
	}
	header("refresh:1; url= managerpagemenu.php");
	
}
echo $options;
echo "<hr>";


$conn->close();
?>

<html>

<head>
  <title>Manager Menu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  
  <style>
  .col-sm-2{
	  margin-left:100px;
	  margin-top:10px;
	  width:200px;
	  border:1px solid black;
	  color:white;
	  height:360px;
	 background-image: url(menu4.jpg);
  }
  .col-sm-12{
	  margin-left:15px;
	  margin-top:40px;
	 width:100px;
	 color:white;
	 background-color:black;
		font-size:50px;
	  border:1px solid white;
  }
  input[type=checkbox] {
  width:20px;
  height:20px;
  
	}

  body
  {
	 background-image: url(menu2.jpg);
    background-color: rgba(0,255,255,0.2);
    background-blend-mode: lighten;
  }
  
  
  
  </style>
</head>
<body style="">

</body>
</html>
