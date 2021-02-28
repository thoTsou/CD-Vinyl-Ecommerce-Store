



function GoToOrderDetails(){
	document.getElementById("up").style.visibility="visible";
	
}




function add(check,name,price,quantity){
	
	
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
} 


