function validateForm() {
    var name = document.forms["signup"]["name"].value;
    var email = document.forms["signup"]["email"].value;
    var product = document.forms["signup"]["product"].value;
    var date = document.forms["signup"]["birthday"].value;
    var details = document.getElementById('signup--message');
    var approve = document.getElementById('checkbox').value;
    var option = ["Select product:","Caramel","Chocolate chip","Bluberry Muffin","Lemon Meringue"];
    var message = "";
    if (name == "" || email == "" || product =="" || date == "" ) {
        alert("Please fill all the fields!");
        return false;
    }else if(approve.checked ==1){
      var newline = "\r\n";
      message += newline;
      message += "We have will add the following information to our files regarding your interests:";
      message += newline;
      message += "Name: " + name;
      message += newline;
      message += "Email: " + email;
      message += newline;
      message += "Product Interest: " + option[product];
      message += newline;
      message += "Birthday: "+ date;
     alert(message);
     // window.open('specials.html','_self');
     // window.location.href = "specials.html";
    }
    
}
function validateContactForm(){
  var message = document.forms["ContactForm"]["customerMessage"].value;
  var name = document.forms["ContactForm"]["customerName"].value;
  var email = document.forms["ContactForm"]["customerEmail"].value;
  var response ="";
  if (message == "" || name == "" || email =="" ) {
    alert("Please fill all the fields!");
    return false;
  }else{
    var newline = "\r\n";
      response= "Email sent Successfully!";
      response += newline;
      response += "Thank you for contacting us. We will respond as soon as possible!";
    alert(response);
  }
}
