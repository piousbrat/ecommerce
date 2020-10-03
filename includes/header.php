<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="style.css">
      
        <title></title>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top"> 
            
            <div class="container">
                
                <div class="navbar-header">
                    
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                    <a href="index.php" class="navbar-brand life">Lifestyle Store</a>
                    
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right ">
                          
                             <?php  if (isset($_SESSION['email'])) { ?>
                             <li><a href = "cart.php"><span class = "glyphicon glyphicon-shoppingcart"></span> Cart </a></li>
                             <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span>Settings</a></li>
                             <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-login"></span> Logout</a></li>
            
                             <?php
                                    } else {
                                  ?>
                              <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>
                                    Sign Up</a></li>
                              <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                              <?php
                                }  ?>
                    </ul>>
    </body>
</html>
