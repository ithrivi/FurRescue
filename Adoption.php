<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoption Request Form</title>
    <link rel="stylesheet" href="Adoption.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
</head>
<body style="background: linear-gradient(to right, #c04848, #480048);">
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
              <a class="nav-link" href="adopt.html">Adopt</a>
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
          </ul>
        </div>
      </nav>
        <h1 style="font-family: 'Garamond'; text-align: center; font-size: 70px; color: white; background: linear-gradient(to right, #c04848, #480048);">ADOPTION REQUEST FORM</h1>
    <div class="formbold-main-wrapper" style="background: linear-gradient(to right, #c04848, #480048);">
        <div class="formbold-form-wrapper" style="border-color:rgb(14, 4, 41); background-color: rgb(255, 255, 255); border-radius: 5 px; ">
          <form action="Adoption.php" method="POST" enctype="multipart/form-data">
            <div class="formbold-mb-5 formbold-pt-3">
              <label class="formbold-form-label formbold-form-label-2">Owner Details</label><br>
              <div class="flex flex-wrap formbold--mx-3">
                <div class="w-full sm:w-half formbold-px-3">
                  <div class="formbold-mb-5">
                    <label for="name" class="formbold-form-label"> Full Name </label>
                    <input type="text" required name="name" id="name" placeholder="Full Name" class="formbold-form-input"/>
                  </div>
                </div>
               <div class="w-full sm:w-half formbold-px-3">
                  <div class="formbold-mb-5">
                    <label for="phone" class="formbold-form-label"> Phone Number </label>
                    <input type="tel" required maxlength="10" pattern="[1-9]{1}[0-9]{9}"  name="phone" id="phone" placeholder="6282674589" class="formbold-form-input"/>
                  </div>
                </div>
                <div class="w-full sm:w-half formbold-px-3">
                    <label for="email" class="formbold-form-label"> Email Address </label>
                    <input type="email" required name="email" id="email" placeholder="example@gmail.com" class="formbold-form-input"/>
                  </div>
                  <div class="w-full sm:w-half formbold-px-3">
                    <label for="email" class="formbold-form-label">Dog ID</label>
                    <input type="tel" minlength="4" maxlength="4" pattern="[1-9]{1}[0-9]{3}" required name="dogID" id="dogID" placeholder="1505" class="formbold-form-input"/>
                  </div>
                </div>
                <div class="formbold-mb-5 formbold-pt-3">
                  <label class="formbold-form-label formbold-form-label-2">Address Details</label>
                  <div class="flex flex-wrap formbold--mx-3">
                    <div class="w-full sm:w-half formbold-px-3">
                      <div class="formbold-mb-5">
                        <input type="text" required name="area" id="area" placeholder="Enter area" class="formbold-form-input"/>
                      </div>
                    </div>
                    <div class="w-full sm:w-half formbold-px-3">
                      <div class="formbold-mb-5">
                        <input type="text" class="formbold-form-input" name="city" id="city" required placeholder="Enter city">     
                      </div>
                    </div>
                    <div class="w-full sm:w-half formbold-px-3">
                      <div class="formbold-mb-5">
                        <select name="state" id="state" required class="formbold-form-input">
                          <option value="" disabled selected hidden>Choose State</option>
                          <option value="Andhra Pradesh" class="option">Andhra Pradesh</option>
                          <option value="Andaman and Nicobar Islands" class="option">Andaman and Nicobar Islands</option>
                          <option value="Arunachal Pradesh" class="option">Arunachal Pradesh</option>
                          <option value="Assam" class="option">Assam</option>
                          <option value="Bihar" class="option">Bihar</option>
                          <option value="Chandigarh" class="option">Chandigarh</option>
                          <option value="Chhattisgarh" class="option">Chhattisgarh</option>
                          <option value="Dadar and Nagar Haveli" class="option">Dadar and Nagar Haveli</option>
                          <option value="Daman and Diu" class="option">Daman and Diu</option>
                          <option value="Delhi" class="option">Delhi</option>
                          <option value="Lakshadweep" class="option">Lakshadweep</option>
                          <option value="Puducherry" class="option">Puducherry</option>
                          <option value="Goa" class="option">Goa</option>
                          <option value="Gujarat" class="option">Gujarat</option>
                          <option value="Haryana" class="option">Haryana</option>
                          <option value="Himachal Pradesh" class="option">Himachal Pradesh</option>
                          <option value="Jammu and Kashmir"class="option">Jammu and Kashmir</option>
                          <option value="Jharkhand" class="option">Jharkhand</option>
                          <option value="Karnataka" class="option">Karnataka</option>
                          <option value="Kerala" class="option">Kerala</option>
                          <option value="Madhya Pradesh" class="option">Madhya Pradesh</option>
                          <option value="Maharashtra" class="option">Maharashtra</option>
                          <option value="Manipur" class="option">Manipur</option>
                          <option value="Meghalaya" class="option">Meghalaya</option>
                          <option value="Mizoram" class="option">Mizoram</option>
                          <option value="Nagaland" class="option">Nagaland</option>
                          <option value="Odisha" class="option">Odisha</option>
                          <option value="Punjab" class="option">Punjab</option>
                          <option value="Rajasthan" class="option">Rajasthan</option>
                          <option value="Sikkim" class="option">Sikkim</option>
                          <option value="Tamil Nadu" class="option">Tamil Nadu</option>
                          <option value="Telangana" class="option">Telangana</option>
                          <option value="Tripura" class="option">Tripura</option>
                          <option value="Uttar Pradesh" class="option">Uttar Pradesh</option>
                          <option value="Uttarakhand" class="option">Uttarakhand</option>
                          <option value="West Bengal" class="option">West Bengal</option>
                        </select>
                      </div>
                    </div>
                    <div class="w-full sm:w-half formbold-px-3">
                      <div class="formbold-mb-5">
                        <input type="tel" name="postcode" id="postcode" pattern="[1-9]{1}[0-9]{5}" maxlength="6" required placeholder="Enter Pincode" class="formbold-form-input"/>
                      </div>
                    </div>
                  </div>
                  <div class="formbold-mb-5 formbold-pt-3">
                    <label class="formbold-form-label formbold-form-label-2">ID Details</label><br>
                    <div class="flex flex-wrap formbold--mx-3">
                      <div class="w-full sm:w-half formbold-px-3">
                        <div class="formbold-mb-5">
                          <label for="file" class="formbold-form-label">Aadhar </label>
                          <input type="file" required name="aadhar" id="aadhar" class="formbold-form-input"/>
                        </div>
                      </div>
                     <div class="w-full sm:w-half formbold-px-3">
                        <div class="formbold-mb-5">
                          <label for="age" class="formbold-form-label">Age </label>
                          <input type="tel" required maxlength="3"  name="age" id="age"pattern="[18-100]{1}" placeholder="Enter Age" class="formbold-form-input"/>
                        </div>
                      </div>

                       <div class="formbold-mb-5">
                        <label for="" class="" style="margin-left: 40px;">Why do you wish to adopt*<br></label>
                        <input type="text" class="food" name="why" id="why" required style="width: 350px;" placeholder="example: Reasons for adopting">
                    </div>
                        <div class="formbold-mb-5">
                          <div class="stylenew">
                            <input type="checkbox" required name="Agree" value="detail"  style="height: 12px; width: 30px; margin-left: 20px;">Details will be sent to your email and phone number. 
                        </div>
                      </div>
                </div>
              </div>
            </div>
            <div>
              <button class="formbold-btn" style="color: white; background-color:  #480048; width: 20%;margin-top: -1%;">Send Request</button>
            </div>
          </form>
        </div>
      </div>


      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      

