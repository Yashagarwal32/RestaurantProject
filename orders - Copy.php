<?php include("restaurant.php") ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  
  <style>
  .table{
	  margin-left:-180px;
	  margin-top:50px;
	  width:800px;
	  background-color:rbga(0,0,0,0);
	  color:yellow;
	  font-weight:bold;
  }
  
  
  .chng{
	 border:1px solid black;
	 border-radius:5px;
	 width:30px;
	 font-weight:bold;
	 background-color:black;
	 color:white;
  }
  
  button:disabled{
   background-color:red;
   color: black;
   cursor: no-drop;
}


.me{
	background-color:cyan;
	border-radius:30px;
	width:200px;
	height:50px;
	margin-left:40px;
	font-weight:bold;
	
}
  </style>
  
  <script>
  function fun1(id1){
	  var b=id1;
	  var a=document.getElementById(id1).value;
	  a--;
	  if(a<0){alert("Quantity cannot be less than 0.");
	  document.getElementById(id1).value=0;
		  }
		  else document.getElementById(id1).value=a;
	  
  }
  function fun2(id1){
	  
	  var b=id1;
	  var a=document.getElementById(id1).value;
	  a++;
	  document.getElementById(id1).value=a;
	  
  }
  
  function fun(){
	  var elems = document.getElementsByClassName("chng");
	for(var i = 0; i < elems.length; i++) {
    elems[i].disabled = true;
			}
	  var elements = document.getElementsByTagName("input");
		var count=0;
		var amount=0;
		demo.style.display='block';
		
		
		document.getElementById("demo").innerHTML="<b>S.No.  Product &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Price &nbsp;&nbsp;&nbsp;Quantity &nbsp;&nbsp;&nbsp; Total Price<b><br>"
	for (var i = 0; i < elements.length; i++) 
	{
    if (elements[i].value >0 ){
		
		count++;
		document.getElementById("demo").innerHTML+=count+"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        //document.getElementById("demo").innerHTML+=" "+element.id+" ";
		
		var y=elements[i].id;
		var x = document.getElementsByClassName(y);
		
		for (j = 0; j < x.length; j++) 
		{
		   var z=x[j].innerHTML;
		   document.getElementById("demo").innerHTML+=""+z+"  &nbsp;  ";
		}
			document.getElementById("demo").innerHTML+=" &nbsp;&nbsp;&nbsp;&nbsp;"+elements[i].value;
		
		
		
		var tp=0;
		var onef=x[1].innerHTML;
		var oneff=parseInt(onef.slice(3));
		var twof=elements[i].value;
		tp=oneff*twof;
		amount+=tp;
		document.getElementById("demo").innerHTML+="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"+tp;
		document.getElementById("demo").innerHTML+="<br><hr>";
	}
	
	}
	  
	  bt.disabled=true;
	  bt1.style.display='block';
	  evo.style.display='none';
	
  if(amount>500 && amount<1000){
	  demo2.style.display='block';
		
	  var dis=1000-amount;
	  document.getElementById("demo2").innerHTML="Add more food Rs."+dis+" to get 10% Instant Discount."; 
	  
	  //alert("Add more food Rs."+dis+" to get 10% Instant Discount.");
	  }
	    if(amount<1000) {document.getElementById("demo1").innerHTML="Total Amount : "+amount;
		//stari.style.display='block';
	  }
	  else{
		  document.getElementById("demo1").innerHTML="Total Amount : "+amount+"<br>";
		  document.getElementById("demo1").innerHTML+="<p style='font-size:20px'>Instant Discount          :     10 %<p><hr>";
		  document.getElementById("demo1").innerHTML+="<img src='smile.jpg' style='border-radius:50%;height:50px;width:50px;margin-top:-160px;margin-left:300px;'>";
		  
		  var fa=amount-0.1*(amount);
		  document.getElementById("demo1").innerHTML+="<p style='margin-top:-50px;'>Final Amount : "+fa+"</p>";
		  //stari.style.display='block';
	  
	  
	  }
	  
	  if(amount==0)
	  {
		  alert("Please Try Our Food once.");
		  demo.style.display='none';
		  //stari.style.display='none';
		  demo1.style.display='none';
		  bt1.style.display='none';
		  evo.style.display='block';
		  bt.disabled=false;
		  var elems = document.getElementsByClassName("chng");
		 for(var i = 0; i < elems.length; i++) {
				elems[i].disabled = false;
			}
	  }
	  
	  
	
  }
  
  
  function update()
  {
	  
	  
	 var elems = document.getElementsByClassName("chng");
	for(var i = 0; i < elems.length; i++) {
    elems[i].disabled = false;
			}
	  bt.disabled=false;
	  demo.style.display='none';
	  demo2.style.display='none';
	  //stari.style.display='none';
	  bt1.style.display='none';
	  evo.style.display='block';
	  document.getElementById("demo").innerHTML="";
	  document.getElementById("demo1").innerHTML="";
	  
  }
  
  
  function boy()
  {
	  bn.disabled=true;
	  bt.disabled=false;
	  tab.style.display='block';
	  
	  updb.style.display='block';
	  
	  
  }
  function bon()
  {
	  by.disabled=true;
	  bt.disabled=false;
	  document.getElementById("tabn").innerHTML="Please Book Table First If You want";
	  dy.disabled=false;
	  tabn.style.display='block';
	  
	  dn.disabled=false;
	  
	  updb.style.display='block';
	  
	  
  }
  
  function upd()
  {
	  by.disabled=false;
	  bn.disabled=false;
	  tab.style.display='none';
	  tabn.style.display='none';
	  
	  updb.style.display='none';
	  dy.disabled=true;
	  dn.disabled=true;
	  
  }
  
  
  
  
  
  </script>
