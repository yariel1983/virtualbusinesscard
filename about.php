<?php include('_inc/header.php'); ?>

<!-- Container (About Section) -->
<div id="carouselExampleIndicators" class="carousel slide text-center" data-ride="carousel">

    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="carousel-caption d-none d-md-block">
                <section id="testimonialSection" class="text-center">
                    <div class="container">
                        <h2 class="mb-5 font-weight-bold" >Meet the team</h2>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="testimonialItem mx-auto mb-5 mb-lg-0">
                                    <img class="img-fluid rounded-circle mb-3" src="assets/images/yariel.png" alt>
                                    <h5 class="font-weight-bold text-white">Yariel Dominguez UI Developer</h5>
                                    <p class="font-weight-light mb-0 text-white">"This is fantastic! Thanks so much guys!"</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="testimonialItem mx-auto mt-5 mb-lg-0">
                                    <span><i class="fas fa-code fa-9x mb-4 text-white"></i></span>


                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="testimonialItem mx-auto mb-5 mb-lg-0">
                                    <img class="img-fluid rounded-circle mb-3" src="assets/images/paul.jpeg" alt>
                                    <h5 class="font-weight-bold">Paul Ferra Software Engineer</h5>
                                    <p class="font-weight-light mb-0 text-white">"Thanks so much for making these free resources available to us!"</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="carousel-item">
            <div class="carousel-caption d-none d-md-block">
                <div class="jumbotron jumbotron-fluid" id="jumbotron1">
                    <div class="container">
                        <!-- Container (Services Section) -->
                        <div id="services" class="container-fluid text-center mt-5">

                            <div class="row slideanim">
                                <div class="col-sm-4">
                                    <span><i class="fas fa-leaf fa-4x mb-4 text-success"></i></span>
                                    <h4>GREEN</h4>
                                    <p>Go Green With Virtual Business cards..</p>
                                </div>
                                <div class="col-sm-4">
                                    <span><i class="fas fa-certificate fa-4x mb-4 text-warning"></i></span>
                                    <h4>CERTIFIED</h4>
                                    <p>Full Stack Developers..</p>
                                </div>
                                <div class="col-sm-4">
                                    <span><i class="fas fa-heart fa-4x mb-4 text-danger"></i></span>
                                    <h4>LOVE</h4>
                                    <p>Made With Love..</p>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item" id="carouselregister">
            
            <div class="carousel-caption d-none d-md-block text-white">
                <h1>Please Register<br></h1>
                <button class="btn btn-success btn-outline mt-5 mb-5" data-toggle="modal" data-target="#register-modal" id="registerbtn"> Register</button>
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


<div class="container-fluid mt-0">
    <div class="container prices mt-5">
        <div class="row">
            <div class="col-sm-2 col-md-4 col-lg-4">
                <div class="option">
                    <div class="option-title">
                        <h3>Standard</h3>
                        <span>Affordable</span>
                    </div>
                    <div class="option-price">
                        <span class="price">$10</span>
                        <span class="period">50 Virtual Cards</span>
                    </div>
                    <div class="option-list">
                        <ul class="item-list">
                            <li><strong>Free</strong> Account</li>
                            <li><strong>50 Free</strong> Welcome Virtual Cards</li>
                            <li><strong>1 Month</strong> Application Access</li>
                            <li><strong>Expires</strong> in 1 Month</li>
                            <li><strong>Total</strong><div class="qr" id="order1"> 100 Virtual Cards a Month</div></li>
                        </ul>
                        <a type="button" href="checkout.php" class="btn btn-success big"><i class="fa fa-hand-o-right hided-icon big"></i> Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-md-4 col-lg-4">
                <div class="option">
                    <div class="option-title">
                        <h3>Advance</h3>
                        <span>most valued</span>
                    </div>

                    <div class="option-price">
                        <span class="price">$60</span>
                        <span class="period">6 months</span>
                    </div>

                    <div class="option-list">
                        <ul class="item-list">
                            <li><strong>Free</strong> Account</li>
                            <li><strong>Free</strong> Renovation</li>
                            <li><strong>6 Months</strong> Application Access</li>
                            <li><strong>Expires</strong> in 6 Months</li>
                            <li><strong>Total</strong><div class="qr" id="order1"> 200 Virtual Cards a Month</div></li>
                        </ul>
                        <a type="button" href="checkout.php" class="btn btn-success big"><i class="fa fa-hand-o-right hided-icon big"></i> Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-md-4 col-lg-4">
                <div class="option">
                    <div class="option-title">
                        <h3>Unlimited</h3>
                        <span>extended version</span>
                    </div>

                    <div class="option-price">
                        <span class="price">$99</span>
                        <span class="period">Full 1 Year</span>
                    </div>

                    <div class="option-list">
                        <ul class="item-list">
                            <li><strong>Free</strong> Account</li>
                            <li><strong>Free</strong> Renovation</li>
                            <li><strong>1 Year</strong> Application Access</li>
                            <li><strong>Expires</strong> in 1 Year</li>
                            <li><strong>Total</strong><div class="qr" id="order1"> Unlimited for 1 Year</div></li>
                        </ul>
                        <a type="button" href="checkout.php" class="btn btn-success big" ><i class="fa fa-hand-o-right hided-icon big"></i> Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <?php include('_inc/footer.php'); ?>