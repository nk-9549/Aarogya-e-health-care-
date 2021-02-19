<?php
    require 'connection.php';
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Aarogya e-health care Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link ref="stylesheet" href="style.css">
    </head>
    <body>
<style>
* { 
  font-family: Myraid pro;
}




input[type=text], input[type=password] {
 
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
 
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
  text-align: center;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}


/* footer */
div#footer-cont {
    
    background-color: gray;
    text-align: center;
    position: relative;
    
  }

 
  #confeed1 a{
    color: white;
    font-size: 40px;
    padding: 5px;
    border: 1px solid grey;
  }
  #confeed1 a:hover{
   
    text-decoration: none;
  }

  /*    icons   */
  .fa {
    padding: 20px;
    font-size: 30px;
    width: 30px;
    text-align: center;
    text-decoration: none;
    margin: 10px 6px;
    border-radius: 500%;
  }
  
  .fa:hover {
      opacity: 0.7;
  }
  
  .fa-facebook {
    background: #3B5998;
    color: white;
  }
  .fa-twitter {
    background: #55ACEE;
    color: white;
  }
  .fa-linkedin {
    background: #007bb5;
    color: white;
  }
  
  .fa-youtube {
    background: #bb0000;
    color: white;
  }
  
  .fa-instagram {
    background: #125688;
    color: white;
  }
</style>
        <div>
            
            <br><br><br>
           <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3>LOGIN</h3>
                            </div>
                            <div class="panel-body">
                                <p>Login to for consult with doctor.</p>
                                <form method="post" action="E-health.html">
                                    <div class="form-group"  style="padding-left:40%; padding-right:40%;">
                                        <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    </div>
                                    <div class="form-group" style="padding-left:40%; padding-right:40%;">
                                        <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" pattern=".{6,}">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Login" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                            <div class="panel-footer">Don't have an account yet? <a href="signup.php">Register</a></div>
                        </div>
                    </div>
                </div>
           </div>
           <br><br><br><br><br>
           <div id="footer-cont" class="container-fluid">
  <div class="row">
    <div id="confeed1" class="col">
      <a class="navbar-brand" href="E-health.html" >
        <img src="aarogya logo1.svg" alt="" style="width: 200px; height: 130px;">
      </a>
    
      
      <div class="contact" style="font-size: 21px;">
        <span><i class="fas fa-phone"></i > &nbsp; +91 987-654-321</span>
          <br>
        <span><i class="fas fa-envelope"></i> &nbsp; aarogyae-healthcare@nsp.com</span>
      </div>
      <div class="socials">
        <a href="#" class="fa fa-facebook" style="margin-left: 15px;"></a>
        <a href="#" class="fa fa-twitter" style="margin-left: 20px;"></a>
        <a href="#" class="fa fa-linkedin" style="margin-left: 20px;"></a>
        <a href="#" class="fa fa-youtube" style="margin-left: 20px;"></a>
        <a href="#" class="fa fa-instagram" style="margin-left: 20px;"></a>
      </div>
    </div>
    <div id="confeed2" class="col">
      <h2 style="margin-top: 19px; font-weight: bolder;">Feedback</h2>
      
      <form action="index.html" method="post">
        <input type="email" name="email" class="text-input contact-input" placeholder="Your email address..." style="margin-top: 25px;">
          <br>
        <textarea name="message" cols="23" rows="" class="text-input contact-input" placeholder="Your message..." style="margin-top: 30px;"></textarea>
          <br>
        <button type="submit" class="btn btn-big" style="font-size: 20px; background-color: black; color: white; margin-top: 32px;">
          <i class="fas fa-envelope"></i>
          Send
        </button>
      </form>
    </div>
  </div>
                <center>
                <hr>
  <div class="footer-bottom" style="background-color: #4CAF50;">
    &copy; aarogyae-healthcare.com | Designed by NSP
  </div>
               </center>
    </body>
</html>
