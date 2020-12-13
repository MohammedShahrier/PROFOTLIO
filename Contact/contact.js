function SubmitContactDetails (){


  var elements = document.getElementsByClassName("cfv");  //DOM element
    var formData = new FormData(); 
    for(var i=0; i<elements.length; i++)
    {
        formData.append(elements[i].name, elements[i].value);
    }
   
    var xmlHttp = new XMLHttpRequest(); //javascipt ajax object 
        xmlHttp.onreadystatechange = function()
        {
            if(xmlHttp.readyState == 4 && xmlHttp.status == 200)
            {
                alert(xmlHttp.responseText);
            }
        }
        xmlHttp.open("post", "server.php");  //data sending method is post
        xmlHttp.send(formData);   //sending data to server.php using ajax

        document.getElementById("contacform").reset();

        event.preventDefault();

}

// function myFunction1() {
//     var name = document.querySelector(".contact_form").elements[0].value;
//     var email = document.querySelector(".contact_form").elements[1].value;
//     var msg = document.querySelector(".contact_form").elements[2].value;
//     document.getElementById("demo").innerHTML = "DONE";
//     console.log(name,email,msg)
//   }

//   function myFunction() {
//     var name = document.querySelector(".contact_form").elements[0].value;
//     var email = document.querySelector(".contact_form").elements[1].value;
//     var msg = document.querySelector(".contact_form").elements[2].value;
//     firebase
//       .firestore()
//       .collection("Contact")
//       .add({
//         name,
//         email,
//         msg
//       })
//       .then(function () {
//         console.log("data sent")
//         document.getElementById("demo").innerHTML = name;
//       })
//       .catch(function () {
//         var error = error.message;
//         console.log(error);
//         document.getElementById("demo").innerHTML = "not done";

//       });
//   }