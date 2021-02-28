timesClicked=0;

function display(div)
{
	
	
	timesClicked++;

		if (timesClicked%2 != 0){
			document.getElementById(div).style.height = "10%";
			document.getElementById(div).style.visibility = "visible";
		}else{
				document.getElementById(div).style.height = "0%";
			document.getElementById(div).style.visibility = "hidden";
		}
		
		
}