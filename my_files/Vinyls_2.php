

<?php
session_start();
?>



<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Vinyls_2.css">
<script src="Vinyls_2.js"> </script>

<style>

.cart{
	height:0%;
	visibility:hidden;
}

#down{
	margin-left:0%;
}

#inputSpans8,#inputSpans9,#inputSpans10,#inputSpans11,#inputSpans12,#inputSpans13{
	visibility:hidden;
	border-radius:12px;
	background-color:red;
	color:white;
}

#sp1{
	margin-left:4.5%;
}

#cardDetails{
	background-color:#4CAF50;
	width:50%;
	padding:1%;
	border-radius:12px;
	margin-left:23%;
	visibility:hidden;
}

#cardDet{
	border-radius:12px;
	background-color:#f44336;
	color:white;
	font-size:large;
	padding:0.5%;
}

#cardDetButton{
background-color:#f44336;
border-color:#f44336;	
}

#cardDetButton:hover{
	background-color: #4CAF50;
	border-color:#4CAF50;
}

#hiddenID{
	visibility:hidden;
}

#down{
	visibility:visible;
}

#valid{
	background-color:#4CAF50;
	border-radius:12px;
	padding:0.5%;
	margin-left:0.5%;
	color:white;
	visibility:hidden;
}


</style>

<script>

var timesClicked = 0;

function openClose()
{
	timesClicked++;

		if (timesClicked%2 != 0){
			var cart = document.getElementById("cart");
			
			cart.style.visibility = 'visible';
			cart.style.height = '105%';
		}else{
			var cart = document.getElementById("cart");
			
			cart.style.visibility = 'hidden';
			cart.style.height = '0%';	
		}
}

function express()
{
	var totalPrice = document.getElementById("cartTotal").innerHTML;
	totalPrice = parseFloat(totalPrice);
	
	var expressDel = document.getElementById("expressDel");
	
	var cartShip = document.getElementById("cartShip").innerHTML;
	cartShip = parseFloat(cartShip);
	
	
	if(expressDel.checked){
		document.getElementById("cartTotal").innerHTML = totalPrice + 6 ;
		document.getElementById("cartShip").innerHTML = 6 ;
	}
	
	expressDel.disabled = true;
	normalDel.disabled=true;
	document.getElementById("orderComplete").style.visibility='visible';
	
	var input1 = document.createElement("input");

	input1.setAttribute("type", "hidden");

	input1.setAttribute("name", "express");

	input1.setAttribute("value", "yes");

	//append to form element that you want .
	document.getElementById("finishForm").appendChild(input1);

	var input2 = document.createElement("input");

	input2.setAttribute("type", "hidden");

	input2.setAttribute("name", "express");

	input2.setAttribute("value", "yes");

	//append to form element that you want .
	document.getElementById("finishForm2").appendChild(input2);
}

function normal()
{
	var normalDel = document.getElementById("normalDel");
	var expressDel = document.getElementById("expressDel");
	
	if(normalDel.checked)
	{
	var totalPrice = document.getElementById("cartTotal").innerHTML;
	totalPrice = parseFloat(totalPrice);
	document.getElementById("cartTotal").innerHTML = totalPrice + 2 ;
	
	var cartShip = document.getElementById("cartShip").innerHTML;
	cartShip = parseFloat(cartShip);
	document.getElementById("cartShip").innerHTML = 2 ;
	
	normalDel.disabled=true;
	expressDel.disabled = true;
	}
	
	var totalPrice = document.getElementById("cartTotal").innerHTML;
	totalPrice = parseFloat(totalPrice);
	
	if(totalPrice >= 30 && !expressDel.checked && normalDel.checked)
	{
		var totalPrice = document.getElementById("cartTotal").innerHTML;
	totalPrice = parseFloat(totalPrice);
	document.getElementById("cartTotal").innerHTML = totalPrice - 2 ;
	
	var cartShip = document.getElementById("cartShip").innerHTML;
	cartShip = parseFloat(cartShip);
	document.getElementById("cartShip").innerHTML = "Free of charge" ;
		
	}
	
	document.getElementById("orderComplete").style.visibility='visible';
}

