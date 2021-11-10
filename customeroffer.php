<?php
session_start();

include 'navbar.php';

//session_destroy();
$sum=0;
		$q=0;
		if(isset($_SESSION['cart'])){
			$i=1;
		foreach($_SESSION['cart'] as $key=> $value)
		{
			//print_r($value);
			if($value['Quantity']!=0){
			$q=$q+$value['Quantity'];
			}	
			
		}
		}
		
	
echo "<form method='post'><input type='submit' style='margin-left:1230px;margin-top:-50px;position:absolute;' class='btn btn-success' name='mycart' value='My Cart 🛒 ($q)'> </form>";


if(isset($_POST['mycart']))
{
	if($q==0){
		echo '<script>alert("Add at least 1 of the given item to view cart.")</script>';
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
	  color:white;
	 background-image: url(menu6.jpg);
	 border-radius:10px;
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
$quant1=0;

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
		$quant1=0;
		$im=$row1['image'];
		$id1=$row1['id'];
		$dis=$row1['dish_name'];
		$pri=$row1['price'];
		$categooo=$row1['category'];
		if(isset($_SESSION['cart'])){
			
		foreach($_SESSION['cart'] as $key=> $value)
		{
			
			if($value['item_id']==$id1){
			$quant1=$value['Quantity'];
			//echo "id : ".$id1."QQ : ".$quant1;
			break;
			}	
			
		}
		}
		
		$sql4="SELECT * from offer";
		$results4=  $conn->query($sql4);
		$x="";
		$p1="Price";
		$dateee= date('Y-m-d');
		while($row4=mysqli_fetch_array($results4))
		{
			if($row4['dish_name']==$dis && $row4['category']==$categooo && $row4['date']==$dateee)
			{
				//echo $row4['dish_name'];
				$x="🎉Special Offer🎉";
				$p1="Special Price";
				$pri=$row4['sp_price'];
				
			}
		}
		
		
		
		
		
		$options=$options.'<div class="col-sm-2">'."<form action='customeroffer.php?action=add&id=$id1' method='post'>"."<h4><center><p style='background-color:black;color:yellow'>$x</p>".$row1[2]."</center></h4><hr><center><img src='$im' style='width:150px;height:150px;border-radius:15px;'></center><hr><h5><center>$p1 : ₹".$pri."</center><hr>"."<center>Quantity : <input type='number' min='0' max='5'style='width:50px;background-color:black;color:white;border-radius:8px;'name='qty' value='$quant1'><hr><input type='hidden' name='hidden_name' value='$row1[2]'/><input type='hidden' name='hidden_price' value='$pri'/><input type='submit' name='add' value='Add to 🛒' class='btn btn-primary'>&nbsp;<input type='submit' name='del' value='Remove' class='btn btn-danger'>"."<center></h4></form></div>";
		
	}


	//echo '</div>';
	$options=$options.'</div>';
	
	
}
$options=$options.'</div>';
	
	
	
if(isset($_POST['del']))
{
	
	if(isset($_SESSION['cart'])){
		
		foreach($_SESSION['cart'] as $key=> $value)
		{
			if($value['item_id']==$_GET['id']){
				$iddd=$value['item_id'];
			unset($_SESSION['cart'][$key]);
			$_SESSION['cart']=array_values($_SESSION['cart']);
			echo '<script>window.location="customeroffer.php"</script>';
			break;
			}	
			
		}
		}
	
	
	
	
	
}
	
	
	
	
	
	
	
	
	
	
	
	
	

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
			echo '<script>alert("Quantity of Item must be at least 1.")</script>';
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
			echo '<script>alert("Quantity of Item must be at least 1.")</script>';
			echo '<script>window.location="customeroffer.php"</script>';
			
		}
	}
}



echo $options;

$conn->close();
?>

