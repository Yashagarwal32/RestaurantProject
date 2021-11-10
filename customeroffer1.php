<?php
session_start();



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Order</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <style>
  body
  {
	 background-image: url(menu9.jpg);
	 background-size:cover;
    background-color: rgba(0,255,255,0.1);
    background-blend-mode: lighten;
	color:white;
  }
  input
  {
	  border:1px solid black;
	  border-radius:8px;
	  height:40px;
  }
  
  </style>
</head>
<body style=''>

<div class="container-fluid">
 <center> <h1>Customer Order</h1></center>
  <div class="row">
    <div class="col-lg-8">
	  <table class="table" style="color:white;">
    <thead class="text-center">
      <tr>
        <th>Serial No.</th>
        <th>Name</th>
        <th>Price</th>
		<th>Quantity</th>
		<th>Total Price</th>
		
      </tr>
    </thead>
    <tbody class="text-center">
      <?php 
		$sum=0;
		$q=0;
		if(isset($_SESSION['cart'])){
			$i=1;
		foreach($_SESSION['cart'] as $key=> $value)
		{
			//print_r($value);
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
		
	  ?>
    </tbody>
  </table>
</div>

<div class="col-lg-4">
<form method="post">
<input type="text" placeholder='Name'name='cname' required>
<input type="email" placeholder='Email-Id'name='cemail' required>

</div>

	</div>
 
  <div class="row">
  <div class="col-5"></div>
  <div class="col-4">
  <?php ; 
	
	echo "<h1>Total Amount :  $sum</h1>";
?>
</div>
<div class="col-lg-2" style="border:1px solid cyan; border-radius:5px;color:white;"><h4><Center>Offer<hr>Get 5% off on purchase of more than 499 ₹</center></h4></div>

</div>

<div class="row">
<div class='col-7'></div>
<div class='col-2'>
		<?php $disco="";
		$noti="";
		if($sum >499 && $sum<=999)
		{
			$r=1000-$sum;
			$disco="<h3 style='margin-top:-100px;margin-left:-100px;'>".'Discount : 5%'."</h3>";
			$sum=$sum-0.05*$sum;
			echo $disco;
			echo "<h2 style='margin-left:-230px'>Final Amount : ".$sum."<img src='crack.gif' style='height:100px;width:100px;margin-top:-200px;margin-left:350px;'></h2>";
			
			$noti="<h4>Add food of ".$r."₹ more to get 10% off. </h4>";
			
		}
		elseif($sum>999)
		{
			$disco="<h3 style='margin-top:-100px;margin-left:-100px;'>".'Discount : 10%'."</h3>";
			$sum=$sum-0.1*$sum;
			echo $disco;
			echo "<h2 style='margin-left:-230px'>Final Amount : ".$sum."<img src='crack.gif' style='height:100px;width:100px;margin-top:-200px;margin-left:350px;'></h2>";
		}
		else
		{
			$r=500-$sum;
			$noti="<h4>Add food of ".$r."₹ more to get 5% off.</h4> ";
			
		}
		
		?></div>
</div>






  <div class="row">
  <div class="col-2"></div>
  <div class="col-4"><?php echo $noti ?></div>
  <div class="col-6">
  
 <button type="button" class="btn btn-danger"  onclick="window.location='http://localhost/project/customeroffer.php'">Update</button> 
 <input type="submit" class=" btn-primary"  value="Proceed" name='proc' style="">
</form>
</div>
</div>

<div class="row">
<div class="col-9"></div>
<div class="col-2" style="border:1px solid cyan; border-radius:5px;color:color;"><h4><Center>Offer<hr>Get 10% off on purchase of more than 999 ₹</center></h4></div>

</div>

</div>

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

/*$sql = "CREATE TABLE totalprices (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(30) NOT NULL,
tprice INT(6) NOT NULL,
order_date DATE NOT NULL,
order_time DATE NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table totalprices created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}*/

/*$sql = "CREATE TABLE orders (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
item VARCHAR(30) NOT NULL,
price VARCHAR(30) NOT NULL,

quantity VARCHAR(30) NOT NULL,
tprice INT(6) NOT NULL,
order_date DATE NOT NULL,
order_time DATE NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table orders created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
*/

if(isset($_POST['proc']))
{
	$sum=0;
		$q=0;
		$pname=$_POST['cname'];
		$pemail=$_POST['cemail'];
		$curtime=date("h:i:sa");
		$curdate=date("Y-m-d");
		if(isset($_SESSION['cart'])){
			$i=1;
		foreach($_SESSION['cart'] as $key=> $value)
		{
			//print_r($value);
			$sql="";
			if($value['Quantity']!=0){
			$q=$q+$value['Quantity'];
			$tp=$value['Price']*$value['Quantity'];
			$sum=$sum+$tp;
			
			$sql = "INSERT INTO orders (name, email,item,price,quantity,tprice,order_date)
			VALUES ('$pname','$pemail','$value[Name]','$value[Price]','$value[Quantity]','$tp','$curdate')";
			if ($conn->query($sql) === TRUE) {
				//$err2="Your Dish Added successfully";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
				}

			$i++;
			
			}	
			
		}
		
		
		if($sum >499 && $sum<=999)
		{	
			$sum=$sum-0.05*$sum;	
		}
		elseif($sum>999)
		{
			
			$sum=$sum-0.1*$sum;
		}
		else
		{
			
			//nothing
		}
		$sql1 = "INSERT INTO totalprices (email,tprice,order_date)
			VALUES ('$pemail','$sum','$curdate')";
			if ($conn->query($sql1) === TRUE) {
				//$err2="Your Dish Added successfully";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
				}
		}
		session_destroy(); 
		echo "<script>window.location='http://localhost/project/customerthanks1.php'</script>";
		
		
}


?>
