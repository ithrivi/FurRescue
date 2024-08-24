<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REVIEW SECTION</title>
    <link rel="stylesheet" href="reviewstyle.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
    
<body style="background:  rgb(209, 209, 202);">
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
</head>
<body>
    <h2 style="text-align: center; font-family: 'Times New Roman', Times, serif;">"You love dogs. You can never go wrong adding a dog to the story."</h2>
    <h1 style="text-align: center; font-family: 'Times New Roman', Times, serif;">REVIEWS</h1>
    <h3 style="font-family: 'Times New Roman', Times, serif;">WE APPRECIATE YOUR REVIEW!</h3>
    <p style="font-family: 'Times New Roman', Times, serif;">Your review will help us to improve our customer services.</p>
    <div class="main">
        <form id="review-form" action="review.php" method="post">
            <div class="box">
            <div class="form">
            <label for="" class="form-label">Name:</label>
            <input type="text" name="name" id="name" class="form-input" value="Anonymous" style="height: 12px; width: 250px; " placeholder="Malavika Unni"><br>
            <label for="" class="form-label">Email<br></label>
            <input type="email" name="email" id="email" class="form-input" required style="height: 12px; width: 250px;" placeholder="abcd@example.com"><br>
            <label for="" class="form-label">Rating<br></label>
            <input type="number" name="rating" class="form-input" min="1" max="5" required="" style="height: 12px; width: 250px; "><br>
            <label for="" class="form-label">Review</label>
            <input type="text" name="review" id="review" class="form-input" rows="3" maxlength="300" style="height: 13px; width: 250px; "><br><br>
            <input type="submit" name="submit" value="Submit Review" required style=" background:rgb(48, 54, 67); border-radius: 20px; height: 35px; width: 200px; border-color: rgb(29, 29, 52);color: white; cursor: pointer; font-weight: bold;"><br><br>
        </form>
    </div>
    </div>
    <br><br>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<div class="reviews"> 
<?php error_reporting(0); 
    $host="localhost";
    $dbUsername="root";
    $dbPassword="root";
    $dbname="fur_rescue"; 

    $conn = mysqli_connect('localhost', 'root', 'root', 'fur_rescue');
    if($conn === false){
        echo "Failed to connect to the database: " . mysqli_connect_error();
    }
       /* echo "Database connected successfully!";*/
        $sql = "SELECT * FROM reviews";
        $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<div class='review'>";
                echo "<h3>" . $row["name"] . "</h3>";
                echo "<p>" . $row["email"] . "</p>";
                echo "<div class='rating'>";
                for($i = 1; $i <= $row["rating"]; $i++) {
                    echo "<span class='star'></span>";
                }
                echo "</div>";
                echo "<p>" . $row["review"] . "</p>";
                echo "</div>";
            }
        } else {
            echo "No reviews found.";
        }
    
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $rating = $_POST['rating'];
        $review = $_POST['review'];
    
        $sql = "INSERT INTO reviews (name, email, rating, review) VALUES ('$name', '$email', '$rating', '$review')";
        if(mysqli_query($conn, $sql)){
            echo "<script>alert('Review added successfully!');</script>";
        } else{
            echo "<script>alert('ERROR: Could not able to execute $sql.".mysqli_error($conn)."');</script>";
        }
    }
    mysqli_close($conn);
?>
</div>

<style>
  .reviews {
    border: 6px solid #686767;
    padding: 20px;
    width: 50%;
    margin: 0 auto;
    background-color: #d0d0d0;
  }
  .review {
    border: 2px solid #686767;
    padding: 10px;
    margin-bottom: 10px;
    background: #ffffff;
  }
  .review h3 {
    font-size: 18px;
    margin-bottom: 5px;
  }
  .review p {
    margin: 0;
  }
  .rating {
    font-size: 24px;
    display: inline-block;
  }
  .star {
    display: inline-block;
    width: 20px;
    height: 20px;
    background: url(star.png) no-repeat;
    background-size: contain;
  }
</style>
</body>
</html>