function cart()
{
	
	document.getElementById("inputSpans1").style.visibility = 'hidden';
	document.getElementById("inputSpans2").style.visibility = 'hidden';
	document.getElementById("inputSpans3").style.visibility = 'hidden';
	document.getElementById("inputSpans4").style.visibility = 'hidden';
	document.getElementById("inputSpans5").style.visibility = 'hidden';
	document.getElementById("inputSpans6").style.visibility = 'hidden';
	document.getElementById("inputSpans7").style.visibility = 'hidden';
	document.getElementById("inputSpans8").style.visibility = 'hidden';
	document.getElementById("inputSpans9").style.visibility = 'hidden';
	document.getElementById("inputSpans10").style.visibility = 'hidden';
	document.getElementById("valid").style.visibility = "hidden";
	
	
	var address = document.getElementById("address").value;
	var addressNum = document.getElementById("addressNum").value;
	var city = document.getElementById("city").value;
	var region = document.getElementById("region").value;
	var country = document.getElementById("country").value;
	var mail = document.getElementById("postCode").value;
	
	var name = document.getElementById("name").value;
	var surname = document.getElementById("surname").value;
	var phoneNum = document.getElementById("phoneNum").value;
	
	if ( !name )
	{
			document.getElementById("inputSpans8").style.visibility = 'visible';
			return false;
	}
	
	if ( !surname )
	{
			document.getElementById("inputSpans9").style.visibility = 'visible';
			return false;
	}
	
	if ( !phoneNum )
	{
			document.getElementById("inputSpans10").style.visibility = 'visible';
			return false;
	}
	
	
	if ( !isNaN(address) )
	{
			document.getElementById("inputSpans1").style.visibility = 'visible';
			return false;
	}
	
	if ( !isNaN(city))
	{
			document.getElementById("inputSpans2").style.visibility = 'visible';
			return false;
	}
	
	if ( !isNaN(region))
	{
			document.getElementById("inputSpans3").style.visibility = 'visible';
			return false;
	}
	
	if (!isNaN(country))
	{
			document.getElementById("inputSpans4").style.visibility = 'visible';
			return false;
	}
	
	
	
	if( (mail.toString().length!=5) || (isNaN(mail)) )
	{
		document.getElementById("inputSpans5").style.visibility = 'visible';
		return false;
	}
	
	if( addressNum > 999 || !addressNum )
	{
		document.getElementById("inputSpans6").style.visibility = 'visible';
		return false;
	}
	
	if ( (document.getElementById("expressDel").checked == false) && (document.getElementById("normalDel").checked == false)  )
	{
		document.getElementById("inputSpans7").style.visibility = 'visible';
		return false;
	}
	
	
	
	var expressDel = document.getElementById("expressDel");
	expressDel.disabled=true;
	
	var normalDel = document.getElementById("normalDel");
	normalDel.disabled=true;
	
	
	document.getElementById("valid").style.visibility = "visible";
	document.getElementById("inputSpans7").style.visibility = "hidden";
	document.getElementById("orderComplete").style.visibility = "hidden";
	
	
}

function finish()
{
	
	var payOnReceipt = document.getElementById("payOnReceipt");
	
	if(payOnReceipt.checked)
	{
		window.alert("Thank you for your purchase.\nCome back Soon ;-)");
		
	}else{
	
	var card = document.getElementById("creditCard");
	
	var div = document.getElementById("cardDetails");
	
	if(card.checked)
	{
		div.style.visibility = 'visible';
	}
	
		return false;
		
	}
}

function checkCard()
{
	document.getElementById("inputSpans11").style.visibility = 'hidden';
	document.getElementById("inputSpans12").style.visibility = 'hidden';
	document.getElementById("inputSpans13").style.visibility = 'hidden';
	
	var cardCode = document.getElementById("cardCode").value;
	
	if( cardCode.length!=16  || isNaN(cardCode)==true  )
	{
		document.getElementById("inputSpans11").style.visibility = 'visible';
		return false;
	}
	
	if(!isNaN(document.getElementById("cardHolder").value))
	{
		document.getElementById("inputSpans12").style.visibility = 'visible';
		return false;
	}
	
	var date = document.getElementById("cardExpDate").value;
	if( !date )
	{
		document.getElementById("inputSpans13").style.visibility = 'visible';
		return false;
	}
	

	window.alert("Thank you .Come back Soon ;-)");
	
		
}

function disableProducts()
{
	var answer = window.confirm("Are you done with selecting products ? ");
	
	if(answer == true){
	var Product1 = document.getElementById("check1");
	var Product2 = document.getElementById("check2");
	var Product3 = document.getElementById("check3");
	var Product4 = document.getElementById("check4");
	var Product5 = document.getElementById("check5");
	var Product6 = document.getElementById("check6");
	
	var list = [Product1,Product2,Product3,Product4,Product5,Product6];
	
	for(var i=0 ; i<6 ; i++)
	{
		list[i].disabled = true;
	}
	
	}else{
		return false;
	}
	
}

