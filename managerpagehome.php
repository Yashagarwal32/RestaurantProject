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

// sql to create table
/*$sql = "CREATE TABLE add_category (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
category VARCHAR(30) NOT NULL,
image longblob NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}



$sql = "CREATE TABLE food (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
category VARCHAR(30) NOT NULL,
dish_name VARCHAR(30) NOT NULL,
price INT(4) NOT NULL,
image longblob NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  $err2= "Table food created successfully";
} else {
  $err3= "Error creating table: " . $conn->error;
}


$sql = "CREATE TABLE offer (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
category VARCHAR(30) NOT NULL,
dish_name VARCHAR(30) NOT NULL,
sp_price INT(4) NOT NULL,
date DATE NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  $err4= "Table offer created successfully";
} else {
  $err5= "Error creating table: " . $conn->error;
}
*/



$d="block";
$d1="none";
$d2="none";
$dd=date("Y-m-d");
$time = strtotime('00/00/0000');

$dd1 = date('Y-m-d',$time);


$count=0;

$sql1="SELECT category FROM add_category";
$results =  $conn->query($sql1);
$options="";
while($row2=mysqli_fetch_array($results))
{
	$options=$options."<option>$row2[0]</option>";
	
}


if(isset($_POST['regprice'])){
		
$d1="block";
$d="none";
$d2="block";

$catego2=$_POST['categ2'];
$sql22="SELECT dish_name FROM food WHERE category= '$catego2'";
$results11 =  $conn->query($sql22);
$options1="";
while($row5=mysqli_fetch_array($results11))
{
	$options1=$options1."<option>$row5[0]</option>";
	
}
if(isset($_POST['dish1'])){
	$pri=$_POST['dish1'];
$sql3="SELECT price FROM food WHERE dish_name= '$pri'";
$results2 =  $conn->query($sql3);
$rp="";
while($row4=mysqli_fetch_array($results2))
{
	$rp=$rp."$row4[0]";
	
}

}
else{
	$err5="Please Select a Dish First";
}
}










if(isset($_POST['foods'])){
	
$d1="block";
$d="none";
$d2="block";
$count=1;
$catego=$_POST['categ2'];
$sql2="SELECT dish_name FROM food WHERE category= '$catego'";
$results1 =  $conn->query($sql2);
$options1="";
while($row3=mysqli_fetch_array($results1))
{
	$options1=$options1."<option>$row3[0]</option>";
	
}

}

	
//if ($_SERVER["REQUEST_METHOD"] == "POST")
if(isset($_POST['categsub']))
{
	header("refresh:1; url= managerpagehome.php");

	$cate=$_POST['categ'];
	$imag=$_POST['imag'];
$sql = "INSERT INTO add_category (category, image)
VALUES ('$cate','$imag')";

if ($conn->query($sql) === TRUE) {
  $err="New Category Added successfully";
} else {
  $err1="Error: " . $sql . "<br>" . $conn->error;
}
}


if(isset($_POST['foodsub']))
{
	header("refresh:1; url= managerpagehome.php");

	$cate1=$_POST['categ1'];
	$dish=$_POST['dish'];
	$price=$_POST['price'];
	$imag1=$_POST['imag1'];
	
	
$sql = "INSERT INTO food (category, dish_name,price,image)
VALUES ('$cate1','$dish','$price','$imag1')";

if ($conn->query($sql) === TRUE) {
  $err2="Your Dish Added successfully";
} else {
  $err3="Error: " . $sql . "<br>" . $conn->error;
}
}


if(isset($_POST['offersub']))
{
	header("refresh:1; url= managerpagehome.php");
	
	

	
/*if($count<1){
	$err5="Select a Dish for Offer";
}*/
 if(empty($_POST['sp_price']))
{
	$err5="             Fill up the Special Price";
}
else if ($_POST['dat']<$dd1)
{
	$err5="           Please Select Correct Date";
}

 else if(isset($_POST['categ2']) && isset($_POST['dish1']) && isset($_POST['sp_price']) && isset($_POST['dat'])){
	$cate2=$_POST['categ2'];
	$dish1=$_POST['dish1'];
	$sprice=$_POST['sp_price'];
	$date=$_POST['dat'];
	echo $date;
	
$sql = "INSERT INTO offer (category, dish_name,sp_price,date)
VALUES ('$cate2','$dish1','$sprice','$date')";

if ($conn->query($sql) === TRUE) {
  $err4="Your Dish Added successfully";
} else {
  $err5="Error: " . $sql . "<br>" . $conn->error;
}
}




}

$countorder=0;
$reve=0;
$tda=date("Y-m-d");
$sql78="SELECT tprice FROM totalprices WHERE order_date= '$tda'";
$results78 =  $conn->query($sql78);

while($row38=mysqli_fetch_array($results78))
{
	$reve=$reve+$row38['tprice'];
	$countorder++;
	
}

if(isset($_POST['rchecki']))
{
	$countorder=0;
	$reve=0;
	$dateforrev=$_POST['rdate'];
	$sql88="SELECT tprice FROM totalprices WHERE order_date= '$dateforrev'";
$results88 =  $conn->query($sql88);

while($row88=mysqli_fetch_array($results88))
{
	$reve=$reve+$row88['tprice'];
	$countorder++;
	
}

}









$conn->close();
?>


<html>

<head>
  <title>Manager</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  
  <style>
  .col-sm-4{
	  border:2px solid black;
	  border-radius:20px;
  }
  input,select{
	  border:1px solid black;
	  border-radius:8px;
	  width:250px;
	  height:40px;
	  margin-left:120px;
  }
  body
  {
	 background-image: url(manager.jpg);
    background-color: rgba(255,255,255,0.6);
    background-blend-mode: lighten;
  }
  </style>
