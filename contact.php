<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Website</title>
<style>
    *{
        margin: 0;
padding: 0;
box-sizing: border-box;
    }
    html {
    font-size: 16px;
} 
    .main_div{
        width: 100vw;
        height: 100vh;
        background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.2)),url(1.jpg);
        background-size: 100% 100%;
    
    }
  
    input[type=text] {
  width: 20%;
  padding: 9px 20px;
  margin: 8px 0;
  box-sizing: border-box;
 
}
input[type=submit] {
  width: 20%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left:30px;
}
#email{
  position:absolute;
  right:30rem;
}
#message{
  position:absolute;
  right:30rem;
  top:10rem;
}
#submit{
   position:absolute;
  right:30rem;
  top:17rem;

}
#i{
  position: absolute;
  right:47.5rem;
  top:70px;  
}
#i2{
  position: absolute;
  top:11rem;
  right:47.5rem;
  font-size:50px;
}

</style>
</head>
<body>
    <div class="main_div">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Om Himthani</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="main.php">Home </a>
                </li>
               <li class="nav-item  active">
                  <a class="nav-link" href="contact.php">Contact us  <span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                  </li>
                  
              </ul>
             
            </div>
          </nav>
 <?php
 include 'connections.php';
if(isset($_POST['submit'])){
  $email=$_POST['email'];
  $message=$_POST['message'];
  $query=" insert into contact(email,message) values('$email','$message') ";
  mysqli_query($con,$query);
}



?>
  <div class="form">
          <form method="POST">
 <i class="fa fa-envelope-o" aria-hidden="true" id="i" style="font-size :24px"></i> <input type="text" name="email" id="email" placeholder="Email" required><br>
  <i  class="fa fa-commenting-o" aria-hidden="true" id="i2" style="font-size :24px"></i> <input type="text" name="message" id="message" placeholder="Message" required><br>
      <input type="submit" value="Send" name="submit" id="submit">      
</form>
</div>
</div>
</body>
</html>