function review()
{

document.getElementById("up").style.visibility="visible";
window.location.hash = "up";

	var name = document.getElementById("name");
	name.disabled=false;
	
	var surname = document.getElementById("surname");
	surname.disabled=false;
	
	var address = document.getElementById("address");
	address.disabled=false;
	
	var addressNum = document.getElementById("addressNum");
	addressNum.disabled=false;
	
	var city = document.getElementById("city");
	city.disabled=false;
	
	var region = document.getElementById("region");
	region.disabled=false;
	
	var country = document.getElementById("country");
	country.disabled=false;
	
	var phoneNum = document.getElementById("phoneNum");
	phoneNum.disabled=false;
	
	var postCode = document.getElementById("postCode");
	postCode.disabled=false;
	
	var b1 = document.getElementById("b1");
	b1.disabled=false;
}

function add(ID,check,name,price,quantity){
	
	var quan = document.getElementById(quantity).value;
	

	quan = parseFloat(quan);
	
	if(isNaN(quan))
	{
		quan = 0;
	}
	
	var ch = document.getElementById(check);
	
	var node = document.createElement("div");
	
	var name = document.createTextNode("Product: "+name);
	node.appendChild(name);
	
	var br = document.createElement("br");
	node.appendChild(br);
	
	var pric = document.createTextNode("Price: "+price);
	node.appendChild(pric);
	
	var br = document.createElement("br");
	node.appendChild(br);
	
	var quantity = document.createTextNode("Quantity: "+quan);
	node.appendChild(quantity);
	
	var br = document.createElement("br");
	node.appendChild(br);
	
	var br = document.createElement("br");
	node.appendChild(br);
	
	document.getElementById("inCart").appendChild(node);
	
	if(!isNaN(quan))
	{
	var totalPrice = document.getElementById("cartTotal").innerHTML;
	totalPrice = parseFloat(totalPrice);
	document.getElementById("cartTotal").innerHTML = totalPrice + (price*quan);
	}
	
	ch.disabled = true;
	
	
	var input1 = document.createElement("input");

	input1.setAttribute("type", "hidden");

	input1.setAttribute("name", "ID"+ID);

	input1.setAttribute("value", ID);
	
	var input2 = document.createElement("input");

	input2.setAttribute("type", "hidden");

	input2.setAttribute("name", "quantity"+ID);

	input2.setAttribute("value", quan );

	//append to form element that you want .
	document.getElementById("finishForm").appendChild(input1);
	document.getElementById("finishForm").appendChild(input2);
	
	var input1 = document.createElement("input");

	input1.setAttribute("type", "hidden");

	input1.setAttribute("name", "ID"+ID);

	input1.setAttribute("value", ID);
	
	var input2 = document.createElement("input");

	input2.setAttribute("type", "hidden");

	input2.setAttribute("name", "quantity"+ID);

	input2.setAttribute("value", quan );
	
	document.getElementById("finishForm2").appendChild(input1);
	document.getElementById("finishForm2").appendChild(input2);
	
	
} 


function appendDetails(name,surname,address,addressNum,city,region,country,phoneNum,postCode)
{
	
	var names= ["name","surname","address","addressNum","city","region","country","phoneNum","postCode"];
	
	for(var i =0 ; i<9 ; i++)
	{
	var input1 = document.createElement("input");

	input1.setAttribute("type", "hidden");

	input1.setAttribute("name", names[i] );

	input1.setAttribute("value", document.getElementById(names[i]).value );

//append to form element that you want .
	document.getElementById("finishForm").appendChild(input1);
	}
	
	for(var j =0 ; j<9 ; j++)
	{
	var input2 = document.createElement("input");

	input2.setAttribute("type", "hidden");

	input2.setAttribute("name", names[j] );

	input2.setAttribute("value", document.getElementById(names[j]).value );

//append to form element that you want .
	document.getElementById("finishForm2").appendChild(input2);
	}
	
	document.getElementById("inputSpans1").style.visibility = 'hidden';
	document.getElementById("inputSpans2").style.visibility = 'hidden';
	document.getElementById("inputSpans3").style.visibility = 'hidden';
	document.getElementById("inputSpans4").style.visibility = 'hidden';
	document.getElementById("inputSpans5").style.visibility = 'hidden';
	document.getElementById("inputSpans6").style.visibility = 'hidden';
	document.getElementById("inputSpans7").style.visibility = 'hidden';
	document.getElementById("inputSpans8").style.visibility = 'hidden';
	document.getElementById("inputSpans9").style.visibility = 'hidden';
	document.getElementById("inputSpans10").style.visibility = 'hidden';
	document.getElementById("orderComplete").style.visibility = 'hidden';
	document.getElementById("valid").style.visibility = 'hidden';
	document.getElementById("up").style.visibility="hidden";
	
	
}