</head>
<body>

<div class="container-fluid">
<span style="margin-bottom:30px; font-size:30px;">Hello Yash<br><div style="background-color: rgba(0,255,255,0.3);width:250px;margin-bottom:-50px;border-radius:8px;height:40px;"><h3>Revenue: <?php echo "₹ ".$reve?></h3></div></span><center><h1>Manage Restaurant</h1></center>
<h2 style="margin:-50px 0px 0px 1275px">🔔<sup style="background-color:red;font-size:25px;color:white;border-radius:5px;margin-left:-10px;"><?php echo $countorder;?></sup></h2>
<button type="button" class="btn btn-danger" style="margin:-30px 0px 0px 1350px" onclick="window.location='http://localhost/project/managerpagelogin.php'">Logout</button><hr>
  <div class="row">
    <div class="col-sm-4" style="background-color: rgba(0,255,255,0.3);"><center><h1>Add New Category of Food</h1></center><hr>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<input type="text" placeholder="New Category" name="categ" required><br><br>
	<input type="file" name="imag" required><br><br>
	<p style="margin:-10px 0px 0px 100px;">Choose an image related to New category</p><br><br>
	
	<input type="submit" name="categsub" style="background-color:navy;width:150px;color:white;margin-left:150px;"><br><br>
	<?php if(isset($err)) echo "<p style='margin:-10px 0px 0px 100px;color:green'>".$err; if(isset($err1)) echo "<p style='margin:-10px 0px 0px 100px;color:red;'>".$err1."</p>";?></p><br><br>
	
	</form>
	</div>
	
	
	
	
    <div class="col-sm-4" style="background-color: rgba(0,255,255,0.3);"><center><h1>Add New Dish </h1></center><hr>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<select name='categ1' required>
	<?php echo $options;?>
	</select>
	<br><br>
	<input type="text" placeholder="Dish Name" name="dish" required><br><br>
	<input type="number" placeholder="Price" name="price" required><br><br>
	
	<input type="file" name="imag1" required><br><br>
	<p style="margin:-10px 0px 0px 100px;">Choose an image related to New Dish</p><br>
	
	<input type="submit"name="foodsub" style="background-color:navy;width:150px;color:white;margin-left:150px;"><br><br>
	<?php if(isset($err2)) echo "<p style='margin:-10px 0px 0px 130px;color:green'>".$err2; if(isset($err3)) echo "<p style='margin:-10px 0px 0px 100px;color:red;'>".$err3."</p>";?></p>
	
	</form>
	</div>
	
	
	
	
	
	
	
	
    <div class="col-sm-4" style="background-color: rgba(0,255,255,0.3);"><center><h1>Add Special Offer </h1></center><hr>
	<form>
	<input type="submit"name="refreshp" style="width:50px;margin:15px 0px -80px 400px;font-size:20px;background-color:green"value="🔄">
	</form>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
	<select name='categ2' required>
	<?php echo $options;?>
	</select>
	<br><br>
	<input type="submit"name="foods" style="background-color:white;display:<?php echo $d?>"value="Select Dish        👇"><br><br>
	
	<select name='dish1' style="margin-top:-50px;display:<?php echo $d1?>"><?php if(isset($options1))echo $options1;?></select><br><br>
	<input type="submit"name="regprice" style="margin:-25px 0px 0px 280px;;width:180px;background-color:red;display:<?php echo $d2?>"value="See Regular Price"><br><br>
	
	<!--</form>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> -->
	<input type="number" placeholder="Special Price" name="sp_price"style="margin-top:-85px;width:150px;" value="<?php if(isset($rp)){echo $rp;}else if(isset($_POST['sp_price'])){echo $_POST['sp_price'];}?>" ><br><br>
	
	
		<?php 
		$tda1=date("Y-m-d");
	?>
	
	<input type="date" name="dat" min="<?php echo $tda1?>" style="margin-top:-60px;"value='<?php if(isset($_POST['dat']))echo $_POST['dat']?>' ><br>
	<p style="margin:-10px 0px 0px 100px;">Choose a date on which offer will display</p><br>
	
	<input type="submit"name="offersub" style="background-color:navy;width:150px;color:white;margin-left:150px;"><br><br>
	
	<?php if(isset($err4)) echo "<p style='margin:-10px 0px 0px 130px;color:green'>".$err4; if(isset($err5)) echo "<p style='margin:-10px 0px 0px 130px;color:red;'>".$err5."</p>";?></p>
	
	</form></div>
    
  </div>
</div>
<button type="button" class="btn btn-info" style="color:black;margin:20px 0px 0px 700px" onclick="window.location='http://localhost/project/managerpagemenu.php'">Change Menu</button><hr>
 <button type="button" class="btn btn-info" style="color:black;margin:-70px 0px 0px 1210px" onclick="window.location='http://localhost/project/managerpageoffer.php'">Change Offer</button><hr>
 <h1 style="margin-top:-100px">Know Your Revenue</h1>
 <form method="post">
 <?php 
 $tda1=date("Y-m-d");
 ?>
 <input type="date" style="margin-top:-10px;margin-left:10px;" max="<?php echo $tda1?>"name="rdate" value="<?php if(isset($_POST['rdate'])) echo $_POST['rdate'];?>"required>
 <input type="submit" name="rchecki" value="Check Revenue" style="font-weight:bold;margin-top:-100px;margin-left:10px;width:150px;background-color:cyan">
 </form>
</html>