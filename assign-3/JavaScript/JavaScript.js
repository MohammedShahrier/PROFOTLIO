
      document.getElementById('alert').value;
    	alert('Welcome to the simple JavaScript Calculator');
    	
  var person = prompt("Please enter your name", "");
 alert('Welcome  '+person);
add();
var proceed;
  proceed = prompt(" Do you want to add two numbers again (yes/no)", "");




while (proceed == 'yes' || proceed == 'no') {
  
    if (proceed == 'yes') {
       add();
	   proceed = prompt(" Do you want to add two numbers again (yes/no)", "");
    }
   else if(proceed == 'no'){
	   alert("Thank you for using the program.");
	   break;
	  
   }
   
}



function add() {

	 var number1 = prompt("Please enter your first number", "");
  var number2 = prompt("Please enter your second number", "");
	var result = parseInt(number1) + parseInt(number2) ;
	alert("The sum of your two numbers is "    +  result);
	
if (result > 10) {
	alert("That is a big number.");
}else if (result <=10) {
	alert("That is a small number.");
}
}
