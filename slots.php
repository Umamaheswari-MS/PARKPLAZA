<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ParkPlaza</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
</head>

<body>


  <header>
    <div class="content flex_space">
      <div class="logo">
        <img src="images/logo-6.png" alt="">
      </div>
      <div class="navlinks">
        <ul id="menulist">
          <li><a href="#home">home</a> </li>
          <li><a href="#about">about</a> </li>
          <li><a href="#contact">contact</a> </li>
          <li> <i class="fa fa-search"></i> </li>
          <li><a href="index.php"> <button class="primary-btn">Book now!</button> </a> </li>
        </ul>
        <span class="fa fa-bars" onclick="menutoggle()"></span>
      </div>
    </div>
  </header>

<!-- MENU BAR SCRIPT  -->
  <script>
    var menulist = document.getElementById('menulist');
    menulist.style.maxHeight = "0px";

    function menutoggle() {
      if (menulist.style.maxHeight == "0px") {
        menulist.style.maxHeight = "100vh";
      } else {
        menulist.style.maxHeight = "0px";
      }
    }
  </script>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  

  <script>
    // JavaScript for handling dropdown selection
    document.getElementById('cityDropdown').addEventListener('change', function() {
        var selectedCity = this.value;
        // You can perform actions based on the selected city code
        console.log('Selected City Code:', selectedCity);
    });
</script>
<section class="slots-main">
<div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Recent comment and chats -->
                    <!-- ============================================================== -->
                    <div class="row formContainer">
                        <div class="col-12 col-lg-12">
                            <div class="container mt-5 text-center">
                                <button class="btn btn-primary rounded-circle p-4 capture-btn" style="width: 100px; height: 100px;" onclick="openCamera()">
                                    <i class="fas fa-camera fa-3x"></i>
                                </button>
                            </div>
                            <div class="container mt-2 text-center text-light hidden" id="cameraSection">
                                <div class="col-12 col-sm-auto">

                                    <video id="webCam" autoplay playsinline height="178px" width="178px" class="img-fluid"></video>
                                </div>
                                <div class="col-12">

                                    <canvas id="canvas" style="display: none;"></canvas>
                                </div>
                                <div class=" row">
                                    <div class="col-12">

                                        <a onclick="takeAPicture()" class="btn btn-primary capture-btn hidden" id="captureButton">Capture</a>
                                        <a onclick="retakePicture()" class="btn btn-secondary capture-btn hidden" id="retakeButton">Retake</a>
                                    </div>

                                </div>




                            </div>
                            <div class="card mt-custom">


                                <div class="card">
                                    <form id="detailsForm" class="form-horizontal" method="post" action="process_booking.php">

                                        <div class="card-body">
                                            <!-- Hidden field for image data -->
                                            <input type="hidden" id="imageData" name="image" value="">



                                            <h4 class="card-title">Personal Info</h4>
                                            <div class="form-group row">
                                              <label for="imageUpload" class="col-sm-3 control-label col-form-label">Upload Image</label>
                                              <div class="col-sm-9">
                                                <input type="file" class="form-control-file" id="imageUpload" accept="image/*" onchange="previewImage()">
                                               </div>
                                            </div>
                                            <div class="form-group row">
                                                <input type="hidden" id="id" value="">
                                                <label for="name" class="col-sm-3  control-label col-form-label">Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="name" placeholder=" Name Here">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="mno" class="col-sm-3  control-label col-form-label">Mobile Number</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="mno" placeholder="Mobile no">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="PA" class="col-sm-3  control-label col-form-label">Time</label>
                                                <div class="col-sm-9">
                                                    <input type="Text" class="form-control" id="PA" placeholder="No of persons">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="dep" class="col-sm-3  control-label col-form-label">Segment of Car</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" id="dep">
                                                        <option value="">Select Car Segment</option>
                                                        <option value="Entry Level Hatchback">Entry Level Hatchback</option>
                                                        <option value="Compact hatchback">Compact hatchback</option>
                                                        <option value="Premium hatchback">Premium hatchback</option>
                                                        <option value="Compact sedan">Compact sedan</option>
                                                        <option value="Compact SUV">Compact SUV</option>
                                                        <option value="Mid-size sedan">Mid-size sedan</option>
                                                        <option value="Mid-size SUV">Mid-size SUV</option>
                                                        <option value="Full-size sedan">Full-size sedan</option>
                                                        <option value="Full-size SUV">Full-size SUV</option>
                                                    </select>
                                                </div>
                                            </div>

                                           
                                              
                                            <div class="form-group row">
                                                <label for="reson" class="col-sm-3  control-label col-form-label">Note (optional)</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" id="reson" name="reason"></textarea>
                                                </div>
                                            </div>
                                            
                                          
                                        <div class="border-top">
                                            <div class="card-body text-center">
                                                <button type="button" class="btn btn-rounded btn-primary" id="submitButton">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
</section>

  

  <footer>

    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="box">
          
            <h2>ParkPlaza</h2>
            <p>ParkEase Hub is an advanced parking management platform that seamlessly connects vehicle owners with available parking spaces. The intuitive interface enables users to effortlessly search and book parking spots through an interactive map. Property owners, including homeowners and landlords, can monetize their spaces by uploading information about available parking.</p>
    
            <div class="icon">
              <i class="fa fa-facebook-f"></i>
              <i class="fa fa-instagram"></i>
              <i class="fa fa-twitter"></i>
              <i class="fa fa-youtube"></i>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="box">
            <h2>Contact Us</h2>
            <p>We would love to respond to your queries.
              Feel free to get in touch with us.
            </p>
            <i class="fa fa-location-dot"></i>
            <label>M.Kumarasamy college of Engineering,
              Karur,
              Tamil Nadu </label> <br>
            <i class="fa fa-phone"></i>
            <label>[+91] 97877 62929</label> <br>
            <i class="fa fa-envelope"></i>
            <label>parkingslots.4@gmail.com</label> <br>
          </div>
        </div>
      </div>
    </div>




  </footer>

  <div class="legal">
    <p class="container">Copyright (c) 2022 Copyright Holder All Rights Reserved.</p>
  </div>



  <script src="https://kit.fontawesome.com/032d11eac3.js" crossorigin="anonymous"></script>
  <script>
                function getLatestImage() {
                    $.ajax({
                        url: 'image.php',
                        type: 'GET',
                        dataType: 'text',
                        success: function(data) {
                            const imagePath = data.trim();
                            $('#profileImage').attr('src', imagePath);
                        },
                        error: function() {
                            console.error("Error fetching the latest image.");
                        }
                    });
                }
        </script>
        <script>
        $(document).ready(function() {
            $('#closeModalButton').on('click', function() {

                $('#myModal').modal('hide');
                $('.badgebtn').load(window.location.href + ' .badgebtn');
                $('.navbadgebutton').load(window.location.href + ' .navbadgebutton');

            });
        });
    </script>
    <script>
    function previewImage() {
        var input = document.getElementById('imageUpload');
        var imagePreview = document.getElementById('imagePreview');

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                // Display the preview image
                imagePreview.src = e.target.result;
                // Optionally, you can save the image data to the hidden input
                document.getElementById('imageData').value = e.target.result;
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

</body>

</html>