<?php include("restaurant.php") ?>
<html>
<head>
<style>
table,tr{
	border:1px solid black;

}
td{
	font-size:40px;
	font-weight:bold;
}
button{
	color:red;
	background-color:pink;
	height:50px;
	width:100px;
}
</style>
<script>
function clicka(a)
{
	alert("Thanks for Booking !"+"    Booked Table is : "+a);
}
</script>
</head>

<body>
<center><h1>Book Best Table In Our Restaurant From Home</h1></center>
<table width="100%">
  <tr>
    <td>A1 <br><button onclick="clicka('A1')">Book Now</button></td>
    <td>A2<br><button onclick="clicka('A2')">Book Now</button></td>
    <td>A3<br><button onclick="clicka('A3')">Book Now</button></td>
	<td>A4<br><button onclick="clicka('A4')">Book Now</button></td>
	
  </tr>
  <tr>
    <td>B1<br><button onclick="clicka('B1')">Book Now</button></td>
    <td>B2<br><button onclick="clicka('B2')">Book Now</button></td>
    <td>B3<br><button onclick="clicka('B3')" >Book Now</button></td>
	<td>B4<br><button onclick="clicka('B4')">Book Now</button></td>
	
  </tr>
  
</table
</body>
</html>