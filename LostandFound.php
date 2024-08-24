<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOST AND FOUND</title>
    <link rel="stylesheet" href="lfstyle.css" type="text/css">
   
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
</head>
<body>
<div class="container1">
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
                <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            </ul>
          </div>
        </nav>
        <div class="main" >
                    <h1 style="text-align: center; ">We help you to find your Pet</h1>
                    <p style="width:100%; padding-left: 10px;padding-right:0px; text-align:center;">Most likely, you have been seeking for your missing pet for at least 24 hours by the time you are reading this post. After walking throughout your area, you drove. Your pet has been reported missing to the neighbourhood animal shelter. You've gotten little sleep lately.
                        You're reading because you think there's a good chance you'll be able to find your pet. If your pet gets lost, Fur Rescue helps you to find your pet.
                    </p>
                    
                <form action="lost.php" method="post" >
                    <div class="box">
                    <h2>Owner Details</h2>
                    <label for="" class="form-label">Full Name</label>
                    <input type="text" class="form-input"required style="height: 12px; width: 200px; "placeholder="Malavika Unni"><br><br>
                    <label for="" class="form-label">Contact Number<br></label>
                    <input type="tel" class="form-input" max="10" required style="height: 12px; width: 200px; "maxlength="10"><br><br>
                    <label for="" class="form-label">Email<br></label>
                    <input type="email" class="form-input" required style="height: 12px; width: 200px; " placeholder="abcd@example.com"><br><br>
                    <label for="" class="form-label">Gender<br></label>
                    <input type="radio"class="form-input" name="gender" value="male">Male
                    <input type="radio"class="form-input" name="gender" value="female">Female
                    <input type="radio"class="form-input" name="gender" value="other">Other
                    <h2>Pet Details</h2>
                    <label for="" class="form-label">Pet Name</label>
                    <input type="text" class="form-input" required style="height: 12px; width: 200px; "><br><br>
                    <label for="" class="form-label">Sex<br></label>
                    <input type="radio"class="form-input" name="sex" value="male">Male
                    <input type="radio"class="form-input" name="sex" value="female">Female
                    <label for="" class="form-label">Breed</label>
                    <input type="text" class="form-input" required style="height: 12px; width: 200px; "><br><br>
                    <label for="" class="form-label">Dog Age</label>
                    <input type="number" class="form-input" min="1" required style="height: 12px; width: 200px; "><br><br>
                    <label for="" class="form-label">Place of missing</label>
                    <input type="text" class="form-input"required style="height: 12px; width: 200px; "><br><br>
                    <label for="date" class="form-label">Date of missing</label>
                    <input type="date" class="form-input" placeholder="Enter the date of missing" required style="height: 12px; width: 200px; "><br><br>
                    <label for="text" class="form-label">Dog Description</label>
                    <input type="text" class="form-input" rows="3" maxlength="300" placeholder="Description" required style="height: 12px; width: 200px; "><br><br>
                    <input type="submit" value="Submit" required style=" background:rgb(72, 83, 106); border-radius: 20px; height: 35px; width: 200px; border-color: rgb(22, 22, 23);color: white; cursor: pointer; font-weight: bold;"><br><br>
                </div>
                </form>     
        </div>  
    </div> 
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<?php 
error_reporting(0);
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "fur_rescue";

// Connect to database
$conn = mysqli_connect('localhost', 'root', '', 'fur_rescue');
if (mysqli_connect_errno()) {
    die("ERROR: Could not connect to database. " . mysqli_connect_error());
}

// Get input values
$name = isset($_POST['name']) ? $_POST['name'] : "";
$contact = isset($_POST['contact']) ? $_POST['contact'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";
$gender = isset($_POST['gender']) ? $_POST['gender'] : "";
$petname = isset($_POST['petname']) ? $_POST['petname'] : "";
$sex = isset($_POST['sex']) ? $_POST['sex'] : "";
$breed = isset($_POST['breed']) ? $_POST['breed'] : "";
$dogage = isset($_POST['dogage']) ? $_POST['dogage'] : "";
$placeofmissing = isset($_POST['placeofmissing']) ? $_POST['placeofmissing'] : "";
$dateofmissing = isset($_POST['dateofmissing']) ? $_POST['dateofmissing'] : "";
$description = isset($_POST['description']) ? $_POST['description'] : "";


// Validate input values
if (empty($name)) {
    die("ERROR: Missing required input values.");
}

// Prepare and execute statement
$stmt = mysqli_prepare($conn, "INSERT INTO lostandfound (name, contact, email, gender, petname, sex, breed, dogage, placeofmissing, dateofmissing, description) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
if (!$stmt) {
   die("ERROR: Could not prepare statement. " . mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "sisssssisss", $name, $contact, $email, $gender, $petname, $sex, $breed, $dogage, $placeofmissing, $dateofmissing, $description);

if(mysqli_stmt_execute($stmt)){
    echo "<script>alert('Successfully Registered!');</script>";
} else {
    echo "<script>alert('Sorry ! Failed to Register');</script>";
}

// Close statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?> 
</body>
</html>