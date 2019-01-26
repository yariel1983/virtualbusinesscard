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
                                <button class="btn btn-default btn-sm"> <a href="#" target="_blank" >Login</a>
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
                    <div class="carousel-item active" id="test" style="background-image: url('https://www.happysailorprinting.com/wp-content/uploads/2017/09/business-cards-mockup.jpg')">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="display-4">First Slide</h2>
                            <p class="lead">This is a description for the first slide.</p>
                        </div>
                    </div>
                    <!-- Slide Two - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('https://sg.fiverrcdn.com/photos/64791514/original/b8fa1a7dda8f61b45dde08648d58d35569230147.jpg?1487305466')">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="display-4">Second Slide</h2>
                            <p class="lead">This is a description for the second slide.</p>
                        </div>
                    </div>
                    <!-- Slide Three - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('https://4.imimg.com/data4/RW/CN/IMOB-38545968/img-20180208-wa0006-jpg-500x500.jpg')">
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
                        <button class="btn btn-default btn-xl"> <a href="#" target="_blank" >Register</a>
                        </button>

                    </div>
                </div>
            </div>
        </section>
    </body>
</html