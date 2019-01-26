<!DOCTYPE  html>
<html>>
    <head>
        <title>Virtual Business </title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container" id="homelogo">
                <span><i class="fas fa-cloud text-white fa-2x mr-2" id="homelogo"></i></span>
                <a class="navbar-brand text-white"  href="#">Virtual Business Card</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <span><i class="fas fa-shopping-cart text-white" id="carticon"></i></span>
                            <span class="badge badge-pill badge-danger text-danger" id="cartnoti">5</span>
                            <a class="nav-link" href="#"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="home-banner text-right" id="about">
            <div class="container d-flex">
                <div class="row">
                    <div class="col-md-6 col-md-offset-2 text-center mt-5 mb-5"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                    </div>
                    <div class="col-md-6 col-md-offset-2 text-center mt-5 mb-5">
                        <form>
                            <div class="row">
                                <div class="col-sm">
                                    <input type="text" class="form-control" placeholder="First name">
                                </div>
                                <div class="col-sm">
                                    <input type="text" class="form-control" placeholder="Last name">
                                </div>
                                <button class="btn btn-default btn-xl"id="loginbtn"> <a href="#" target="_blank" >Login</a>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <header>
            <div id="carouselExampleIndicators" class="carousel slide mt-relative" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <!-- Slide One - Set the background image for this slide in the line below -->
                    <div class="carousel-item active" id="carousel1" style="background-image: url('https://sg.fiverrcdn.com/photos/117081528/original/7cd730db549fc3247e0be1b4d35a0eb550945b9b.jpg?1536772790')">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="display-4">First Slide</h2>
                            <p class="lead">This is a description for the first slide.</p>
                        </div>
                    </div>
                    <!-- Slide Two - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('https://d4oz43evw1m6y.cloudfront.net/static/images/2x/free-psd-mockup-for-chocolate-bar-packaging-design-f6.jpg')">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="display-4">Second Slide</h2>
                            <p class="lead">This is a description for the second slide.</p>
                        </div>
                    </div>
                    <!-- Slide Three - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('https://sg.fiverrcdn.com/photos/117081528/original/7cd730db549fc3247e0be1b4d35a0eb550945b9b.jpg?1536772790')">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="display-4">Third Slide</h2>
                            <p class="lead">This is a description for the third slide.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </header>

        <!-- Page Content -->
        <section class="home-banner text-justify" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-lg-offset-2 text-center mt-5 mb-5">
                        <h2 class="section-heading">Want to make an original Business Card yourself?</h2>
                        <hr class="light">
                        <p class="text-faded">Forget that! Who would ever want to put in all of that effort for a website? Just open up your web browser and type "bootstrap template" into your favorite search engine, like Yahoo! or Bing, and you're on your way! There are hundreds of templates to choose from, but go ahead and pick this same exact template from the first result on google, edit a few lines, and you're on your way! No one will notice!</p>
                        <button class="btn btn-default btn-xl" id="registerbtn"> <a href="#" target="_blank" >Register</a>
                        </button>
                    </div>
                </div>
            </div>
        </section>

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
                            <i class="fa fa-4x fa-globe wow bounceIn text-primary" style="visibility: visible; animation-name: bounceIn;"></i>
                            <h3>This Fucking Template</h3>
                            <p class="text-muted">Guaranteed to use the same fucking template that every other bootstrap website uses, downloaded straight from The Web™</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-paper-plane wow bounceIn text-primary" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceIn;"></i>
                            <h3>This Set of Four Icons</h3>
                            <p class="text-muted">Look at this cool set of four icons describing different things about us! We use four, because it's the default.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-thumbs-up wow bounceIn text-primary" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: bounceIn;"></i>
                            <h3>Lots of effort</h3>
                            <p class="text-muted">We even changed some of the icons! We take the extra effort to make our designs truly original.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: bounceIn;"></i>
                            <h3>Made with Love</h3>
                            <p class="text-muted">Because nothing says hard work and talent like editing a few lines of text.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!----------- Footer ------------>
        <footer class="footer-bs" id="carousel1">
            <div class="row">
                <div class="col-md-3 footer-brand animated fadeInLeft">
                    <span><i class="fas fa-cloud text-white fa-2x mb-2 mr-2" id="homelogo"></i>Virtual Business Card</span>
                    <p>Suspendisse hendrerit tellus laoreet luctus pharetra. Aliquam porttitor vitae orci nec ultricies. Curabitur vehicula, libero eget faucibus faucibus, purus erat eleifend enim, porta pellentesque ex mi ut sem.</p>
                    <p>© 2019 Yariel Dominguez UI, All rights reserved</p>
                </div>
                <div class="col-md-4 footer-nav animated fadeInUp">
                    <h4>Menu —</h4>
                    <div class="col-md-6">
                        <ul class="pages">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Nature</a></li>
                            <li><a href="#">Explores</a></li>
                            <li><a href="#">Science</a></li>
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
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fas fa-search"></i></span></button>
                        </span>
                    </div><!-- /input-group -->
                    </p>
                </div>
            </div>
        </footer>
        <section style="text-align:center; margin:10px auto;"><p>Designed by <a href="http://enfoplus.net">Yariel Dominguez</a></p></section>

    </div>

</body>
</html