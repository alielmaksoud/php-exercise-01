<?php
if (isset($_POST['login_button'])){
    $users = array("username"=>"ali","password"=>"0123456789");
    $username - $_POST['user'];
    $password = $_POST['password'];
    if ($username == $users['username'] && $password == $users['password']){
       
        echo "<h1>Successful Login</h1>";
        echo "<br>";
        echo "<p>Username: $username</p>";
        echo "<br>";
        echo "<p>Password: $password</p>";
    } else {
        echo "<h1>Wrong Username and Password</h1>";

       }
}

if (isset($_POST['register_button'])){

        $FullName = $_POST['name2'];
        $username = $_POST['username2'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $dateofbirth = $_POST['dateofbirth'];
        $socialsecuritynumber = $_POST['socialsecuritynumber'];

     if ($password == $confirmpassword){
         echo "<h2> Registration Data</h2>";
         echo $FullName;
         echo "<br>";
         echo $username;
         echo "<br>";
         echo $password;
         echo "<br>";
         echo $confirmpassword;
         echo "<br>";
         echo $email;
         echo "<br>";
         echo $phone;
         echo "<br>";
         echo $dateofbirth;
         echo "<br>";
         echo $socialsecuritynumber;
         echo "<br>";
      }
         else {
             echo "Password doesn't match";
         }

}

?>

<html>
    <head>Welcome Abroad</head>
    <style>
    body{
        background: url(https://www.psdgraphics.com/file/windows-7-wallpaper-1920x1200.jpg);
        background-position: center;
        background-size: cover;
        color: black;
        font-weight: bold;
        text-align: center;
    }

    </style>

 <body>

 </body>


</html>