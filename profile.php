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
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    body{
       width:100vw;
       height:100vh;
       background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.2)),url(2.jpg);
        background-size:100% 100% ;
   }
    .contain{
        width:100vw;
        height:100vh;
      

    }
    .profile{
        width:350px;
        height:400px;
        
        border:5px solid black;
      margin-left:500px;
      margin-top:100px;
          }
    img{
        width:100%;
        height:40%;
       background-size:100% 100%;
    }
   p{
       font-size:20px;
       font-family: 'Itim', cursive;
  margin-top:20px;
   }
   h1{
    font-family: 'Itim', cursive;
   }
  

   
    </style>
</head>
<body>
<div class="contain">
    <div class="main_div">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Om Himthani</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
               <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact us</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                  </li>
                  
              </ul>
             
            </div>
          </nav>
    
    <div class="profile">
    <center>
    <h1>Profile</h1>
    </center>
    <img src="https://www.attendit.net/images/easyblog_shared/July_2018/7-4-18/b2ap3_large_totw_network_profile_400.jpg">
    <center>

       <p>Email:   <?php
       if(isset($_COOKIE['Emailcookie'])){
                echo $_COOKIE['Emailcookie'];
            } ?><br>
<p>Password:  <?php
if(isset($_COOKIE['passwordcookie'])){
    echo $_COOKIE['passwordcookie'];
}


?></p><br>  </center>
    </div>

    </div>
</body>
</html>