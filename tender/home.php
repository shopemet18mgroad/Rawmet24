<?php
include "connect.php";
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Home Page</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/_buttons.scss">
  <link rel="stylesheet" href="css/buttons.scss">
  <link rel="stylesheet" href="css/reboot.scss">
  <!-- <link rel="stylesheet" href="css/buttons.scss"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css"
    href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
  <link rel="stylesheet" type="text/css"
    href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css"> -->

  <script
    nonce="10103964-004b-4a99-b2c8-e02088e28228">(function (w, d) { !function (bg, bh, bi, bj) { bg[bi] = bg[bi] || {}; bg[bi].executed = []; bg.zaraz = { deferred: [], listeners: [] }; bg.zaraz.q = []; bg.zaraz._f = function (bk) { return function () { var bl = Array.prototype.slice.call(arguments); bg.zaraz.q.push({ m: bk, a: bl }) } }; for (const bm of ["track", "set", "debug"]) bg.zaraz[bm] = bg.zaraz._f(bm); bg.zaraz.init = () => { var bn = bh.getElementsByTagName(bj)[0], bo = bh.createElement(bj), bp = bh.getElementsByTagName("title")[0]; bp && (bg[bi].t = bh.getElementsByTagName("title")[0].text); bg[bi].x = Math.random(); bg[bi].w = bg.screen.width; bg[bi].h = bg.screen.height; bg[bi].j = bg.innerHeight; bg[bi].e = bg.innerWidth; bg[bi].l = bg.location.href; bg[bi].r = bh.referrer; bg[bi].k = bg.screen.colorDepth; bg[bi].n = bh.characterSet; bg[bi].o = (new Date).getTimezoneOffset(); if (bg.dataLayer) for (const bt of Object.entries(Object.entries(dataLayer).reduce(((bu, bv) => ({ ...bu[1], ...bv[1] }))))) zaraz.set(bt[0], bt[1], { scope: "page" }); bg[bi].q = []; for (; bg.zaraz.q.length;) { const bw = bg.zaraz.q.shift(); bg[bi].q.push(bw) } bo.defer = !0; for (const bx of [localStorage, sessionStorage]) Object.keys(bx || {}).filter((bz => bz.startsWith("_zaraz_"))).forEach((by => { try { bg[bi]["z_" + by.slice(7)] = JSON.parse(bx.getItem(by)) } catch { bg[bi]["z_" + by.slice(7)] = bx.getItem(by) } })); bo.referrerPolicy = "origin"; bo.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(bg[bi]))); bn.parentNode.insertBefore(bo, bn) };["complete", "interactive"].includes(bh.readyState) ? zaraz.init() : bg.addEventListener("DOMContentLoaded", zaraz.init) }(w, d, "zarazData", "script"); })(window, document);</script>
</head>
</head>

