<html>
<head>
  <title>User Login and Registration</title>
  </head>
  <style>
  body{
    background:url(https://cinegoldplex.com/assets/admin/images/background/login-register.jpg);
    background-position: center;
    background-size: cover;
    color: black;
    font-weight: bold;
  }
.right{
  margin-top: 5%;
  background:url(https://www.newcentcorp.com/wp-content/uploads/2017/08/Login-background.jpg);
  background-position: center;
  background-size: cover;
  
}

.left{
  margin-top: 5%;
  background:url(https://www.newcentcorp.com/wp-content/uploads/2017/08/Login-background.jpg);
  background-position: center;
  background-size: cover;
}

.container{
  display: grid;
  grid-template-columns: auto auto;
  justify-content: space-around;
   text-align: center;
}
  </style>
<body>
<div class="container">
  <div>
  <form method="post" action="safe.php" class="left">
     <fieldset>
      <legend>Login Here</legend>
      <br<><br><br<><br><br<><br>
      <label>Username</label>
      <input type="text" name="user" placeholder="Enter your User name" required>
      <br><br>
      <label>Password</label>
      <input type="password" name="password" placeholder="Enter your Password" required>
      <br><br>
      <button type="submit" name="login_button">Login</button>
      <br<br><br<><br><br><br><br<><br><br<><br><br><br><br<><br><br<><br><br><br><br<><br><br<><br><br><br><br<><br><br<><br>
       </fieldset>
    </form>
  </div>
  <div>
  <form method="post" action="safe.php" class="right">
     <fieldset>
      <legend>Register here</legend>
      <br<><br><br<><br><br<><br>
      <label>Full Name</label>
      <input type="text" name="name2" placeholder="Enter your Full Name" required>
      <br><br>
      <label>Username</label>
      <input type="text" name="username2" placeholder="Enter your Username" required>
      <br><br>
      <label>Password</label>
      <input type="password" name="password2" placeholder="Enter your Password" required>
      <br><br>
      <label>Confirm Password</label>
      <input type="password" name="confirmpassword" placeholder="Re-enter your Password" required>
      <br><br>
      <label>Email</label>
      <input type="email" name="Email" placeholder="Enter your Email" required>
      <br><br>
      <label>Phone</label>
      <input type="number" name="phone" placeholder="Enter your Phone number" required>
      <br><br>
      <label>Date of Birth</label>
      <input type="dateofbirth" name="dateofbirth" placeholder="Enter your Date of Birth" required>
      <br><br>
      <label>Social Security Number</label>
      <input type="number" name="socialsecuritynumber" placeholder="Enter your Social Security Number" required>
      <br><br>
      <button type="submit" name="register_button">Register</button>
      <br><br><br<><br><br<><br>
       </fieldset>
    </form>
  </div>
</div>

</body>
</html>