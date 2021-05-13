<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    *{
        margin: 0;
        padding: 0;
box-sizing: border-box;
    }
    body{
       width:100vw;
       height:100vh;
       background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.2)),url(2.jpg);
        background-size:cover;
   }
    .container{
        width: 100%;
        height: 100vh;
      
display: grid;

place-items: center;
    }
    .form{
width: 30%;
height: 50%;
display: flex;
justify-content: center;
align-items: center;
    }
    input[type=text] {
  width: 100%;
  padding: 9px 15px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=password] {
  width: 100%;
  padding: 9px 15px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

</style>
    <title>Document</title>
</head>

<?php
include 'connections.php';
if(isset($_POST['submit'])){
    $user=$_POST['user'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
$pass=password_hash($password,PASSWORD_BCRYPT);
$cpass=password_hash($cpassword,PASSWORD_BCRYPT);
$emailquery=" select * from regestration where email='$email' ";
$query=mysqli_query($con,$emailquery);
$emailcount=mysqli_num_rows($query);
if($emailcount>0){
    ?>
    <script> alert("Email already exist")</script>
    <?php
}
else{
    if($password===$cpassword){
        $selectquery=" insert into regestration(name,email,password,cpassword) values('$user','$email','$pass','$cpass') ";
    $insertquery=mysqli_query($con,$selectquery);
   setcookie('Username',$user);
   setcookie('Email',$email);
   setcookie('Password',$password);

   ?>
    <script> alert("Data  inserted properly")</script>
    <?php
    }
else{
    ?>
    <script> alert("Password are not matching")</script>
    <?php
}
}
}



?>
<body>
    <div class="container">
    <div class="form">
        <form method="POST">
            <button><i class="fa fa-user" aria-hidden="true" style="font-size :30px"></i></button><input type="text" name="user" id="" placeholder="Enter Your Name" required><br><br>
            <button><i class="fa fa-envelope-o" aria-hidden="true" style="font-size :24px"></i></button><input type="text" name="email" id="" placeholder="Enter your Email" required><br><br>
            <button><i class="fa fa-lock" aria-hidden="true" style="font-size :30px"></i></button><input type="password" name="password" id="" placeholder="Enter your Password" required><br><br>
            <button><i class="fa fa-lock" aria-hidden="true" style="font-size :30px"></i></button><input type="password" name="cpassword" id="" placeholder="Repeat Password" required><br><br>
        <input type="submit" value="Create Account" name="submit"><br><br>
        <p>Have an account <a href="login.php">Log In </a> </p>
        </form>
        
   </div>
    </div>
</body>
</html>