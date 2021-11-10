<?php
session_start();
//session_destroy();
$sum=0;
		$q=0;
		if(isset($_SESSION['cart'])){
			$i=1;
		foreach($_SESSION['cart'] as $key=> $value)
		{
			print_r($value);
			if($value['Quantity']!=0){
			$q=$q+$value['Quantity'];
			$tp=$value['Price']*$value['Quantity'];
			$sum=$sum+$tp;
			echo "
			<tr>
				<td>$i</td>
				<td>$value[Name]</td>
				<td>$value[Price]</td>
				<td>$value[Quantity]</td>
				<td>$tp</td>
			</tr>";
			$i++;
			
			}	
			
		}
		}
		
		$aaa="My Cart".$q;
echo "<form method='post'><input type='submit' class='btn btn-success float-right' name='mycart' value='My Cart ($q)'> </form>";


if(isset($_POST['mycart']))
{
	if($q==0){
		echo '<script>alert("Add at least 1 of the given item")</script>';
		echo "<script>window.location='http://localhost/project/customeroffer.php'</script>";
	}
	else
	{
		echo "<script>window.location='http://localhost/project/customeroffer1.php'</script>";
	}
}

?>
<html>
<head>
  <title>Customer Menu</title>
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
  }
  .col-sm-12{
	 
	  margin-top:50px;
	
		font-size:50px;
	  border:1px solid black;
  }
  
  
  </style>
  
</head>
<body style="background-color:cyan;">

</body>
</html>




<?php
//session_start();
//session_destroy();
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

$sql="SELECT id,category,image from food group by category";
$results=  $conn->query($sql);
$options="";


$options=$options.'<div class="container-fluid">';
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
		$id1=$row1['id'];

		
		$options=$options.'<div class="col-sm-2">'."<form action='customeroffer.php?action=add&id=$id1' method='post'>"."<h4><center>".$row1[2]."</center></h4><hr><center><img src='$im' style='width:150px;height:150px;'></center><hr><h5><center>Price : ₹".$row1[3]."</center><hr>"."<center>Quantity : <select style='width:50px;background-color:cyan;border-radius:8px;'name='qty' value=''><option selected>0</option><option>1</option><option>2</option><option>3</option><option>4</option></select><hr><input type='hidden' name='hidden_name' value='$row1[2]'/><input type='hidden' name='hidden_price' value='$row1[3]'/><input type='submit' name='add' value='Add to Cart' class='btn btn-info'>"."<center></h4></form></div>";
		
	}


	//echo '</div>';
	$options=$options.'</div>';
	
	
}
$options=$options.'</div>';
	

if(isset($_POST['add']))
{
	if(isset($_SESSION['cart']))
	{
		$item_array_id=array_column($_SESSION['cart'],'item_id');
		if(!in_array($_GET['id'],$item_array_id))
		{
			$count=count($_SESSION['cart']);
		if($_POST['qty']!=0){	
			$item_array=array(
			'item_id'=>$_GET['id'],
			'Name'=>$_POST['hidden_name'],
			'Price'=>$_POST['hidden_price'],
			'Quantity'=>$_POST['qty']
			
		);
		$_SESSION['cart'][$count]=$item_array;
		//print_r($item_array);
			echo '<script>window.location="customeroffer.php"</script>';}
		else
			{
			echo '<script>alert("Add at least 1 item.")</script>';
			echo '<script>window.location="customeroffer.php"</script>';
			
			}
			
		}
		else
		{
			echo '<script>alert("Item already Added")</script>';
			echo '<script>window.location="customeroffer.php"</script>';
			
		}
	}
	
	else
	{
		if($_POST['qty']!=0){
		$item_array=array(
			'item_id'=>$_GET['id'],
			'Name'=>$_POST['hidden_name'],
			'Price'=>$_POST['hidden_price'],
			'Quantity'=>$_POST['qty']
			
		);
		$_SESSION['cart'][0]=$item_array;
		echo '<script>window.location="customeroffer.php"</script>';
		}
		else
		{
			echo '<script>alert("Add at least 1 item.")</script>';
			echo '<script>window.location="customeroffer.php"</script>';
			
		}
	}
}



echo $options;





























$conn->close();
?>