</body>


<?php error_reporting(0);
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$dogID = $_POST['dogID'];
$area = $_POST['area'];
$city = $_POST['city'];
$state = $_POST['state'];
$postcode = $_POST['postcode'];

$pname=rand(1000,10000)."-".$_FILES["aadhar"]["name"];
$tname=$_FILES["aadhar"]["tmp_name"];
$uploads_dir='C:\wamp64\www\adopt';
move_uploaded_file($tname, $uploads_dir.'/'.$pname);

$age = $_POST['age'];
$why = $_POST['why'];
$id=rand(1000,10000);
if(!empty($name)){
    $host="localhost";
    $dbUsername="root";
    $dbPassword="root";
    $dbname="fur_rescue";

    $conn= new mysqli($host,$dbUsername,$dbPassword,$dbname);

    if(mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else{
        $SELECT = "SELECT ID From adopt Where ID=? Limit 1";
        $INSERT = "INSERT Into adopt (name, phone, email, dogID, area, city, state, postcode, aadhar, age, why, ID) values( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt=$conn->prepare($SELECT);
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->bind_result($id);
        $stmt->store_result();
        $rnum=$stmt->num_rows;

        if($rnum==0){
            $stmt->close();
            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("sisisssisisi",$name, $phone, $email, $dogID, $area, $city, $state, $postcode, $pname, $age, $why, $id);
            $stmt->execute();
            echo '<script>alert("Registered Successfully")</script>';
        }
        else{
            echo '<script>alert("Already Registered")</script>';
        }
        $stmt->close();
        $conn->close();
    }
}
else {
    //echo '<script>alert("Fill the required Fields")</script>';
    die();
  }
?>
</html>


  