</script>

<script>
function random()
{
	var count1 = Math.floor(Math.random()*6)+1;
	var checkDuplicateName = [] ;
	
	for(var i=0 ; i<count1 ; i++)
	{
		
		var count2 = Math.floor(Math.random()*6)+1;
		count2=parseInt(count2);
		
		var name = document.getElementById("productName"+count2).innerHTML;	
		
		if( checkDuplicateName.includes(name) == true )
		{
				continue;
		}
		checkDuplicateName.push(name);
		
		
		var  cartName = document.createTextNode("Name : "+name);
		document.getElementById("inCart").appendChild(cartName);
		
		var br = document.createElement("br");
		document.getElementById("inCart").appendChild(br);
		
		var price = document.getElementById("price"+count2).innerHTML;
		price=parseFloat(price);
		var  cartPrice = document.createTextNode("Price : "+price+"$");
		document.getElementById("inCart").appendChild(cartPrice);
		
		var br = document.createElement("br");
		document.getElementById("inCart").appendChild(br);
		
		var quantity = Math.floor(Math.random()*5)+1;
		document.getElementById("quantity"+count2).value = quantity;
		document.getElementById("quantity"+count2).disabled = true;
		var  cartQuantity = document.createTextNode("Quantity : "+quantity);
		document.getElementById("inCart").appendChild(cartQuantity);
		
		var br = document.createElement("br");
		document.getElementById("inCart").appendChild(br);
		
		var br = document.createElement("br");
		document.getElementById("inCart").appendChild(br);
		
		var totalPrice = document.getElementById("cartTotal").innerHTML;
		totalPrice = parseFloat(totalPrice);
		document.getElementById("cartTotal").innerHTML = totalPrice + (price*quantity);
		
			document.getElementById("check"+count2).checked = true;
			document.getElementById("check"+count2).disabled = true;
			
			var input1 = document.createElement("input");

			input1.setAttribute("type", "hidden");

			input1.setAttribute("name", "ID"+count2);

			input1.setAttribute("value", count2);
			
			var input2 = document.createElement("input");

			input2.setAttribute("type", "hidden");

			input2.setAttribute("name", "quantity"+count2);

			input2.setAttribute("value", quantity );
			
			document.getElementById("finishForm2").appendChild(input1);
			document.getElementById("finishForm2").appendChild(input2);
			
			
			
	}
}

function makeQuestion()
{
	var answer = window.confirm("Are you sure about logging out ?");
	
	if(answer==true)
	{
		return true;
	}
	
	return false;
}

function release(checkBoxId)
{
	document.getElementById(checkBoxId).disabled=false;
}

</script>


</head>