<body>
  <style>
    .scroller {
      height: 300px !important;
      overflow-y: scroll !important;
      scroll-snap-type: y mandatory !important;
    }

    .scroller section {
      scroll-snap-align: start !important;
    }
  </style>

  <div class="strip">
    <a href="#"><i class="fa-solid fa-phone"></i>&nbsp Helpline No: +91 9945454505</a>
    <div class="container-fluid px-md-5">
      <div id="typedtext" class="ml-5" style="color: white;">
      </div>
    </div>
  </div>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    .strip {
      width: 100%;
      background-color: #3b8beb;
      overflow: auto;
    }

    .strip a {
      float: right;
      margin-right: 15px;
      padding-left: 10px;
      color: white;
      text-decoration: none;
      font-size: 15px;
    }

    .strip a:hover {
      color: white;
    }


    @media screen and (max-width: 500px) {
      .strip a {
        float: none;
        display: block;
      }
    }
  </style>
  <section class="ftco-section" style="padding-top: 5px;">

    <section class="d-flex justify-content-between p-3" style="background-color:white">
      <div class="me-5">
        <img src="image/rawmetlogo.jpeg" width="80px" height="auto" style="border-radius: 5px; margin-left: 40px;">

      </div>&nbsp <p style="  margin-top: 25px;" class="tft">RAWMET24</p>
      <div class="container" style="margin-left: 370px; ">
        <form class="form-inline" action="/action_page.php">
          <label for="email"></label>
          <input type="email" class="form-control" id="email" placeholder="Username" name="email">
          <label for="pwd"></label>&nbsp
          <input type="password" class="form-control" id="pwd" placeholder="Password" name="pswd">&nbsp&nbsp
          <div class="form-check">

          </div><br>
          <a href="signin.html" style="font-size: medium;">
            <i class="fa-solid fa-user-plus"></i>SignIn
          </a>
          <a href="signup.html" style="font-size: medium; padding: 20px; ">
            <i class="fa-solid fa-user-plus"></i>SignUp
          </a>
        </form>
      </div>

    </section>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
          aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav m-auto">
            <li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="tender.php" class="nav-link">Tenders</a></li>
            <li class="nav-item"><a href="auction.php" class="nav-link">Auctions</a></li>
            <li class="nav-item"><a href="deals.php" class="nav-link">Deals</a></li>
            <li class="nav-item"><a href="exclusivedeals.php" class="nav-link">Exclusive Deals</a></li>
            <li class="nav-item"><a href="metalsearch.php" class="nav-link">Metal Prices</a></li>
            <li class="nav-item"><a href="info_page.html" class="nav-link">Information Document</a></li>
            <li class="nav-item"><a href="price.html" class="nav-link">Premium</a></li>
            <li class="nav-item"><a href="price.html" class="nav-link">Premium</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </section>

  <br>
  <section class="home">

    <div class="container">

      <div class="row ">
        <div class="col-12 col-md-10 col-lg-8">
          <form method="GET" action="search.php">

            <form class="card card-sm">
              <div class="card-body row no-gutters align-items-center" style="background-color: #eae9e9;">
                <div class="col-auto">
                  <i class="fa fa-search" style="font-size: 30px; margin-right: 8px;"></i>
                </div>
                <!--end of col-->
                <div class="col">
                  <input class="form-control form-control-lg form-control-borderless" type="search"
                    placeholder="Search topics or keywords" style="padding:10px 0px 10px 6px; margin-right: 100px;">
                </div>
                <select name="sort" style="padding:13px; margin-left: 15px; margin-right: 8px; border-radius:3px;"
                  placeholder="Search ">
                  <option value="date">Procurement Deals</option>
                  <option value="relevance">Tenders </option>
                  <option value="popularity">Service Deals</option>
                  <option value="popularity">Projects</option>
                </select>

                <div class="col-auto">
                  <button class="btn btn-primary" type="submit">Search</button>
                </div>
              </div>
            </form>
        </div>
      </div>
    </div>
    <br>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="https://sppp.assam.gov.in/img/enbanner4.e246bb3c.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://sppp.assam.gov.in/img/enbanner4.e246bb3c.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://sppp.assam.gov.in/img/enbanner4.e246bb3c.jpg" alt="Third slide">
        </div>
      </div>
    </div>
    <br>
    <center style="color: #3b8beb;">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2><span class="counter">252+</span></h2>
            <h4>Tenders</h4>
            <i class="fa fa-users "></i>
          </div>
          <div class="col-md-4">
            <h2><span class="counter">630+</span></h2>
            <h4>Auctions</h4>
            <i class="fa fa-desktop"></i>
          </div>
          <div class="col-md-4">
            <h2><span class="counter">500+</span></h2>
            <h4>Deals</h4>
            <i class="fa fa-user"></i>
          </div>
        </div>
      </div>
    </center><br><br>
    <center>
      <h3 style="color: #3b8beb;">TOP CATEGORIES</h3>
    </center><br>
    <div class="grey-bg container-fluid">

      <section id="minimal-statistics">
        <div class="large">
          <div class="row">
            <div class="col-xl-4 col-sm-6 col-12">

              <div class="card">
                <div class="card-content">
                  <a href="category.html">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="align-self-center">
                          <i class="icon-user secondary font-large-4 float-left"></i>
                        </div>
                        <div class="media-body text-right">
                          <h3>878</h3>
                          <span> Consultancy Tenders</span>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <a href="category.html">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="align-self-center">
                          <i class="bx bxs-truck warning font-large-4 float-left"></i>
                        </div>
                        <div class="media-body text-right">
                          <h3>156</h3>
                          <span>Procurement Tenders</span>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <a href="category.html">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="align-self-center">
                          <i class="icon-settings info font-large-4 float-left"></i>
                        </div>
                        <div class="media-body text-right">
                          <h3>111</h3>
                          <span>Manufacturing Tenders</span>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>

          </div>
      </section>

      <section id="minimal-statistics">
        <div class="large">
          <div class="row">
            <div class="col-xl-4 col-sm-6 col-12">

              <div class="card">
                <div class="card-content">
                  <a href="category.html">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="align-self-center">
                          <i class="icon-trash primary font-large-4 float-left"></i>
                        </div>
                        <div class="media-body text-right">
                          <h3>278</h3>
                          <span>Disposal Tenders</span>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <a href="category.html">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="align-self-center">
                          <i class="icon-briefcase success font-large-4 float-left"></i>
                        </div>
                        <div class="media-body text-right">
                          <h3>136</h3>
                          <span>Business Tenders</span>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <a href="category.html">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="align-self-center">
                          <i class="icon-users danger font-large-4 float-left"></i>
                        </div>
                        <div class="media-body text-right">
                          <h3>236</h3>
                          <span>Public Tenders</span>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>

          </div>
      </section>


      <div class="container"
        style="padding:3% ;border-color: #000000; border-radius: 20px; color: #333231; background-color: #ffffff;">
        <h2 class="GFG" style="color:#3b8beb; font-family: 'Montserrat', sans-serif;">Auctions</h2>
        <div class="card-body">
          <article class="scroller">


            <?php
            $sql = "select * from auction";
            $result = mysqli_query($con, $sql);
            //print_r($result);die;
            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                //print_r($row);die;
                ?>
                <section>
                <h6 style="color:#3b8beb; "> <i class='bx bxs-map'></i><?php echo $row['location'];?>
                          <h5 style="color:#8590aa; font-family: 'Montserrat', sans-serif;">MATERIAL:&nbsp<?php echo $row['material'];?>  </h5>
                        <h5 style="color:#8590aa; font-family: 'Montserrat', sans-serif;"> Approximate Business : ₹<?php echo $row['aucValue']; ?>000.00 </h5>
                        Bid Before :<?php echo $row['endDatetime'];?>
                  
    <p style="color:#3b8beb;">&nbsp<?php echo $row['aucDescription'];?></p>

                  <a href="auction_page.php?g=<?php echo $row['id'];?>"><button
                      style="padding:4px; border-radius: 6px; margin-left: 900px; font-size: 100%;" class="btn btn-primary"
                      type="submit">View Auction</button></h6></a>
                </section>
                <hr>

                <?php
              }
            }
            ?>
          </article>
        </div>
      </div>
      <br>
      <div class="container"
        style="padding:3% ;border-color: #000000; border-radius: 20px; color: #333131; background-color: #ffffff;">
        <h2 class="GFG" style="color:#3b8beb; font-family: 'Montserrat', sans-serif;">Tenders</h2>
        <div class="card-body">
          <article class="scroller">
            <?php
            $sql = "select * from tenders";
            $result = mysqli_query($con, $sql);
            //print_r($result);die;
            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                //print_r($row);die;
                ?>
                <section>
                <h6 style="color:#3b8beb; "> <i class='bx bxs-map'></i><?php echo $row['location'];?>
                 <h5 style="color:#8590aa; font-family: 'Montserrat', sans-serif;">MATERIAL:&nbsp<?php echo $row['material'];?>  </h5>
                <h5 style="color:#8590aa; font-family: 'Montserrat', sans-serif;">Approximate Business: ₹<?php echo $row['tenderValue']; ?>000.00 </h5>
                        Bid Before :<?php echo $row['startDatetime'];?>
                  
    <p style="color:#3b8beb;"> &nbsp<?php echo $row['tenderDesc'];?></p>
                <hr>
                <?php
              }
            }
            ?>

          </article>
        </div>
      </div>
      <br><br><br>
      <div class="container"
        style="padding:3% ;border-color: #000000; border-radius: 20px; color: #333131; background-color: #ffffff;">
        <h2 class="GFG" style="color:#3b8beb; font-family: 'Montserrat', sans-serif;">Deals</h2>
        <div class="card-body">
          <article class="scroller">
            <?php
            $sql = "select * from deals";
            $result = mysqli_query($con, $sql);
            //print_r($result);die;
            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                //print_r($row);die;
                ?>
                <section>
              
                 
                 <h6 style="color:#3b8beb; "> <i class='bx bxs-map'></i><?php echo $row['location'];?>
                 <h5 style="color:#8590aa; font-family: 'Montserrat', sans-serif;">MATERIAL:&nbsp<?php echo $row['material'];?>  </h5>
                <h5 style="color:#8590aa; font-family: 'Montserrat', sans-serif;">Approximate Business: ₹<?php echo $row['expQuotation']; ?>000.00 </h5>
                        Bid Before :<?php echo $row['dealDatetime'];?>
                  
    <p style="color:#3b8beb;"> &nbsp<?php echo $row['specification'];?></p>

                  <a href="deal_page.php?g=<?php echo $row['id'];?>"><button
                      style="padding:4px; border-radius: 6px; margin-left: 900px; font-size: 100%;" class="btn btn-primary"
                      type="submit">View Deal</button></h6></a>
                </section>
                <hr>

                <?php
              }
            }
            ?>
            

          </article>
        </div>
      </div>
      <br><br>
    </div>
  </section>

  <!-- Remove the container if you want to extend the Footer to full width. -->
  


  <!-- Footer -->
  <footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-between p-3" style="background-color:#3b8beb">
      <!-- Left -->

      <div class="me-5">

        <img src="image/rawmetlogo.jpeg" width="60px" height="50px" style="border-radius: 5px;">
      </div>
      <div class="icon" style="font-size: 35px; padding-right: 0px;word-spacing: 10px;">
        <a href="" class="text-white me-4">
          <i class="fa-brands fa-square-facebook"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fa-brands fa-linkedin"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fa-brands fa-instagram"></i>
        </a>

      </div>
      <!-- Left -->

    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold">Company name</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #3b8beb; height: 2px" />
            <p>
              SHOPEMET is a world class general Refined metal trading company that has served as a foundation for growth
              of basic material industry in India
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Key links</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #3b8beb; height: 2px" />
            <p>
              <a href="#!" class="text-white">About Us</a>
            </p>
            <p>
              <a href="#!" class="text-white">Why Tender</a>
            </p>
            <p>
              <a href="#!" class="text-white">Feedback</a>
            </p>
            <p>
              <a href="#!" class="text-white">Solutions</a>
            </p>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Useful links</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #3b8beb; height: 2px" />
            <p>
              <a href="#!" class="text-white">Your Account</a>
            </p>
            <p>
              <a href="#!" class="text-white">Become an Affiliate</a>
            </p>
            <p>
              <a href="#!" class="text-white">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #3b8beb; height: 2px" />
            <p><i class="fa fa-envelope" aria-hidden="true"></i> shopemet@gmail.com</p>
            <p><i class="fa fa-phone" aria-hidden="true"></i> +91 8766443234</p>
            <p><i class="fa fa-phone" aria-hidden="true"></i> +91 1234567819</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">

      © 2023
      <a class="text-white" href="https://mdbootstrap.com/">shopemet.com</a>
    </div>
    <!-- Copyright -->
  </footer>

  <script>

    var aText = new Array(
      "Be INFORMED , Be PREPARED , Be SMART , be SAFE ,be READY to fight #COVID19"

    );
    var iSpeed = 100; // time delay of print out
    var iIndex = 0; // start printing array at this posision
    var iArrLength = aText[0].length; // the length of the text array
    var iScrollAt = 20; // start scrolling up at this many lines

    var iTextPos = 0; // initialise text position
    var sContents = ''; // initialise contents variable
    var iRow; // initialise current row

    function typewriter() {
      sContents = ' ';
      iRow = Math.max(0, iIndex - iScrollAt);
      var destination = document.getElementById("typedtext");

      while (iRow < iIndex) {
        sContents += aText[iRow++] + '<br />';
      }
      destination.innerHTML = sContents + aText[iIndex].substring(0, iTextPos);
      if (iTextPos++ == iArrLength) {
        iTextPos = 0;
        iIndex++;
        if (iIndex != aText.length) {
          iArrLength = aText[iIndex].length;
          setTimeout("typewriter()", 500);
        }
      } else {
        setTimeout("typewriter()", iSpeed);
      }
    }


    typewriter();


  </script>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816"
    integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw=="
    data-cf-beacon='{"rayId":"7c68315d0b4f26b5","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.4.0","si":100}'
    crossorigin="anonymous"></script>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>