</head>
<body style="background-color:crimson;">
<!-- <img src="star.jpg" id="stari"style="width:200px;height:200px;border-radius:50%;margin-left:1280px;align:right;display:none;">
  -->
​
<div class="container">
<br><br>
<button class="me" onclick="location.href='orders.php#ff'">Fast Food</button>
<button class="me" onclick="location.href='orders.php#tha'">Thali & Parantha</button>
<button class="me">South</button>
<button class="me">Desserts</button>
<div id="ff">

<h1 style="color:white;font-size:80px;width:1070px;margin-left:-170px;">We Offer Quality of Fast Food</h1>
  <table class="table  table-borderless" id="tt">
    <thead>
      <tr>
        <th>Product Name</th>
		<th>Image</th>
        <th>Price</th>
        <th>Quantity</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="t1">Veg. Burger</td>
		<td><img src="bur.jpg" style="height:70px;width:150px;"></td>
		
        <td class="t1">Rs.50</td>
        <td>
		<div class="btn-group"><button class="chng" onclick="fun1('t1')">-</button><input class="chng" type="number"  style="width:40px" id="t1"value="0"><button class="chng" onclick="fun2('t1')">+</button>
		</td>
      </tr>
      <tr>
        <td class="t2">Full 12" Pizza</td>
		<td><img src="bur.jpg" style="height:70px;width:150px;"></td>
		
        <td class="t2">Rs.180</td>
        <td>
		<button class="chng" onclick="fun1('t2')">-</button><input class="chng" type="number" style="width:40px" id="t2" value="0"><button class="chng" onclick="fun2('t2')">+</button>
		</td>
      </tr>
      <tr>
        <td class="t3">French Fries</td>
		<td><img src="bur.jpg" style="height:70px;width:150px;"></td>
		
        <td class="t3">Rs.50</td>
        <td>
		<button class="chng" onclick="fun1('t3')">-</button><input type="number"class="chng" style="width:40px" id="t3" value="0"><button class="chng" onclick="fun2('t3')">+</button></div>
		</td>
      </tr>
	  
	  <tr>
        <td class="t4">Maggi</td>
		<td><img src="bur.jpg" style="height:70px;width:150px;"></td>
		
        <td class="t4">Rs.30</td>
        <td>
		<button class="chng" onclick="fun1('t4')">-</button><input type="number"class="chng" style="width:40px" id="t4" value="0"><button class="chng" onclick="fun2('t4')">+</button></div>
		</td>
      </tr>
	  
	  <tr>
        <td class="t5">Sandwich</td>
		<td><img src="bur.jpg" style="height:70px;width:150px;"></td>
		
        <td class="t5">Rs.50</td>
        <td>
		<button class="chng" onclick="fun1('t5')">-</button><input type="number"class="chng" style="width:40px" id="t5" value="0"><button class="chng" onclick="fun2('t5')">+</button></div>
		</td>
      </tr>
	  
	  <tr>
        <td class="t6">Paasta</td>
		<td><img src="bur.jpg" style="height:70px;width:150px;"></td>
		
        <td class="t6">Rs.60</td>
        <td>
		<button class="chng" onclick="fun1('t6')">-</button><input type="number"class="chng" style="width:40px" id="t6" value="0"><button class="chng" onclick="fun2('t6')">+</button></div>
		</td>
      </tr>
	  
	  <tr>
        <td class="t7">Cheese Burger</td>
		<td><img src="bur.jpg" style="height:70px;width:150px;"></td>
		
        <td class="t7">Rs.70</td>
        <td>
		<button class="chng" onclick="fun1('t7')">-</button><input type="number"class="chng" style="width:40px" id="t7" value="0"><button class="chng" onclick="fun2('t7')">+</button></div>
		</td>
      </tr>
	  
	  <tr>
        <td class="t8">Cold Drink</td>
		<td><img src="bur.jpg" style="height:70px;width:150px;"></td>
		
        <td class="t8">Rs.40</td>
        <td>
		<button class="chng" onclick="fun1('t8')">-</button><input type="number"class="chng" style="width:40px" id="t8" value="0"><button class="chng" onclick="fun2('t8')">+</button></div>
		</td>
      </tr>
	  
	  
    </tbody>
  </table>
  </div>
  
  
  
  <div id="tha">

