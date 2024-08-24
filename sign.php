<?php
session_start();
if (!isset($_SESSION["login"])){
  $_SESSION["login"] = 0;
}
// else{if ($_SESSION["login"] == "1"){
//   echo "<script>alert('You are already signed in')</script>";
// }
// }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="sign.css">
  
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
  <div class="header1"> 
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="#">
          <img src="logonew2.jpg" width="120" height="120" alt="">
        </a>
          <a class="navbar-brand" href="Home.html">Fur Rescue</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            
              <li class="nav-item active">
                <a class="nav-link" href="Home.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="Adopt.php">Adopt</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dog
                </a>
                <div class="dropdown-menu" style="margin-left: 385px; margin-top:-50px;" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="services.php">Pet Dog</a>
                  <a class="dropdown-item" href="Straydogsell.php">Stray Dog</a>
            
              </li>
              <li class="nav-item active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Services
                </a>
                <div class="dropdown-menu" style="margin-left: 385px; margin-top:-50px;" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="Consult.php">Consultation</a>
                  <a class="dropdown-item" href="groom.php">Grooming</a>
                  <a class="dropdown-item" href="Boarding.php">Boarding</a>
                  <a class="dropdown-item" href="LostandFound.php">Lost & Found</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="Report.php">Complaint</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="EVENT.html">Events</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="review.php">Review</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="blog.html">Blogs</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="sign.php">Sign Up</a>
              </li>
              
              <li class="nav-item active">
                    <a class="nav-link" href="Home.html.#contact">Contact Us</a>
                  </li>
              <?php
                 if($_SESSION["login"]==1){
                  echo "<li class='nav-item active'>
                  <a class='nav-link' href='logout.php'>Log Out</a>
                </li>";
                 }
              ?>
            </ul>
          </div>
        </nav>
  </div>
  <div class="main">    
    <input type="checkbox" id="chk" aria-hidden="true">

      <div class="signup">
        <form method="POST" action="sign.php">
          <label for="chk" aria-hidden="true">Sign up</label>
          <input type="text" name="name" placeholder="Full name" required=""><br>
          <input type="tel" name="phone" placeholder="Phone" required=""><br>
          <input type="email" name="email" placeholder="Email" required=""><br>
          <input type="password" name="pswd" placeholder="Password" required=""><br>
          <button type="submit" name="signup" style="margin-left:30px;">Sign up</button>
        </form>
      </div>

      <div class="login">
        <form method="POST" action="sign.php">
          <label for="chk" aria-hidden="true" style="margin-top: 10%;" >Login</label>
          <br><br>

          <input type="email" name="email1" placeholder="Email" required="">
          <br>
          <input type="password" name="pswd1" placeholder="Password" required="">
          <br>
          <button type="submit" name="login" style="margin-left:30px;">Login</button>
        </form>
      </div>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

<?php error_reporting(0);
//connect to database
$con=mysqli_connect("localhost","root","root","fur_rescue");
//include("sessionTrialMan.php");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//check if sign up button is clicked
if(isset($_POST['signup'])){
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $pswd=$_POST['pswd'];
 
  //insert data into database
  $query=mysqli_query($con,"insert into signup(Fullname,Phone,Email,Password) values('$name','$phone','$email','$pswd')");

  if($query){
    echo "<script>alert('You have registered successfully!')</script>";
   
  } else {
    echo "<script>alert('Registration failed. Please try again.')</script>";
  }
}

//check if login button is clicked
if(isset($_POST['login'])){
  $email1=$_POST['email1'];
  $pswd1=$_POST['pswd1'];

  //select data from database
  $query=mysqli_query($con,"select * from signup where Email='$email1' and Password='$pswd1'");

  $row=mysqli_fetch_array($query);

  if($row){
    echo "<script>alert('Login successful!')</script>"; 
    $_SESSION["login"] = "1";
    echo "<script> window.location.assign('Home.html'); </script>";
            exit;
  } else {
    echo "<script>alert('Login failed. Please try again.')</script>";
    $_SESSION["login"] = "0";
  }
}
?>
</html>