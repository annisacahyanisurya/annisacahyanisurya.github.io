<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">


    <style type="text/css">
      .img-fitur {
        width: 150px;
        height: 150px;
      }

      #our-products {
        background-color: #ffffff;
      }

      footer {
        background-color: #1e1c1c;
        color: #cecece;
      }

      body {
        background-color: #ffffff;
      }

      b {
        float: right;
      }

      .about{
        background-color: rgb(26, 26, 26);
        font-family: "Sentinel Ssm A";
        color: white;
      }

      .judul_jam{
        font-family: "TradeGothicLTStd,"Helvetica Neue",Helvetica,Arial,sans-serif";
        border-bottom: solid black 5px;
        border-top: solid black 5px;
        margin: 30px 30px 30px 0px;
        text-transform: uppercase;

      }

      .makanan {
        background-color: #000000;
        color: white;
        font-family: monospace;
      }
      .set-navbar {
        margin-top: 0px;
        transition: 1s;
      }
      .remove-navbar {
        margin-top: -80px;
      }
      .sticky-top {
        transition: 1s;
      }
    </style>
    <title>Cafe</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg sticky-top navbar-dark center-block set-navbar" style="background-color: #1a1a1a">
    <a href="index.php"><img id="home" class="image" border="0" src="img/logo.png"  width="80px" style="margin: 1px;padding: 0px color:white;"></a>
    <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#carouselExampleIndicators"> Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#our-products">Our Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
        </ul>
      </div><!-- collapse navbar-collapse -->
  </nav>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-caption">
          <h1>Caveteran</h1>
          <p>Enjoy Sans</p>
      </div><!-- carousel-caption -->
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/1.jpg" alt="First slide">
      </div><!-- carousel-item active -->
      <div class="carousel-item">
        <img class="d-block w-100" src="img/bg5.jpg" alt="Second slide">
      </div><!-- carousel-item -->
      <div class="carousel-item">
        <img class="d-block w-100" src="img/15.jpg" alt="Third slide" >
      </div><!-- carousel-item -->
    </div><!-- carousel-inner -->
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div><!-- carouselExampleIndicators -->

        <span>
            <div class="parallax" style="background: linear-gradient(rgba(1, 1, 1, 0.5), rgba(26, 24, 24, 0.8)) center top / cover, url(img/kitchen.jpg) rgba(134, 128, 128, 0.5); padding-top: 80px; padding-bottom: 80px;   background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover; height: 700px; width: 100%;">
            <div class="container">
              <div class="center row">
                <div class="col-12 col-md-12 col-lg-12">
                  
                    <img class="col-12 col-md-12 col-lg-12" src="img/our_begin.png" width="1050px;" align="center" >
                    <div style=" font-family:'Sentinel Ssm A', 'Sentinel Ssm B'; color: white; margin-top: 20px; font-size: 18px; text-align: justify; ">
                    <h5 >  </h5>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  </p>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </span>




  <div id="our-products" class="container">
    <h2>Our Products </h2>
    <hr>
    <div class="row">
      <div class="col-md-10">
        <h3 class="text-monospace">Coffee</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>

      <div class="col-md-2">
        <img src="img/kopi.jpg" class="img-fitur rounded-circle center-block" >
      </div>
    </div><br>

    <div class="row">
      <div class="col-md-2">
        <img src="img/indomie.jpg" class="img-fitur rounded-circle center-block">
      </div>

      <div class="col-md-10">
        <h3 class="text-monospace">Indomie</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div><br>

    <div class="row">
      <div class="col-md-10">
        <h3 class="text-monospace">Roti Bakar</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>

      <div class="col-md-2">
        <img src="img/rotbak.jpg" class="img-fitur rounded-circle center-block" >
      </div>
    </div><br>

    <div class="row">
      <div class="col-md-2">
        <img src="img/thaitea.jpg" class="img-fitur rounded-circle center-block">
      </div>

      <div class="col-md-10">
        <h3 class="text-monospace">Thai Tea</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div><br>

    <div class="row">
      <div class="col-md-10">
        <h3 class="text-monospace">Nasi Goreng</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          lorem
        </p>
      </div>

      <div class="col-md-2">
        <img src="img/nasi-goreng.jpg" class="img-fitur rounded-circle center-block" >
      </div>
    </div><br><hr>

    <!-- <div class="row">
      <div class="col-4">
        
      </div>

      <div class="col-4 " style="margin-bottom: 40px;">
        <div class="judul_jam">
          <h3>Opening Time</h3>
        </div>
         <div>
          <p>Monday - Friday : 10.00 - 23.00</p>
          <p>Saturday - Sunday : 11. 00 - 23.00</p>
          <p>___</p>
          <p>Weekend brunch: 10.00 — 16:00</p>
          <p>Order for delivery or collection.</p>
        </div>
      </div>

      <div class="col-4" style="margin-bottom: 40px;" >
        <div class="judul_jam"><h3> Location </h3></div>
         <div>
          <p> Email : caveteran@gmail.com </p>
          <p> 021 454545 </p>
          <p>___</p>
          <p> Jln. Veteran No.2A </p>
          <a href=""> View Map </a>
        </div>
      </div>
    </div> -->

    <article class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-md-4 text-xs-left">
          <h3 class="judul_jam" style="margin: 30px 30px 0px 0px;">Make a booking</h3>
              <div class="widget-opentable">
                <div id="ot-widget-container13" data-r3uid="79gwuzCuZ">
                  <iframe src="https://www.opentable.co.uk/widget/reservation/canvas?rid=94833&amp;type=standard&amp;theme=standard&amp;overlay=false&amp;domain=couk&amp;lang=en-GB&amp;r3uid=79gwuzCuZ&amp;newtab=false&amp;disablega=false" width="224" height="301" frameborder="0" scrolling="no" name="opentable-make-reservation-widget" title="Online Bookings | OpenTable, Caravan Exmouth Market"></iframe>
                </div>
              
              </div>
              <p class="m-t-1"></p>
        </div>

        <div class="col-xs-12 col-md-4 text-xs-left">
        <h3 class="judul_jam">Opening times</h3>
        <p>Monday - Friday: 09.00 — 21.00</p>
        <p>Saturday - Sunday: 09.00&nbsp;— 21:00</p>
        <p>____</p>
        <p>Weekend brunch: 10.00 — 16:00&nbsp;</p>
        <p>Order for 
          <a href="https://deliveroo.co.uk/menu/london/clerkenwell/caravan-exmouth-market" target="_blank">delivery</a>&nbsp;or <a href="https://deliveroo.co.uk/menu/london/clerkenwell/caravan-exmouth-market?fulfillment_method=COLLECTION" target="_blank">collection</a>.
        </p>       
        </div>

        <div class="col-xs-12 col-md-4 text-xs-left">
          <h3 class="judul_jam" >Contact</h3>
          <p>
            <a href="mailto:reservations@caravanrestaurants.co.uk?subject=Enquiry for Caravan Exmouth Market" class="green email-js">EMAIL</a>
          </p>
          <p>
            <a href="tel:02078338115">020 7833 8115</a>
          </p>
          <p>11-13 Exmouth Market<br>London EC1R 4QD
          </p>
          <p>
            <a href="https://www.google.com/maps?cid=11203680282437109408" target="_blank" class="green">View map</a>
          </p>
          <p>
            <a href="https://www.facebook.com/CaravanResto/" target="_blank">
              <img src="/perch/resources/smiconartboard-3-1-w640h480.png" alt="facebook" "="">
            </a> 
            <a href="https://twitter.com/caravanresto" target="_blank">
              <img src="/perch/resources/smicon-01-w640h480.png" alt="twitter" "=""></a> 
            <a href="https://www.instagram.com/caravanrestaurants/" target="_blank"> 
              <img src="/perch/resources/smicon-02-w640h480.png" alt="Instagram" style="font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif; font-size: 14px;"></a>
          </p>        
        </div>
              
        </div>
    </article>

  </div>

  <!-- Footer -->
  <footer class="page-footer font-small teal pt-4">

    <!-- Footer Text -->
    <div class="container text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6  mt-md-0 mt-3">

          <!-- Content -->
          <h5 id="about" class="font-weight-bold">About</h5>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita sapiente sint, nulla, nihil
            repudiandae commodi voluptatibus corrupti animi sequi aliquid magnam debitis, maxime quam recusandae
            harum esse fugiat. Itaque, culpa?</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-6 mb-md-0 mb-3">

          <!-- Content -->
          <h5 class="font-weight-bold">Address</h5><form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputName"> Name </label>
              <input type="name" class="form-control" id="exampleInputPassword1">
            </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
            <button type="submit" class="btn btn-outline-light" >Submit</button>
          </form>

        </div>
        
      </div>
    </div>

    <br><br>

    <div class="container" style="padding-left: 325px;"> 
      <div class="row">
        <div class="col-md-12 py-6">
          <div class="mb-5 flex-center">
            <!-- Facebook -->
            <a class="fb-ic">
              <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
              <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
              <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Pinterest-->
            <a class="pin-ic">
              <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
            </a>
          </div><!-- mb-5 flex-center -->
        </div><!-- col-md-12 py-5 -->
      </div><!-- Grid row-->
    </div><!-- Container -->
  </footer><!-- Footer -->

    <script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script>
     document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
    </script>
</body>
</html>
    