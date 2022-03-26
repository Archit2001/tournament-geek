
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="valid.css">	
	<title></title>
</head>
<body>
	<script >
		function validate(){
  var name = document.getElementById("name").value;
  
  var phone = document.getElementById("phone").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var conpassword = document.getElementById("conpassword").value;
  var error_password = document.getElementById("error_password");
  
  error_password.style.padding = "10px";
  
  var text;
  if(name.length < 5){
    text = "Please Enter valid Name";
    error_password.innerHTML = text;
    return false;
  }
 
  if(isNaN(phone) || phone.length != 10){
    text = "Please Enter valid Phone Number";
    error_password.innerHTML = text;
    return false;
  }
  if(email.indexOf("@") == -1 || email.length < 6){
    text = "Please Enter valid Email";
    error_password.innerHTML = text;
    return false;
  }
  if(password.length <= 6){
    text = "Please Enter More Than 6 Characters";
    error_password.innerHTML = text;
    return false;
  }
  if(conpassword !=password){
    text = "No match";
    error_password.innerHTML = text;
    return false;
  }
  alert("Form Submitted Successfully!");
  return true;
}
	</script>
	
<div class="wrapper">
  <h2>Form validation</h2>
  <div id="error_password">
     
  </div>
  <form action="" id="myform" onsubmit = "return validate();">
    <div class="input_field">
        <input type="text" placeholder="Name" id="name">
    </div>
   
    <div class="input_field">
        <input type="text" placeholder="Phone" id="phone">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Email" id="email">
    </div>
    <div class="input_field">
        <input type="password"  placeholder="password " id="password">
    </div>
    <div class="input_field">
        <input type="password"  placeholder="confirm-password " id="conpassword" >
    </div>
    <div class="btn">
        <input type="submit">
    </div>
  </form>
</div>
</body>
</html>	
	