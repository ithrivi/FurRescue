<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Issues</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="Report.css" type="text/css">
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
        <div class="main" style="height:1400px">
            <div class="left" style="height:1400px; background: #d1c9c9;">
                <br>
                <img src="istockphoto-1284984158-612x612.jpg" alt="" height="250px" width="280px" style="position: absolute; left: 15px;"><br>
                <p style="padding-top: 220px; padding-left:18px ; padding-right: 16px; font-style: italic; font-size: 15px; text-align: justify;  font-weight: lighter; " >    
                <br>The Section 44 (I) Part IV of the Prevention of Cruelty to Animals Act, 1960, is an Act of the Parliament of India enacted in 1960 to prevent the infliction of unnecessary pain or suffering on animals and to amend the laws relating to the prevention of cruelty to animals.
                The act defines "animal" as 'any living creature other than a human being'<br>
                </p>
                <img src="cute.jpg" alt="" height="295px" width="280px" style="position: absolute; left: 15px;"><br>
                <p style="padding-top: 255px; padding-left:18px ; padding-right: 16px; font-style: italic; font-size: 15px; text-align: justify;  font-weight: lighter;">
                <br>
                Physical Injuries: Noticeable wounds, severe matting and manage, signs of starvation like visible bones, and open sores are all obvious signs of an abused animal.
                <br>
                Abandonment: Pay attention to animals’ signs of distress. While they are unable to speak, animals can express their anxiety and stress through whining, howling, or barking. If there are consistent audible signals, urgent care is most likely required.
                <br>
                Aggressive Behavior: While all acts of aggression do not indicate abuse is taking place, behaviors like hiding, cowering, and fear-biting, especially around an owner, could suggest abuse is taking place.
                <br>
                Animal Hoarding: Too many animals on one property is a sign of animal hoarding, which leads to cruelty, neglect, and abandonment.
                </p>
            </div>
            <div class="rleft" style="height:1400px"> </div>
            <div class="right" style="height:1400px">
                <form action="Report.php" method="POST" enctype="multipart/form-data" >
                    <h1 style="font-family: Bebas Neue;color: #4f4042;text-align: center;">REPORT ANIMAL ABUSE</h1>
                    <label for="requirement" class="form-label">Select Issue Type*</label>
                    <select name="requirement" id="requirement" required style="height: 30px; width: 300px; color: #536387; border-radius: 20px; border-color: #bcc0c9;">
                        <option value="">           </option>
                        <option value="Online Fraud or Animal Trade" class="option">Online Fraud or Animal Trade </option>
                        <option value="Pet Dog Issues" class="option">Pet Dog Issues</option>
                        <option value="Street Dog Issues" class="option">Street Dog Issues</option>
                        <option value="Exotic animals in captivity" class="option">Exotic animals in captivity </option>
                        <option value="Animals Used for entertainment" class="option">Animals Used for entertainment</option>
                        <option value="Abuse" class="option">Abuse </option>
                        <option value="Other issues" class="option">Other issues</option>
                    </select><br><br>
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-input" name="name" id="name" style="height: 10px; width: 300px; " placeholder="Ishana Thrivi"><br><br>
                    <label for="phone" class="form-label">Contact Number<br></label>
                    <input type="tel" class="form-input" maxlength="10" name="phone" id="phone" pattern="[1-9]{1}[0-9]{9}" style="height: 10px; width: 300px" placeholder="6282674589"><br><br>
                    <label for="date" class="form-label">Date of Incident*<br></label>
                    <input type="date" class="form-input"  name="date" id="demo" required style="height: 10px; width: 300px" placeholder="mm/dd/yyyy" onfocus="(this.type='date')"><br><br>
                    <script>
                      var date = new Date();
                      var tdate = date.getDate();
                      var month = date.getMonth()+1;
                      if(tdate < 10)
                        {
                          tdate = "0"+ tdate;
                        }
                      if(month < 10)
                        {
                          month = "0"+ month;
                        }
                        var year = date.getUTCFullYear();
                        var maxDate = year + "-" + month + "-" + tdate;
                        document.getElementById("demo").setAttribute('max',maxDate)
                      console.log(maxDate);
                    </script>
                    
                    <label for="area" class="form-label">Address of Incident*<br></label>
                    <input type="text" class="form-input" name="area" id="area" style="height: 10px; width: 300px" placeholder="Street 44, House 38"><br><br>
                    <label for="city" class="form-label">City of Incident*<br></label>
                    <input type="text" class="form-input" name="city" id="city" required style="height: 10px; width: 300px" placeholder="Bengaluru"><br><br>
                    <label for="state" class="form-label">State of Incident*<br></label>
                    <select name="state" id="state"  required style="height: 30px; width: 300px; border-radius: 20px; border-color: #bcc0c9;" >
                        <option value="">           </option>
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
                        </select><br><br>
                    <label for="postcode" class="form-label">Pincode of Incident*<br></label>
                    <input type="tel" class="form-input" name="postcode" id="postcode" pattern="[1-9]{1}[0-9]{5}" maxlength="6" style="height: 10px; width: 300px" placeholder="659015" required><br><br>
                    <label for="detail" class="form-label">Detailed Description of Incident*<br></label>
                    <textarea name="detail"  style="border-radius: 20px; border-color: #bcc0c9;" id="detail" cols="35" rows="5" required></textarea><br><br>
                    <label for="" class="form-label">Proofs of Incident* (any supporting documents)<br></label>
                    <input type="file" multiple=true name="proof" id="proof" style="height: 30px; width: 300px; color: #364f6b; font-size: 15px!important;" required><br><br>
                    <input type="submit" value="Submit"  style="height: 30px; width: 100px; background: #364f6b; border-radius: 20px; border-color: #bcc0c9;color: white; font-weight: bold; font-size: 15px!important;"><br><br>
                </form>
            </div>
            <div class="rright" style="height:1400px">
                <br>
                <iframe src="https://www.youtube.com/embed/D1p5UDwKK2w" frameborder="0" width="300" height="200" style="padding-left: 0px;"></iframe>
                <br><br>
                <iframe width="300" height="200" src="https://www.youtube.com/embed/mjt6Gf-uu6o" frameborder="0" ></iframe>
                <br><br>
                <iframe width="300" height="200" src="https://www.youtube.com/embed/nmpl_HIvqWc" frameborder="0" ></iframe>
            </div>
        </div>  
    </div>  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




    <?php error_reporting(0);
    $requirement=$_POST['requirement'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $area = $_POST['area'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postcode = $_POST['postcode'];
    $detail = $_POST['detail'];
    $pname=rand(1000,10000)."-".$_FILES["proof"]["name"];
$tname=$_FILES["proof"]["tmp_name"];
$uploads_dir='C:\wamp64\www\abuse';
move_uploaded_file($tname, $uploads_dir.'/'.$pname);
$id = rand(1000,10000);

    if(!empty($detail)){
        $host="localhost";
        $dbUsername="root";
        $dbPassword="root";
        $dbname="fur_rescue";
    
        $conn= new mysqli($host,$dbUsername,$dbPassword,$dbname);
    
        if(mysqli_connect_error()){
            die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
        }
        else{
            $SELECT = "SELECT ID From abuse Where ID=? Limit 1";
            $INSERT = "INSERT Into abuse (requirement, name, phone, date, area, city, state, postcode, detail, proof,ID) values( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt=$conn->prepare($SELECT);
            $stmt->bind_param("i",$id);
            $stmt->execute();
            $stmt->bind_result($id);
            $stmt->store_result();
            $rnum=$stmt->num_rows;
    
            if($rnum==0){
                $stmt->close();
                $stmt=$conn->prepare($INSERT);
                $stmt->bind_param("ssissssissi",$requirement, $name, $phone, $date, $area, $city, $state, $postcode, $detail, $pname, $id);
                $stmt->execute();
                echo '<script>alert("Registered Successfully")</script>';
            }
            else{
                echo '<script>alert("Already Registered")</script>';
            }
            $stmt->close();
            $conn->close();
           // die();
        }
    }
    else {
        //echo '<script>alert("Fill the required Fields")</script>';
        die();
      }
    ?>
</body>
</html>