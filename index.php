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
          <li> <a href="slots.php"><button class="primary-btn" >ENTER SLOT</button> </a></li>
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
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      dots: false,
      navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"],
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })
  </script>




  

  <script>
    // JavaScript for handling dropdown selection
    document.getElementById('cityDropdown').addEventListener('change', function() {
        var selectedCity = this.value;
        // You can perform actions based on the selected city code
        console.log('Selected City Code:', selectedCity);
    });
</script>



  <section class="about top">
    <div class="container flex">
      <div class="left">
        <div class="heading">
          <h1>WELCOME</h1>
          <h2>PARKPLAZA</h2>
        </div>
        <p>The platform allows vehicle owners to easily locate available parking spots through an interactive map,
            while property owners can upload and rent out their unused parking spaces. The system integrates a secure
            payment gateway for online transactions and features a notification system to alert users before their parking time expires.
            An admin dashboard enables parking lot managers to monitor utilization, revenue generation, and other performance metrics,
            contributing to improved traffic management and user convenience.</p>
        <!-- <button class="primary-btn">ABOUT US</button> -->
      </div>
      <div class="right">
        <img src="images/about.png" alt="">
      </div>
    </div>
  </section>
  <section class="book">
    <div class="container flex_space">
      <div class="text">
        <h1> <span>Book </span> Your Slot </h1>
      </div>
      <div class="form">
        <form class="grid">
          <input type="date" value="adate" placeholder="Arrival Date">
          <input type="date" value="ddate" placeholder="Departure Date">
          <input type="text" value="time" placeholder="Time">

            <select id="cityDropdown">
              <label for="cityDropdown"></label>          
              <option value="">Car</option>
              <option value="elh">Entry Level Hatchback</option>
              <option value="ch">Compact hatchback</option>
              <option value="ph">Premium hatchback</option>
              <option value="cs">Compact sedan</option>
              <option value="cs">Compact SUV</option>
              <option value="Msedan">Mid-size sedan</option>
              <option value="Msuv">Mid-size SUV</option>
              <option value="fsedan">Full-size sedan</option>
              <option value="fsuv">Full-size SUV</option>
              </select>

              <select id="cityDropdown">
                <label for="cityDropdown"></label>          
                <option value="">City</option>
                <option value="Gandhipuram">Gandhipuram</option>
                <option value="RR Puram">Rathinasabapathy Puram</option>
                <option value="Peelamedu">Peelamedu</option>
                <option value="Saravanampatti">Saravanampatti</option>
                <option value="Ramanathapuram">Ramanathapuram</option>
                <option value="Kavundampalayam">Kavundampalayam</option>
                <option value="Singanallur">Singanallur</option>
                <option value="Vadavalli">Vadavalli</option>
                <option value="Tidel Park">Tidel Park</option>
                <option value="Saibaba Colony">Saibaba Colony</option>
                <option value="Avinashi Road">Avinashi Road</option>
                <option value="Ukkadam">Ukkadam</option>
                <option value="Podanur">Podanur</option>
                <option value="Sundarapuram">Sundarapuram</option>
                <option value="Thudiyalur">Thudiyalur</option>
                <option value="Vadavalli">Vadavalli</option>
                <option value="Puliakulam">Puliakulam</option>
                <option value="Kalapatti">Kalapatti</option>
                </select>

          <input type="submit" value="CHECK AVAILABILITY">
        </form>
      </div>
    </div>
  </section>

<br>
<br>
<br>
<br>
<br>


  




 

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
    <p class="container">Copyright (c) 2024.</p>
  </div>



  <script src="https://kit.fontawesome.com/032d11eac3.js" crossorigin="anonymous"></script>
</body>

</html>