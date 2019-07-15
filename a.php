<?php
  
   /*if ($connect) {
    
   
    echo "successful";
   }*/

   include "db1.php";

if (isset($_POST['sub'])){



  $u = $_POST['username'];
  $e= $_POST['email'];
  $r= $_POST['password'];
  $n = $_POST['city'];
  $f=$_POST['room'];


/*  $hashFormat = "$2y$10$";
  $salt = "iusesomecrazystrings22";

  $hash_salt = $hashFormat . $salt;
  $r = crypt($r,$hash_salt);
*/
  /*$ret = $_GET['username'];
  $pas = $_GET['password'];*/

  $u = mysqli_real_escape_string($connect,$u);
$e = mysqli_real_escape_string($connect,$e);
$r = mysqli_real_escape_string($connect,$r);
$n = mysqli_real_escape_string($connect,$n);

   $query = "INSERT INTO registration(username,email,password,city,roomno) VALUES ('$u','$e','$r','$n','$f')";

   $Result = mysqli_query($connect,$query);
   if ($Result) {
     ?>
    <script type="text/javascript">
      alert('Registered Successfully');
    </script>
    <?php
   }else{
    die('Error:404');
   }



   
 }












?>




























<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Register Here</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,700,300'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

 <?php
include "big.php";

 ?>
    <div class="thumbnail__content text-center">
      <h1 class="heading--primary">Welcome to Agnel Boys Hostel.</h1>
      <h2 class="heading--secondary">Vashi,Navi Mumbai</h2>
    </div>
    <!-- <div class="thumbnail__links">
      <ul class="list-inline m-b-0 text-center">
        <li><a href="http://alexdevero.com/" target="_blank"><i class="fa fa-globe"></i></a></li>
        <li><a href="https://www.behance.net/alexdevero" target="_blank"><fa class="fa fa-behance"></fa></a></li>
        <li><a href="https://github.com/alexdevero" target="_blank"><i class="fa fa-github"></i></a></li>
        <li><a href="https://twitter.com/alexdevero" target="_blank"><i class="fa fa-twitter"></i></a></li>
      </ul>
    </div> -->
    <div class="signup__overlay"></div>
  </div>
  <div class="container__child signup__form">
    <form action="a.php" method="POST">
      <div class="form-group">
        <label for="username">Username</label>
        <input class="form-control" type="text" name="username" id="username" placeholder="Enter Your name" required />
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" type="email" name="email" id="email" placeholder="aything@gmail.comm" required />
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" type="password" name="password" id="password" placeholder="********" required />
      </div>
      <div class="form-group">
        <label for="passwordRepeat">City</label>
        <input class="form-control" type="text" name="city" id="passwordRepeat" placeholder="Nasik" required />
      </div>
       <div class="form-group">
        <label for="passwordRepeat">Roomno</label>
        <input class="form-control" type="text" name="room"  placeholder="12" required />
      </div>
      
      
      <div class="m-t-lg">
        <ul class="list-inline">
          <li>
            <input class="btn btn--form" type="submit" value="Register" name="sub" />
          </li>
          
        </ul>
      </div>
    </form>  
  </div>
</div>
  
  

</body>

</html>
