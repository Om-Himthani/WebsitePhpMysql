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
        background-size:100% 100% ;
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
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=password] {
  width: 100%;
  padding: 12px 20px;
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
    $email=$_POST['email'];
    $password=$_POST['password'];
$email_query=" select *from regestration where email='$email' ";
$Query=mysqli_query($con,$email_query);
$email_count=mysqli_num_rows($Query);
if($email_count){
    if(isset($_POST['checkbox'])){
        setcookie('Emailcookie',$email);
        setcookie('passwordcookie',$password);
    }
    $email_pass=mysqli_fetch_array($Query);
    $dbpass=$email_pass['password'];
    $passv=password_verify($password,$dbpass);
    if($passv){
        
        ?>
        <script>location.replace("main.php")</script>
        <?php
    }
    else{
        ?>
        <script>alert("Login inSuccesfull")</script>
        <?php
    }
}
else{
    ?>
        <script>alert("Invalid Email")</script>
        <?php
}
}



?>
<body>
<div class="container">
    <div class="form">
        <form method="POST">
          
            <button><i class="fa fa-envelope-o" aria-hidden="true" style="font-size :24px"></i></button><input type="text" name="email" id="" placeholder="Enter your Email"  value="<?php
            if(isset($_COOKIE['Emailcookie'])){
                echo $_COOKIE['Emailcookie'];
            } ?>" required><br><br>
            <button><i class="fa fa-lock" aria-hidden="true" style="font-size :30px"></i></button><input type="password" name="password" id="" placeholder="Enter your Password"  value="<?php
            if(isset($_COOKIE['passwordcookie'])){
                echo $_COOKIE['passwordcookie'];
            } ?>" required><br><br>
      <input type="checkbox" name="checkbox">Remember me
          <input type="submit" value="Log in" name="submit"><br><br>
      <p>Don't have an account  <a href="index2.php">Sign up here </a> </p>
        </form>
    </div>
    </div>
</body>
</html>