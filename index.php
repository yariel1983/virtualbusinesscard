<!DOCTYPE  html>
<html>
    <head>
        <title>Virtual Business Card</title>
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
                <span><i class="fas fa-cloud text-white fa-2x mr-2" href="index.php"></i></span>
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

        <!-- Login Banner -->
        <section class="home-banner text-right mt-5" id="about">
            <div class="container d-flex">
                <div class="row">
                    <div class="col-md-6 col-md-offset-2 text-center mt-5 mb-5"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                    </div>
                    <div class="col-md-6 col-md-offset-2 text-center mt-5 mb-5">
                        <form>
                            <div class="row">
                                <div class="col-sm">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-sm">
                                    <input type="text" class="form-control" placeholder="Password">
                                </div>
                                <button type="button" class="btn btn-light" id="loginbtn">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <header>
            <div id="carouselExampleIndicators" class="carousel slide mt-relative" data-ride="carousel active">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <!-- Slide One - Set the background image for this slide in the line below -->
                    <div class="carousel-item active" id="carousel1" style="background-image: url('https://sg.fiverrcdn.com/photos/117081528/original/7cd730db549fc3247e0be1b4d35a0eb550945b9b.jpg?1536772790')">
                        <div class="carousel-caption d-none d-md-none"></div>
                    </div>
                    <!-- Slide Two - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('https://d4oz43evw1m6y.cloudfront.net/static/images/2x/free-psd-mockup-for-chocolate-bar-packaging-design-f6.jpg')">
                        <div class="carousel-caption d-none d-md-none">
                        </div>
                    </div>
                    <!-- Slide Three - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('https://sg.fiverrcdn.com/photos/117081528/original/7cd730db549fc3247e0be1b4d35a0eb550945b9b.jpg?1536772790')">
                        <div class="carousel-caption d-none d-md-none">
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Page Content Register banner-->       
        <section class="home-banner text-justify" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-lg-offset-2 text-center mt-5 mb-5">
                        <h2 class="section-heading">Want to make an original Business Card yourself?</h2>
                        <hr class="light">
                        <p class="text-faded">Forget that! Who would ever want to put in all of that effort for a website? Just open up your web browser and type "bootstrap template" into your favorite search engine, like Yahoo! or Bing, and you're on your way! There are hundreds of templates to choose from, but go ahead and pick this same exact template from the first result on google, edit a few lines, and you're on your way! No one will notice!</p>
                        <button type="button" class="btn btn-light" id="loginbtn">Register</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Home page icons--> 
        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading mt-5">Services</h2>
                        <hr class="primary">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-globe wow bounceIn text-primary mb-4" id="glow1"style="visibility: visible; animation-name: bounceIn;"></i>
                            <h4>My Template</h4>
                            <p class="text-white">Guaranteed to use the same fucking template that every other bootstrap website uses, downloaded straight from The Web™</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-paper-plane wow bounceIn text-primary mb-4" id="glow1" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceIn;"></i>
                            <h4>This Set of Four Icons</h4>
                            <p class="text-white">Look at this cool set of four icons describing different things about us! We use four, because it's the default.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-thumbs-up wow bounceIn text-primary mb-4" id="glow1" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: bounceIn;"></i>
                            <h4>Lots of effort</h4>
                            <p class="text-white">We even changed some of the icons! We take the extra effort to make our designs truly original.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-heart wow bounceIn text-primary mb-4" id="glow1" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: bounceIn;"></i>
                            <h4>Made with Love</h4>
                            <p class="text-white">Because nothing says hard work and talent like editing a few lines of text.</p>
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
</html>