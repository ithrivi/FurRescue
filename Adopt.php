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
    <title>Adopt</title>
    
    <link rel="stylesheet" href="pdt.css" type="text/css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
<?php
  //echo $_SESSION["login"];
   if($_SESSION["login"]==0){
    echo "<script>alert('Please Login :>')</script>";
    echo "<script> window.location.assign('sign.php'); </script>";
   }
  ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="#">
          <img src="logonew2.jpg" style="height: 120px; width: 120px;" alt="">
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
            </ul>
          </div>
        </nav>
        <form action="Adopt.php" method="POST">
    <div class="container py-5">
        <div class="row text-center text-white mb-5">
            <div class="col-lg-7 mx-auto">
                <h1 class="display-4">Adopt Your Paw Friend <i class='fas fa-paw' style='font-size:80px'></i></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- List group-->
                <ul class="list-group shadow">
                    <!-- list group item-->
                    <li class="list-group-item">
                        <!-- Custom content-->
                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                            <div class="media-body order-2 order-lg-1">
                                <h5 class="mt-0 font-weight-bold mb-2">Mia (ID: 1234)</h5>
                                <p class="font-italic text-muted mb-0 small">3 months | Shih Tzu | Female | Bengaluru</p>
                                <div class="d-flex align-items-center justify-content-between mt-1">
                                  <button type="button" class="btn btn-success" style="margin-left: 2%; margin-top: 5%; width: 100px; height: 40px;"> <a href="Adoption.php" style="color: white;">Adopt</a></button>
                               
                                </div>
                            </div><img src="shihtzu.png" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
                        </div> <!-- End -->
                    </li> <!-- End -->
                    <!-- list group item-->
                    <li class="list-group-item">
                        <!-- Custom content-->
                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                            <div class="media-body order-2 order-lg-1">
                                <h5 class="mt-0 font-weight-bold mb-2">Tobby (ID: 1505)</h5>
                                <p class="font-italic text-muted mb-0 small">2 months | Saint Bernard | Male | Bengaluru</p>
                                <div class="d-flex align-items-center justify-content-between mt-1">
                                  <button type="button" class="btn btn-success" style="margin-left: 2%; margin-top: 5%; width: 100px; height: 40px;"> <a href="Adoption.php" style="color: white;">Adopt</a></button>
                               
                                </div>
                            </div><img src="saintbernard.jpg" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
                        </div> <!-- End -->
                    </li> <!-- End -->
                    <!-- list group item -->
                    <li class="list-group-item">
                        <!-- Custom content-->
                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                            <div class="media-body order-2 order-lg-1">
                                <h5 class="mt-0 font-weight-bold mb-2">Jerry (ID: 1525)</h5>
                                <p class="font-italic text-muted mb-0 small">2 months | Doberman | Male | Bengaluru</p>
                                <div class="d-flex align-items-center justify-content-between mt-1">
                                  <button type="button" class="btn btn-success" style="margin-left: 2%; margin-top: 5%; width: 100px; height: 40px;"> <a href="Adoption.php" style="color: white;">Adopt</a></button>
                               </div>
                            </div><img src="dobermann.jpg" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
                        </div> <!-- End -->
                    </li> <!-- End -->
                    
                    <!-- list group item -->
                    <li class="list-group-item">
                      <!-- Custom content-->
                      <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                          <div class="media-body order-2 order-lg-1">
                              <h5 class="mt-0 font-weight-bold mb-2">Lisa (ID: 1255)</h5>
                              <p class="font-italic text-muted mb-0 small">2 months | Labrador | Female | Bengaluru</p>
                              <div class="d-flex align-items-center justify-content-between mt-1">
                                <button type="button" class="btn btn-success" style="margin-left: 2%; margin-top: 5%; width: 100px; height: 40px;"> <a href="Adoption.php" style="color: white;">Adopt</a></button>
                              </div>
                          </div><img src="labrador.jpg" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
                      </div> <!-- End -->
                  </li> <!-- End -->
                    <!-- list group item -->
                    <li class="list-group-item">
                        <!-- Custom content-->
                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                            <div class="media-body order-2 order-lg-1">
                                <h5 class="mt-0 font-weight-bold mb-2">Drax (ID: 1001)</h5>
                                <p class="font-italic text-muted mb-0 small">1 month | Rottweiler | Female | Trivandrum</p>
                                <div class="d-flex align-items-center justify-content-between mt-1">
                                  
                                <button type="button" class="btn btn-success" style="margin-left: 2%; margin-top: 5%; width: 100px; height: 40px;"> <a href="Adoption.php" style="color: white;">Adopt</a></button>
                             
                                </div>
                            </div><img src="rottweiler.jpg" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
                        </div> <!-- End -->
                    </li> <!-- End -->
                </ul> <!-- End -->
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
</html>