<body >
	
	<form method="post" action="CategoriesNew.php" class="logOut">
			<button type="submit" onclick="return makeQuestion()"> Log Out </button>
		</form>
		
		
		
		<div class="box">
			
			<?php
			
			
		
			include "config.php";
			
			$username = $_SESSION["username"];
			$categoryID = $_POST['categoryID'];
			
			$sql = "SELECT ID,Name,Price,image FROM products WHERE Category_ID='$categoryID'";
			$result = $conn->query($sql);
			
			
			if($result->num_rows == 0){  
			echo "0 products found";
		}else  
		{
			$count=1;
			
			while($row = $result -> fetch_assoc()){
			
			
			echo "<div class='product' >
					
					<span id='hiddenID'>".$row["ID"]."</span><br>
					<span name='productName' id='productName".$count."'>".$row["Name"]."</span><br>
					 <img class='productImg' src='".$row["image"]."' /><br>
					 Price:<span name='price' id='price".$count."' >".$row["Price"]."</span>$<br>
					 <input type='number' onclick=".'release("check'.$count.'")'." name='quantity' id='quantity".$count."' min='1' max='5'  /><br><br>
					 Add To Cart <br><input type='checkbox' disabled='disabled' id='check".$count."' onclick=".'add("'.$row["ID"].'","check'.$count.'","'.$row["Name"].'","24.99","quantity'.$count.'")'." /><br>
					</div>";
					
				$count++;	
			}
		}
		
		$conn->close();
		
		?>
		
	
		</div>
		
		<div class="productsButtons">
		<button onclick="openClose()">Check Your Cart</button> <br><br>
		YOU CAN TRY <button onclick="random()">Random Select Products</button>
		</div>
		
		<div id="cart" class="cart">
			<h3 >Shopping Cart</h3>
			<img src="cart.png" id="cartImg" />
				Total Price: <span id="cartTotal"> 0 </span>$<br>
				Shipping Price:<span id="cartShip"> 0 </span>$<br>
				<a href="#up" onclick="GoToOrderDetails()" ><button onclick="return disableProducts()" >Go To Order Details</button></a> <br>
				<div class="inCart" id="inCart">
				
				</div>
		</div>
		
		<div class="background">
		<div id="up" class="orderDetails">
			<br>
			<br>
			  <span id="orderHeader">Order Details</span><br><br>
				
					Name: <input type="text" name="name" id="name" required><span id="inputSpans8">!!Type your name!!</span><span id="sp1">Surname: <input type="text" name="password" id="surname" required></span><span id="inputSpans9">!!Type your surname!!</span><br><br>
					Address: <input type="text" name="address" id="address" required><span id="inputSpans1">!!Invalid Address Name!!</span>Address number: <input type="number" name="number" id="addressNum" min="1" max="1000" required><span id="inputSpans6">!!Invalid Address Number!!</span><br><br>
					City: <input type="text" name="city" id="city" required><span id="inputSpans2">!!Invalid City Name!!</span> <span id="sp4"> Region: <input type="country" name="region" id="region" required><span id="inputSpans3">!!Invalid Region Name!!</span> </span><br><br>
					Country :<input type="text" name="Country" id="country" required><span id="inputSpans4">!!Invalid Country Name!!</span><span id="phone"> Phone Number :<input type="text" name="phoneNum" id="phoneNum" required><span id="inputSpans10">!!Type your phone number!!</span></span><br><br>
					Post Code <input type="number" name="mailCode" id="postCode" min="1" max="99999" required><span id="inputSpans5">!!Invalid Post Code!!</span><br><br>
					<br>Normal Or Express Delivery ? <br><br>
					•Normal delivery for orders below 30$ , adds an extra 2$ to your order price<br><br>
					•Normal delivery for orders above 30$ , does not charge for shippment <br><br>
					•Express delivery for orders of any price , adds an extra 6$ to your order price<br><br>
					<span id="inputSpans7">Please choose delivery type for your order</span><br><br>
					<input type="checkbox" id="expressDel" onclick="express()" /> Express Delivery<br><br>
					<input type="checkbox" id="normalDel" onclick="normal()" /> Normal Delivery<br><br>
					<span id="orderComplete">^^Check your cart to see full price for your order^^</span><br>
					Check your form for mistakes before submmiting it <button onclick="return cart()" >Validate</button> <span id="valid">Thank you . Please proceed</span>	
				<br>
				<a href="#down" onclick="appendDetails(name,password,address,addressNum,city,region,country,phoneNum,postCode)"><button type="button" id="b1" >Go To Payment</button></a>
					
			<br><br><br><br>
		</div>
		
		<div id="down" class="paymentMethod">
		<form method="post" action="storeOrder.php" id="finishForm">
			<br>
			<span id="paymentHeader">Payment method</span><br><br>
			  <input type="radio" name="method" id="creditCard" />Credit Card<br>
			  <input type="radio" name="method" id="payOnReceipt" />Payment on receipt<br><br> 
			  <button type="submit" onclick="return finish()">Submit</button><br>
		</form>
		<br>
		</div>
		
		
		<div class="cardDetails" id="cardDetails">
		<form method="post" action="storeOrder.php" id="finishForm2" >
			<span id="cardDet">Card Details</span><br><br>
			Select Card: <select>
						<option value="Visa">Visa</option>
						<option value="MasteCard">MasterCard</option>
					</select>
			<br><br>
			Card code : <input type="text" id="cardCode" required> <span id="inputSpans11">!!Invalid Card Code!!</span><br><br>
			Card Holder's name : <input type="text" id="cardHolder" required> <span id="inputSpans12">!!Invalid Card Holder Name!!</span> <br><br>
			Expire Date : <input type="date" id="cardExpDate" required> <span id="inputSpans13">!!Please type expiration date!!</span> <br><br>
			<button id="cardDetButton" onclick="return checkCard()" >Complete Order</button>
		</form>
		</div>
		
		</div>
		
		<div class="footer">
			<a href="HomePage.html" target="_self">HOME PAGE</a><br>
		   &copy; 2020 TSOUFIS THODORIS All rights reserved.
		   </div>
		
</body>


</html>