<h1 style="color:white;font-size:80px;width:1400px;margin-left:-170px;">We Offer Varieties of Thali & Paranthas</h1>
  <table class="table  table-borderless" id="tt">
    <thead>
      <tr>
        <th>Product Name</th>
		<th>Image</th>
        <th>Price</th>
        <th>Quantity</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="ab1">Normal Thali</td>
		<td><img src="bur.jpg" style="height:70px;width:150px;"></td>
		
        <td class="ab1">Rs.70</td>
        <td>
		<div class="btn-group"><button class="chng" onclick="fun1('ab1')">-</button><input class="chng" type="number"  style="width:40px" id="ab1"value="0"><button class="chng" onclick="fun2('ab1')">+</button>
		</td>
      </tr>
      <tr>
        <td class="ab2">Special Thali</td>
		<td><img src="bur.jpg" style="height:70px;width:150px;"></td>
		
        <td class="ab2">Rs.100</td>
        <td>
		<button class="chng" onclick="fun1('ab2')">-</button><input class="chng" type="number" style="width:40px" id="ab2" value="0"><button class="chng" onclick="fun2('ab2')">+</button>
		</td>
      </tr>
      <tr>
        <td class="ab3">Rajasthani Thali</td>
		<td><img src="bur.jpg" style="height:70px;width:150px;"></td>
		
        <td class="ab3">Rs.130</td>
        <td>
		<button class="chng" onclick="fun1('ab3')">-</button><input type="number"class="chng" style="width:40px" id="ab3" value="0"><button class="chng" onclick="fun2('ab3')">+</button></div>
		</td>
      </tr>
	  
	  <tr>
        <td class="ab4">Thali with lassi</td>
		<td><img src="bur.jpg" style="height:70px;width:150px;"></td>
		
        <td class="ab4">Rs.120</td>
        <td>
		<button class="chng" onclick="fun1('ab4')">-</button><input type="number"class="chng" style="width:40px" id="ab4" value="0"><button class="chng" onclick="fun2('ab4')">+</button></div>
		</td>
      </tr>
	  
	  <tr>
        <td class="ab5">Normal Parantha</td>
		<td><img src="bur.jpg" style="height:70px;width:150px;"></td>
		
        <td class="ab5">Rs.20</td>
        <td>
		<button class="chng" onclick="fun1('ab5')">-</button><input type="number"class="chng" style="width:40px" id="ab5" value="0"><button class="chng" onclick="fun2('ab5')">+</button></div>
		</td>
      </tr>
	  
	  <tr>
        <td class="ab6">Aaloo Parantha</td>
		<td><img src="bur.jpg" style="height:70px;width:150px;"></td>
		
        <td class="ab6">Rs.30</td>
        <td>
		<button class="chng" onclick="fun1('ab6')">-</button><input type="number"class="chng" style="width:40px" id="ab6" value="0"><button class="chng" onclick="fun2('ab6')">+</button></div>
		</td>
      </tr>
	  
	  <tr>
        <td class="ab7">Onion Paranth</td>
		<td><img src="bur.jpg" style="height:70px;width:150px;"></td>
		
        <td class="ab7">Rs.25</td>
        <td>
		<button class="chng" onclick="fun1('ab7')">-</button><input type="number"class="chng" style="width:40px" id="ab7" value="0"><button class="chng" onclick="fun2('ab7')">+</button></div>
		</td>
      </tr>
	  
	  <tr>
        <td class="ab8">Gobi Parantha</td>
		<td><img src="bur.jpg" style="height:70px;width:150px;"></td>
		
        <td class="ab8">Rs.30</td>
        <td>
		<button class="chng" onclick="fun1('ab8')">-</button><input type="number"class="chng" style="width:40px" id="ab8" value="0"><button class="chng" onclick="fun2('ab8')">+</button></div>
		</td>
      </tr>
	  
	  <tr>
        <td class="ab9">Mix Parantha</td>
		<td><img src="bur.jpg" style="height:70px;width:150px;"></td>
		
        <td class="ab9">Rs.30</td>
        <td>
		<button class="chng" onclick="fun1('ab9')">-</button><input type="number"class="chng" style="width:40px" id="ab9" value="0"><button class="chng" onclick="fun2('ab9')">+</button></div>
		</td>
      </tr>
	  
	  <tr>
        <td class="ab10">Paneer Parantha</td>
		<td><img src="bur.jpg" style="height:70px;width:150px;"></td>
		
        <td class="ab10">Rs.40</td>
        <td>
		<button class="chng" onclick="fun1('ab10')">-</button><input type="number"class="chng" style="width:40px" id="ab10" value="0"><button class="chng" onclick="fun2('ab10')">+</button></div>
		</td>
      </tr>
	  
	  
	  
	  
	  
	  
	  
	  
	  
    </tbody>
  </table>
  </div>

  
  
  
  <h4 style="color:white;margin-left:-180px;margin-bottom:-25px">Have You Already Booked Table </h4>
  <button id="by" style="height:50px;width:100px;background-color:cyan;margin-left:90px;font-weight:bold;" onclick="boy()">Yes</button>
  <button id="bn" style="height:50px;width:100px;background-color:cyan;margin-left:10px;font-weight:bold;" onclick="bon()">No</button>
  <input  id="tab" type="text"  style= " margin-left:350px;margin-top:-30px;display:none;"placeholder= "Enter Table No."required>
  <p id="tabn" style= " margin-left:330px;margin-top:-30px;color:white;font-size:16px;" ></p>
  
  <button id="updb"style="margin-left:165px;margin-top:50px;display:none;" onclick="upd()">Want to Change</button>
  
  <br><br>
  <h4 style="color:white;margin-left:-180px;margin-bottom:-25px">Want Home Delivery of Food  </h4>
  <button disabled id="dy" style="height:50px;width:100px;background-color:cyan;margin-left:90px;font-weight:bold;" onclick="doy()">Yes</button>
  <button  disabled id="dn" style="height:50px;width:100px;background-color:cyan;margin-left:10px;font-weight:bold;" onclick="don()">No</button>
  <br><br>
  
  <button id="bt" disabled style="height:70px;width:150px;background-color:cyan;margin-left:10px;font-weight:bold;" onclick="fun()">Order Now</button>
  
  
  <p id="demo" style="margin-top:-500px;margin-left:700px;background-color:black;color:white;width:500px;font-size:20px;border-radius:5px;border:2px solid yellow;display:none;"></p>
  <h2 id="demo1" style="margin-top:0px;margin-left:700px;background-color:black;color:white;width:400px;font-size:30px;border-radius:10px"></h2>
  
  <button id="bt1" onclick="update()" style="margin-top:10px;margin-left:850px;display:none;background-color:cyan;width:100px;font-size:20px;border-radius:10px">Update</button>
  
  <p id="demo2" style="margin-left:700px;margin-top:10px;color:yellow;font-size:14px;"></p>

  <div id="evo" style="color:navy;background-color:cyan;height:250px;width:200px;border-radius:10px;border:1px solid red;margin-top:-500px;margin-left:1000px" > <center><h4><b>Evergreen Offer</b></h4>
<hr> <h2>10% Off on Order of 1000 or more </h2><hr>No Code Required</center></div>


</div>
​
</body>
</html>
​
