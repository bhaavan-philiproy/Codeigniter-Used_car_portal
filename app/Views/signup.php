<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <style>
      /* Google Fonts - Poppins */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #4070f4;
}
.container {
  position: relative;
  max-width: 370px;
  width: 100%;
  padding: 25px;
  border-radius: 8px;
  background-color: #fff;
}
.container header {
  font-size: 22px;
  font-weight: 600;
  color: #333;
}
.container form {
  margin-top: 30px;
}
form .field {
  margin-bottom: 20px;
}
form .input-field {
  position: relative;
  height: 55px;
  width: 100%;
}
.input-field input {
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  border-radius: 8px;
  padding: 0 15px;
  border: 1px solid #d1d1d1;
}
.input-field select{
    height: 100%;
  width: 100%;
  outline: none;
  border: none;
  border-radius: 8px;
  padding: 0 15px;
  border: 1px solid #d1d1d1;
}
.invalid input {
  border-color: #d93025;
}
.input-field .show-hide {
  position: absolute;
  right: 13px;
  top: 50%;
  transform: translateY(-50%);
  font-size: 18px;
  color: #919191;
  cursor: pointer;
  padding: 3px;
}
.field .error {
  display: flex;
  align-items: center;
  margin-top: 6px;
  color: #d93025;
  font-size: 13px;
  display: none;
}
.invalid .error {
  display: flex;
}
.error .error-icon {
  margin-right: 6px;
  font-size: 15px;
}
.create-password .error {
  align-items: flex-start;
}
.create-password .error-icon {
  margin-top: 4px;
}
.button {
  margin: 25px 0 6px;
}
.button input {
  color: #fff;
  font-size: 16px;
  font-weight: 400;
  background-color: #4070f4;
  cursor: pointer;
  transition: all 0.3s ease;
}
.button input:hover {
  background-color: #0e4bf1;
}
.input-field button {
    margin: 25px 0 6px;
}
    </style>
  </head>
  <body>
    <div class="container">
      <header>Signup</header>
      <form method="post" action="<?php echo base_url("signup_form")?>">
        <div class="field email-field">
          <div class="input-field">
            <input type="text" name="Name" placeholder="Enter your Name" class="email" required/>
          </div>
        </div>
        <div class="field email-field">
          <div class="input-field">
            <input type="email" id="email" name="Email" placeholder="Enter your Email" onchange="emailCheck()" class="email" required/>
            <span id="errmsg" style="display:none;color:red;">Email already exist...!</span>
          </div>
        </div>
        <div class="field create-password">
          <div class="input-field">
            <input
              type="password"
              name="Password"
              placeholder="Create Password"
              class="password"
              id="password"
              required
            />
          </div>
        </div>
        <div class="field confirm-password">
          <input type="checkbox" onclick="show()" style="float: left;margin-top: 5px;"><span id="s" style=" display:block;margin-left: 20px;">Show Password</span><span id="h" style="display:none;margin-left: 20px;" >Hide Password</span>
        </div>
        <div class="field confirm-password">
          <div class="input-field">
            <input
              type="password"
              name="Cpassword"
              placeholder="Confirm Password"
              class="cPassword"
              id="cpassword"
              required
            />
          </div>
        </div>
        <div class="field confirm-password">
          <input type="checkbox" onclick="cshow()" style="float: left;margin-top: 5px;"><span id="sp" style=" display:block;margin-left: 20px;" >Show Password</span><span id="hp" style="display:none;margin-left: 20px;"  >Hide Password</span>
        </div>
        <div class="field confirm-password">
            <div class="input-field">
                <select name="Role" id="role" required>
                    <option value="" disabled selected>Select Role</option>
                    <option value="1">Admin</option>
                    <option value="2">User</option>
                </select>
            </div>
        </div>
        <span class="signup">Already have an account?
            <a href="<?php echo base_url("login")?>">Login</a>
        <div class="input-field button">
          <input type="submit" name="Signup" value="Sign Up" onclick="return checkPassword()" />
        </div>
      </form>
    </div>
  </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  function show() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
    document.getElementById('h').style.display = "block";
    document.getElementById('s').style.display = "none";
  } else {
    x.type = "password";
    document.getElementById('s').style.display = "block";
    document.getElementById('h').style.display = "none";
  }
}
function cshow() {
  var x = document.getElementById("cpassword");
  if (x.type === "password") {
    x.type = "text";
    document.getElementById('hp').style.display = "block";
    document.getElementById('sp').style.display = "none";
  } else {
    x.type = "password";
    document.getElementById('sp').style.display = "block";
    document.getElementById('hp').style.display = "none";
  }
}
function checkPassword(form){
  var pass1=document.getElementById("password");
  var pass2=document.getElementById("cpassword");
  if(pass1.value!=pass2.value){
    alert("Password did not match.....!\n Please try again")
    return false;
  }
  return true;
}

function emailCheck() {
  var email = document.getElementById('email').value;
  $.ajax({
    url: "emailcheck",
    type: "GET",
    data: {
        mail: email
    },
    success: function(result){
      if (result == "Failed") {
        document.getElementById('errmsg').style.display = "block";
        document.getElementById('email').value = "";
      } else {
        document.getElementById('errmsg').style.display = "none";
      }
  }});
}
</script>