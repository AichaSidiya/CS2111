window.onload = function(){
	
	var grandtotal = 0;
	var q1 = document.getElementById("quan1");
	var q2 = document.getElementById("quan2");
	var fullName = document.getElementById("fullname");
	var phone = document.getElementById("phone");
	var mainForm = document.getElementById("mainForm");
	
	// Question 2 part 1
	q1.onchange = function(){
		grandtotal = q1.value * 216.5;
		document.getElementById("tot1").innerHTML = grandtotal+ " SAR";
		//Calculate here the price of gold grams
		
	}
	
	q2.onchange = function(){
		grandtotal = q2.value * 2.72 ;
		document.getElementById("tot2").innerHTML = grandtotal +" SAR";
		//Calculate here the price of silver grams
		
	}
	fullName.addEventListener('keyup', function(){
		fullName.style.backgroundColor = "#FFFFFF";
		if(fullName.value == ""){
			fullName.style.backgroundColor = "#FF0000";
		  }
	  });
	  phone.addEventListener('keyup', function(){
		phone.style.backgroundColor = "#FFFFFF";
		if(phone.value == ""){
			phone.style.backgroundColor = "#FF0000";
		  }
	  });
	// Question 2 part 2
	mainForm.onsubmit = function(e){
		if(fullName.value == ""){
			fullName.style.backgroundColor = "#FF0000";
			alert("Please fill in your name");
        	e.preventDefault();
		}
		if(phone.value == ""){
			phone.style.backgroundColor = "#FF0000";
			alert("Please fill in your phone");
        	e.preventDefault();
		}
		// Check here the form validity 
	

    }
	
}