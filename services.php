<?php
session_start();
if (!isset($_SESSION["login"])){
  $_SESSION["login"] = 0;
}
// else{
//   if ($_SESSION["login"]== "1"){
//   echo "<script>alert('You are already signed in')</script>";
// }}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Dog</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="ser.css" type="text/css">
</head>
<body style="background: linear-gradient(to right, #c04848, #480048);">
<?php
  //echo $_SESSION["login"];
   if($_SESSION["login"]==0){
    echo "<script>alert('Please Login :>')</script>";
    echo "<script> window.location.assign('sign.php'); </script>";
   }
  ?>
    <div class="container1">
    <nav class="navbar navbar-expand-lg navbar-light bg-white" style="font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;">
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
                <a class="nav-link" href="adopt.php">Adopt</a>
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
                      <img src="AdoptionPic1.jpg" height="800px" width="100%">
                      <h1 style="font-family: 'Garamond'; text-align: center; font-size: 70px;color:#aaa;">GIVE YOUR PET DOG FOR ADOPTION</h1><br>
                      
                      <h2 style="font-family: cursive; font-style: italic; color:#aaa; text-align: center;">Donate your dog and help it reach safe hands.</h2><br><br>
                      <h3 style="font-family: Arial, Helvetica, sans-serif;font-size: 24px; color:#aaa; text-align: justify; font-style: italic; font-family: cursive; margin-left: 5%; margin-right: 5%; ">
                        Be a part of Fur Rescue Team by donating your dog. Register through our website and 
                        fill out the form for giving the dog for adoption. Our dedicated team of doctors will reach the place soon and verify the health conditions of the dog.
                        <br><br>
                        One of the reasons that dogs are abandoned is because people often aren't aware that there are animal organisations which care for dogs. And even when dog owners are aware of these organizations, there is often a cost associated with leaving the animal at a shelter, which can also be a deterrent for some.You might have reasons for not being able to look after your puppy. 
                        <br><br>
                        Take this step and give your fur friend for adoption. Dont just throw away it on to the streets. Few things in life are more fulfilling than taking care of a furry little friend. Stress reduction, unlimited love and plenty of cuddles — nothing sounds better! So help him be a part of a happy family. Team Fur Rescue is all about #AdoptDontShop!
                        <br><br>
                        Fur Rescue provides a safe space where you can give your dog for adoption or take one home, given timely medical aid and rehabilitated. Once the dog is certified, our team will take the dog at the time of adoption when it gets a parent.
                      </h3>
                      <h5 style="font-style: italic; color: rgb(124, 132, 127); text-align: center;">The form is available below. Kindly fill and submit to help your paw friend.</h6>
                        <div class="formbold-main-wrapper">
                          <div class="formbold-form-wrapper" style="border-color: rgb(24, 58, 59); border-radius: 50 px;border-style:double; ">
                            <form action="services.php" method="POST" enctype="multipart/form-data" >
                              <div class="formbold-mb-5 formbold-pt-3">
                                <label class="formbold-form-label formbold-form-label-2">Personal Details</label><br>
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
                                  </div>
                                  <div class="formbold-mb-5 formbold-pt-3">
                                    <label class="formbold-form-label formbold-form-label-2">Dog Details</label><br>
                                    <div class="flex flex-wrap formbold--mx-3">
                                      <div class="w-full sm:w-half formbold-px-3">
                                        <div class="formbold-mb-5">
                                          <label for="dogname" class="formbold-form-label"> Dog Name </label>
                                          <input type="text" name="dogname" required id="dogname" placeholder="Enter Dog Name" class="formbold-form-input"/>
                                        </div>
                                      </div>
                                     <div class="w-full sm:w-half formbold-px-3">
                                        <div class="formbold-mb-5">
                                          <label for="phone" class="formbold-form-label"> Dog Age </label>
                                          <input type="text" required name="dogage" id="dogage" placeholder="Enter Dog Age" class="formbold-form-input"/>
                                        </div>
                                      </div>
                                      <div class="w-full sm:w-half formbold-px-3">
                                        <label for="sex" class="formbold-form-label">Dog Sex</label>
                                        <select name="sex" required id="sex" class="formbold-form-input">
                                            <option value="">           </option>
                                            <option value="Male" class="option">Male</option>
                                            <option value="Female" class="option">Female</option>
                                        </select><br><br>
                                      </div>
                                      <div class="w-full sm:w-half formbold-px-3">
                                        <div class="formbold-mb-5">
                                          <select name="breed" required id="breed" class="formbold-form-input">
                                            <option value="" disabled selected hidden>Choose Dog Breed</option>
                                              <option value="Affenpinscher" class="option">Affenpinscher</option>
                                              <option value="Afghan Hound" class="option">Afghan Hound</option>
                                              <option value="Airedale terrier" class="option">Airedale terrier</option>
                                              <option value="Akita" class="option">Akita</option>
                                              <option value="Alaskan Malamute" class="option">Alaskan Malamute</option>
                                              <option value="American Staffordshire terrier" class="option">American Staffordshire terrier</option>
                                              <option value="American water spaniel" class="option">American water spaniel</option>
                                              <option value="Australian cattle dog" class="option">Australian cattle dog</option>
                                              <option value="Australian shepherd" class="option">Australian shepherd</option>
                                              <option value="Australian terrier" class="option">Australian terrier</option>
                                              <option value="Basenji" class="option">Basenji</option>
                                              <option value="Basset hound" class="option">Basset hound</option>
                                              <option value="Beagle" class="option">Beagle</option>
                                              <option value="Bearded collie" class="option">Bearded collie</option>
                                              <option value="Bedlington terrier" class="option">Bedlington terrier</option>
                                              <option value="Bernese mountain dog" class="option">Bernese mountain dog</option>
                                              <option value="Bichon frise"class="option">Bichon frise</option>
                                              <option value="Black and tan coonhound" class="option">Black and tan coonhound</option>
                                              <option value="Bloodhound" class="option">Bloodhound</option>
                                              <option value="Border collie" class="option">Border collie</option>
                                              <option value="Border terrier" class="option">Border terrier</option>
                                              <option value="Borzoi" class="option">Borzoi</option>
                                              <option value="Boston terrier" class="option">Boston terrier</option>
                                              <option value="Bouvier des Flandres" class="option">Bouvier des Flandres</option>
                                              <option value="Boxer" class="option">Boxer</option>
                                              <option value="Briard" class="option">Briard</option>
                                              <option value="Brittany" class="option">Brittany</option>
                                              <option value="Brussels griffon" class="option">Brussels griffon</option>
                                              <option value="Bull terrier" class="option">Bull terrier</option>
                                              <option value="Bulldog" class="option">Bulldog</option>
                                              <option value="Bullmastiff" class="option">Bullmastiff</option>
                                              <option value="Cairn terrier" class="option">Cairn terrier</option>
                                              <option value="Canaan dog" class="option">Canaan dog</option>   
                                              <option value="Chesapeake Bay retriever" class="option">Chesapeake Bay retriever</option>
                                              <option value="Chihuahua" class="option">Chihuahua</option>
                                              <option value="Chinese crested" class="option">Chinese crested</option>
                                              <option value="Chinese shar-pei" class="option">Chinese shar-pei</option>
                                              <option value="Chow chow" class="option">Chow chow</option>
                                              <option value="Clumber spaniel" class="option">Clumber spaniel</option>
                                              <option value="Cocker spaniel" class="option">Cocker spaniel</option>
                                              <option value="Collie" class="option">Collie</option>
                                              <option value="Curly-coated retriever" class="option">Curly-coated retriever</option>
                                              <option value="Dachshund" class="option">Dachshund</option>
                                              <option value="Dalmatian" class="option">Dalmatian</option>
                                              <option value="Doberman pinscher" class="option">Doberman pinscher</option>
                                              <option value="English cocker spaniel" class="option">English cocker spaniel</option>
                                              <option value="English setter" class="option">English setter</option>
                                              <option value="English springer spaniel" class="option">English springer spaniel</option>
                                              <option value="English toy spaniel" class="option">English toy spaniel</option>
                                              <option value="Eskimo dog" class="option">Eskimo dog</option>
                                              <option value="Finnish spitz" class="option">Finnish spitz</option>
                                              <option value="Flat-coated retriever" class="option">Flat-coated retriever</option>
                                              <option value="Fox terrier" class="option">Fox terrier</option>
                                              <option value="Foxhound" class="option">Foxhound</option>
                                              <option value="French bulldog" class="option">French bulldog</option>
                                              <option value="German shepherd" class="option">German shepherd</option>
                                              <option value="German shorthaired pointer" class="option">German shorthaired pointer</option>
                                              <option value="German wirehaired pointer" class="option">German wirehaired pointer</option>
                                              <option value="Golden retriever" class="option">Golden retriever</option>
                                              <option value="Gordon setter" class="option">Gordon setter</option>
                                              <option value="Great Dane" class="option">Great Dane</option>
                                              <option value="Greyhound" class="option">Greyhound</option>
                                              <option value="Irish setter" class="option">Irish setter</option>
                                              <option value="Irish water spaniel"class="option">Irish water spaniel</option>
                                              <option value="Irish wolfhound" class="option">Irish wolfhound</option>
                                              <option value="Jack Russell terrier" class="option">Jack Russell terrier</option>
                                              <option value="Japanese spaniel" class="option">Japanese spaniel</option>
                                              <option value="Keeshond" class="option">Keeshond</option>
                                              <option value="Kerry blue terrier" class="option">Kerry blue terrier</option>
                                              <option value="Komondor" class="option">Komondor</option>
                                              <option value="Kuvasz" class="option">Kuvasz</option>
                                              <option value="Labrador retriever" class="option">Labrador retriever</option>
                                              <option value="Lakeland terrier" class="option">Lakeland terrier</option>
                                              <option value="Lhasa apso" class="option">Lhasa apso</option>
                                              <option value="Maltese" class="option">Maltese</option>
                                              <option value="Manchester terrier" class="option">Manchester terrier</option>
                                              <option value="Mastiff" class="option">Mastiff</option>
                                              <option value="Mexican hairless" class="option">Mexican hairless</option>
                                              <option value="Newfoundland" class="option">Newfoundland</option>
                                              <option value="Norwegian elkhound" class="option">Norwegian elkhound</option>
                                              <option value="Norwich terrier" class="option">Norwich terrier</option>
                                              <option value="Otterhound" class="option">Otterhound</option>
                                              <option value="Papillon" class="option">Papillon</option>
                                              <option value="Pekingese" class="option">Pekingese</option>
                                              <option value="Pointer" class="option">Pointer</option>
                                              <option value="Pomeranian" class="option">Pomeranian</option>
                                              <option value="Poodle" class="option">Poodle</option>
                                              <option value="Pug" class="option">Pug</option>
                                              <option value="Puli" class="option">Puli</option>
                                              <option value="Rhodesian ridgeback" class="option">Rhodesian ridgeback</option>
                                              <option value="Rottweiler" class="option">Rottweiler</option>
                                              <option value="Saint Bernard" class="option">Saint Bernard</option>
                                              <option value="Saluki" class="option">Saluki</option>
                                              <option value="Samoyed" class="option">Samoyed</option>
                                              <option value="Schipperke" class="option">Schipperke</option>
                                              <option value="Schnauzer" class="option">Schnauzer</option>
                                              <option value="Scottish deerhound" class="option">Scottish deerhound</option>
                                              <option value="Scottish terrier" class="option">Scottish terrier</option>
                                              <option value="Sealyham terrier" class="option">Sealyham terrier</option>
                                              <option value="Shetland sheepdog" class="option">Shetland sheepdog</option>
                                              <option value="Shih tzu" class="option">Shih tzu</option>
                                              <option value="Siberian husky" class="option">Siberian husky</option>
                                              <option value="Silky terrier" class="option">Silky terrier</option>
                                              <option value="Skye terrier" class="option">Skye terrier</option>
                                              <option value="Staffordshire bull terrier" class="option">Staffordshire bull terrier</option>
                                              <option value="Soft-coated wheaten terrier" class="option">Soft-coated wheaten terrier</option>
                                              <option value="Sussex spaniel" class="option">Sussex spaniel</option>
                                              <option value="Spitz" class="option">Spitz</option>
                                              <option value="Tibetan terrier" class="option">Tibetan terrier</option>
                                              <option value="Vizsla" class="option">Vizsla</option>
                                              <option value="Weimaraner" class="option">Weimaraner</option>
                                              <option value="Welsh terrier" class="option">Welsh terrier</option>
                                              <option value="West Highland white terrier" class="option">West Highland white terrier</option>
                                              <option value="Whippet" class="option">Whippet</option>
                                              <option value="Yorkshire terrier" class="option">Yorkshire terrier</option>
                                              <option value="Others" class="option">Others</option>
                                              </select>
                                        </div>
                                      </div>
                                      <div class="formbold-mb-5">
                                        <label for="" class="" style="margin-left: 40px;" >Reason for giving your dog*</label>
                                        <div class="option">
                                          <br>
                                        <input type="checkbox" name="Reason[]" value="Moving"  class="form-input" style="height: 12px; width: 100px;">Moving <br>
                                        <input type="checkbox" name="Reason[]" value="Landlord not allowing Pet"  class="form-input" style="height: 12px; width: 100px;">Landlord not allowing Pet<br>
                                        <input type="checkbox" name="Reason[]" value="Too many animals in household"  class="form-input" style="height: 12px; width: 100px; ">Too many animals in household<br>
                                        <input type="checkbox" name="Reason[]" value="Cost of Maintenance"  class="form-input" style="height: 12px; width: 100px; ">Cost of Maintenance<br>
                                        <input type="checkbox" name="Reason[]" value="Personal problems"  class="form-input" style="height: 12px; width: 100px;">Personal problems <br>
                                        <input type="checkbox" name="Reason[]" value="Inadequate facilities"  class="form-input" style="height: 12px; width: 100px;">Inadequate facilities<br>
                                        <input type="checkbox" name="Reason[]" value="Too many animals in household"  class="form-input" style="height: 12px; width: 100px; ">Too many animals in household<br>
                                        <input type="checkbox" name="Reason[]" value="Other Reasons" class="form-input" style="height: 12px; width: 100px; ">Other Reasons<br>
                                        </div>   
                                      </div>
                  
                <div class="formbold-mb-5 formbold-pt-3">
                  <label class="formbold-form-label formbold-form-label-2">Address Details</label>
                  <div class="flex flex-wrap formbold--mx-3">
                    <div class="w-full sm:w-half formbold-px-3">
                      <div class="formbold-mb-5">
                        <input type="text" required name="location" id="area" placeholder="Enter area" class="formbold-form-input"/>
                      </div>
                    </div>
                    <div class="w-full sm:w-half formbold-px-3">
                      <div class="formbold-mb-5">
                        <input type="text" class="formbold-form-input" id="city" name="city" required placeholder="Enter city">     
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
                        <input type="tel" name="pincode" id="pincode/" pattern="[1-9]{1}[0-9]{5}" maxlength="6" required placeholder="Enter Pincode" class="formbold-form-input"/>
                      </div>
                    </div>
                  </div>
                  
                      <div class="w-full sm:w-half formbold-px-3"></div>
                      <div class="formbold-mb-5">
                        <label for="" class="" style="margin-left: 40px;" >Health Issues</label>
                        <input type="text" name="health" id="health" required style="margin-left: 40px;" placeholder="Give the Health Concerns(if any)" class="health"/>
                      </div>
                      
                      <div class="formbold-mb-5">
                          <label for="" class="" style="margin-left: 40px;">Detailed Features</label><br>
                          <input type="text" class="health" name="features" id="food" style="margin-left: 40px;" required  placeholder="example: Features">
                      </div>
                    </div>
                       <br>
                       <div class="w-full sm:w-half formbold-px-3">
                        <label for="" class="" style="margin-left: 40px;" >Pictures of Dog*<br></label>
                        <input type="file" name="dogpic" multiple="true" style="margin-left: 40px;" required><br><br>
                       </div>
                       <div class="w-full sm:w-half formbold-px-3">
                        <label for="" class="" style="margin-left: 40px;" >Vaccination certificates*<br></label>
                        <input type="file" name="vacc" multiple="true" style="margin-left: 40px;" required><br><br>
                       </div>
                       <div class="w-full sm:w-half formbold-px-3">
                        <label for="" class="" style="margin-left: 40px;" >Owner's aadhar*<br></label>
                        <input type="file" name="aadhar" multiple="true" style="margin-left: 40px;" required><br><br>
                       </div>
                        
                </div>
              </div>
            </div>
            <div>
              <button class="formbold-btn" style="background-color: rgb(50, 63, 63);">Submit</button>
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
$dogname = $_POST['dogname'];
$dogage = $_POST['dogage'];
$sex = $_POST['sex'];
$breed = $_POST['breed'];
$checkbox1=$_POST['Reason'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   } 
$location = $_POST['location'];
$city = $_POST['city'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
$health = $_POST['health'];
$features = $_POST['features']; 

$pname=rand(1000,10000)."-".$_FILES["dogpic"]["name"];
$tname=$_FILES["dogpic"]["tmp_name"];
$uploads_dir='C:\wamp64\www\petdog';
move_uploaded_file($tname, $uploads_dir.'/'.$pname);

$pname1=rand(1000,10000)."-".$_FILES["vacc"]["name"];
$tname1=$_FILES["vacc"]["tmp_name"];
$uploads_dir1='C:\wamp64\www\petdog';
move_uploaded_file($tname1, $uploads_dir1.'/'.$pname1);

$pname2=rand(1000,10000)."-".$_FILES["aadhar"]["name"];
$tname2=$_FILES["aadhar"]["tmp_name"];
$uploads_dir2='C:\wamp64\www\petdog';
move_uploaded_file($tname1, $uploads_dir2.'/'.$pname2);
$id = rand(1000,10000);
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
        $SELECT = "SELECT ID From petdog Where ID=? Limit 1";
        $INSERT = "INSERT Into petdog (name, phone, dogname, dogage, sex, breed, requirement, location, city, state, pincode, health, features, dogpic, vacc, aadhar, ID) values( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt=$conn->prepare($SELECT);
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->bind_result($id);
        $stmt->store_result();
        $rnum=$stmt->num_rows;

        if($rnum==0){
            $stmt->close();
            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("sissssssssisssssi",$name, $phone, $dogname, $dogage, $sex, $breed, $chk, $location, $city, $state, $pincode, $health, $features, $pname, $pname1, $pname2, $id);
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
