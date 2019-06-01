<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
color: white;
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: #474e5d;
    padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {

    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
body{
background-image: url("women.jpg");
background-repeat:no-repeat;
background-size:1300px 650px;
COLOR:PEACH;
}
</style>
</style>
<body>
<form action="details.php" method="POST">
</div>
<div id="content">
	
			<p style="text-align:center;">
				Women Empowerment
			</p>
</div>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
<label for="name"><b> Name</b></label>
	<input type="text" placeholder="enter the name" name="name" required>
<label for="username"><b>User name</b></lable>
	<input type="text" placeholder="Enter username" name="username" required>
<label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

 <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
<label  for="age"><b>Age</b></label><BR>
      <input type="age" class="container"  placeholder="Enter Age" name="age" required><BR><BR>
<label for="qual"><b>Qualification</b></label>
<select name="qual" class="container"><BR><BR>
  <option value="volvo">10th</option>
  <option value="saab">12th</option>
  <option value="fiat">UG</option>
  <option value="audi">PG</option>
</select>
<label for="per"><b>Percentage</b></label>
      <input type="per" class="container" placeholder="Enter Percentage" name="per" required><BR><BR>
<label for="caste"><b>Caste</b></label>
      <input type="caste" class="container" placeholder="Enter Caste" name="caste" required><BR><BR>
<label for="income"><b>Income</b></label>
      <input type="income" class="container" placeholder="Enter Income" name="income" required><BR><BR>
<label for="disability"><b>Any Disability</b></label>
 <input type="radio" name="dis" value="no" checked> No
  <input type="radio" name="dis" value="yes"> Yes



<label for="phonenumber"><b>Phone number</b></label>
	<input type="text" placeholder="Enter phone number" name="phonenumber" pattern='^[0-9]{10}*' required>
	      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
<p>If account exists the you can login</p>
<a href='login_dp.php'>login if already registered</a>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
