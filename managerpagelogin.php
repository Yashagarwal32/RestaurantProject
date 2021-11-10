<?php 
ob_start();
$err1=$err2=$err3="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if($_POST['username']!='yash') $err1="Invalid Owner Name";
	else if($_POST['password']!='yash1234') {$err2="Invalid Password";}
	else if($_POST['pin']!='702343') {$err3="You are not authorized Owner";}
	else{	
		header("refresh:1; url=managerpagehome.php");
		$err3="";
		$success="Login Success";
		
	}
	
		
}
ob_end_flush();
?>


<html>
<head>
<style>
input{
	margin-left:20px;
	border-radius:8px;
	height:30px;
	width:200px;
	
}
body
  {
	 background-image: url(manager.jpg);
    background-color: rgba(255,255,255,0.6);
    background-blend-mode: lighten;
  }
</style>
</head>
<body style="">
<center><h1>Manager Login</h1></center>
<div style="margin:50px 0px 0px 650px;border:2px solid black;border-radius:10px;width:240px;background-color: rgba(0,255,255,0.3);">

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<br>

<input type="text" name="username" placeholder="Name" value='<?php  if(isset ($_POST['username'])) echo $_POST['username']; ?>' required><br><br>
<?php if(isset ($err1)) echo "<center><p style='color:red;font-weight:bold;'>".$err1."</p></center>" ?>

<input type="password" name="password" placeholder="password"value='<?php  if(isset($_POST['password']))echo $_POST['password']; ?>' required><br><br>
<?php if(isset ($err2)) echo "<center><p style='color:red;font-weight:bold;'>".$err2."</p></center>" ?>

<input type="text" name="pin" placeholder="security Pin"value='<?php  if(isset ($_POST['pin']))echo $_POST['pin']; ?>' required><br><br>
<?php if(isset ($err3)) echo "<center><p style='color:red;font-weight:bold;'>".$err3."</p></center>" ?>
<input type="submit" value="Login" style="width:120px;background-color:navy;color:white;margin-left:60px;">
<center><?php if(isset ($success)) echo "<center><p style='color:green;font-weight:bold;'>".$success."</p></center>" ?></center>

</form>
</div>
<br>

<marquee scrollamount="20">
<img src="res1.jpg" style="width:400px;height:300px;margin-left:200px">
<img src="res2.jpg" style="width:400px;height:300px;margin-left:200px">
<img src="res3.jpg" style="width:400px;height:300px;margin-left:200px">
<img src="res4.jpg" style="width:400px;height:300px;margin-left:200px">
<img src="res5.jpg" style="width:400px;height:300px;margin-left:200px">


</marquee>
</body>
</html>


























