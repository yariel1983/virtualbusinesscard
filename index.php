<?php include('_inc/header.php'); ?>

<!--Carousel-->

<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-interval="3000" style="background-image:  url('assets/images/444.png')"></div>
        <div class="carousel-item" data-interval="3000" style="background-image:  url('assets/images/333.jpg')"></div>
        <div class="carousel-item" data-interval="3000" style="background-image:  url('assets/images/555.jpg')"></div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<!--Page Content-->

<div class="container-fluid">
    <div class="row pt-5 pb-5 home-banner">
        <div class="col-sm-4">
            <p class="text-center">
                <a class="icon-people text-primary" data-toggle="modal" data-target="#login-modal" id="bannericons"></a>
            </p>
            <h4 class="text-center">
                Login
            </h4>

        </div>
        <div class="col-sm-4">
            <p class="text-center">
                <a class="icon-user text-primary" data-toggle="modal" data-target="#register-modal" id="bannericons"></a>
            </p>
            <h4 class="text-center">
                Register
            </h4>

        </div>
        <div class="col-sm-4">
            <p class="text-center">
                <a class="icon-wallet text-primary" href="https://www.paypal.com/us/home" id="bannericons"></a>
            </p>
            <h4 class="text-center">
                Donate
            </h4>

        </div>
    </div>
</div>    

<!--Banner-->

<div class="container-fluid p-0">
    <div class="row d-flex flex-rap ">

        <!-- First block Card -->
        <div class="col-lg-6 order-lg-1 my-auto p-0">
            <div class="card " >
                <img class="card-img-top" src="assets/images/bcardmock4.jpg" alt="Card image cap" height="500px">
            </div>
        </div>      
        <div class="col-lg-6 order-lg-0 my-auto p-5">
            <div class="firstColumnTex ">
                <h2 class="headerTitle ">Fully Responsive Design</h2>
                <p class="load ">When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether it's a phone, tablet, or desktop the page will behave responsively!</p>
            </div>
        </div>

        <!-- Second block Card -->
        <div class="col-lg-6 order-lg-2 my-auto p-0">
            <div class="card " >
                <img class="card-img-top" src="assets/images/banner1.jpg" alt="Card image cap" height="500px">
            </div>
        </div>  
        <div class="col-lg-6 order-lg-3 my-auto p-5">
            <div class="secondColumnText">
                <h2>Updated For Bootstrap 4</h2>
                <p class="load">Newly improved, and full of great utility classes, Bootstrap 4 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 4!</p>
            </div>
        </div>

        <!-- Third block Card -->
        <div class="col-lg-6  order-lg-5 my-auto p-0">
            <div class="card " >
                <img class="card-img-bottom" src="assets/images/banner2.png" alt="Card image cap" height="500px">
            </div>
        </div>
        <div class="col-lg-6  order-lg-4  my-auto my-auto p-5">
            <div class="thirdColumnText">
                <h2>Easy to Use &amp; Customize</h2>
                <p class="load">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!</p>
            </div>
        </div>  


    </div> 
</div> 

<!--Login-modal-->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="loginmodal-container text-dark" id="modalbg">
            <span><i class="fas fa-cloud text-primary fa-2x mr-2 mt-0"></i></span>Virtual Business Card</a>
            <h4>Login to Your Account</h4><br>
            <form>
                <input type="text" name="user" placeholder="Username">
                <input type="password" name="pass" placeholder="Password">
                <input type="submit" name="login" class="login loginmodal-submit" value="Login">
            </form>

            <div class="login-help">
                <a href="#">Register</a> - <a href="#">Forgot Password</a>
            </div>
        </div>
    </div>
</div>

<!--Register-modal-->
<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="loginmodal-container text-dark" id="modalbg">
            <span><i class="fas fa-cloud text-primary fa-2x mr-2 mt-0"></i></span>Virtual Business Card</a>
            <h4>Login to Your Account</h4><br>
            <form>
                <input type="text" name="Company Name" placeholder="Company Name">
                <input type="text" name="First Name" placeholder="First Name">
                <input type="password" name="Last Name" placeholder="Last Name">
                <input type="text" name="Email" placeholder="Email">
                <input type="submit" name="Register" class="login loginmodal-submit" value="Register">
            </form>

            <div class="login-help">
                <a href="#">Register</a> - <a href="#">Forgot Password</a>
            </div>
        </div>
    </div>
</div>
<!--footer-->
    <?php include('_inc/footer.php'); ?>