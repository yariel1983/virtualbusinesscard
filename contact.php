<!DOCTYPE  html>
<html>>
    <head>
        <title>Virtual Business </title>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <script src="myscripts.js"></script>
        <script type="text/javascript">window.onload = date_time('date_time');</script>

    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">

            <div class="container-fluid">
                <button class="navbar-toggler text-left" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <span><i class="fas fa-cloud text-white fa-2x mr-2" Virtual Business Card></i></span>
                <a class="navbar-brand text-white"  href="index.php">Virtual Business Card</a>

                <div class="collapse navbar-collapse d-flex" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Design</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart.php"><span><i class="fas fa-shopping-cart text-white" id="carticon"></i></span>
                                <span class="badge badge-pill badge-danger text-danger" id="cartnoti">0</span>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

         <section  id="aboutsection">
       <div class="container-fluid" >
           <h3 class="text-center text-uppercase">contact us</h3>
           <p class="text-center w-75 m-auto"></p>
           <div class="row" id="carousel1">
             <div class="col-sm-12 col-md-4 col-lg-4 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-phone fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">call us</h4>
                    <p>+1 (786) 546-0950</p>
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-4 col-lg-4 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">office location</h4>
                   <address>900 SW 6th Ave Suite 303 Miami Florida, 33130</address>
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-4 col-lg-4 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-globe fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">email</h4>
                    <p>pcprogrammer4all@gmail.com</p>
                  </div>
                </div>
             </div>
           </div>
       </div>
    </section>
       
        <!----------- Footer ------------>
        <footer class="footer-bs" id="carousel1">
            <div class="row">
                <div class="col-md-3 footer-brand animated fadeInLeft">
                    <span><i class="fas fa-cloud text-white fa-2x mb-2 mr-2"></i>Virtual Business Card</span>
                    <p>Suspendisse hendrerit tellus laoreet luctus pharetra. Aliquam porttitor vitae orci nec ultricies. Curabitur vehicula, libero eget faucibus faucibus, purus erat eleifend enim, porta pellentesque ex mi ut sem.</p>
                    <p>© 2019 Yariel Dominguez UI, All rights reserved</p>
                </div>
                <div class="col-md-4 footer-nav animated fadeInUp">
                    <h4>Menu —</h4>
                    <div class="col-md-6">
                        <ul class="pages">
                            <li><a href="#">Designs</a></li>
                            <li><a href="#">Category</a></li>
                            <li><a href="#">Demo</a></li>
                            <li><a href="#">Donate</a></li>
                            <li><a href="#">Advice</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contacts</a></li>
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 footer-social animated fadeInDown">
                    <h4>Follow Us</h4>
                    <ul>
                        <li><a href="#"><span class="fab fa-facebook fa-2x"></span></a></li>
                        <li><a href="#"><span class="fab fa-instagram fa-2x"></span></a></li>
                        <li><a href="#"><span class="fab fa-twitter fa-2x"></span></a></li>
                        <li><a href="#"><span class="fab fa-linkedin fa-2x"></span></a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-ns animated fadeInRight">
                    <h4>Newsletter</h4>
                    <p>A rover wearing a fuzzy suit doesn’t alarm the real penguins</p>
                    <p>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button class="btn btn-light ml-0" type="button" id="footerbtn"><i class="fas fa-search"></i></span></button>
                        </span>
                    </div><!-- /input-group -->
                    </p>
                </div>
            </div>
        </footer>
        <section style="text-align:center; margin:10px auto;"><p>Designed by <a href="http://enfoplus.net">Yariel Dominguez</a></p></section>

    </div>

</body>
<script src="myscripts.js"></script>
<script type="text/javascript">window.onload = date_time('date_time');</script>
</html