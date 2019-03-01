<?php include('_inc/header.php'); ?>
<section class="wrapper fixed-top" style="background-image:  url('assets/images/home1_1.jpg')">
    <div class="overlays">
        <main>

            <nav class="floating-menu mt-5">
                <ul class="main-menu">
                    <li>
                        <a href="#" class="ripple">
                            <i class="fas fa-home fa-lg"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="ripple">
                            <i class="far fa-user fa-lg"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="ripple">
                            <i class="far fa-address-card fa-lg"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="ripple">
                            <i class="fas fa-cogs fa-lg"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="ripple">
                            <i class="fab fa-blogger-b fa-lg"></i>
                        </a>
                    </li>
                </ul>
                <div class="menu-bg"></div>
            </nav>
        </main>
    </div><!--Mascara de imagen-->
    <div class="container h-100">
        <div class="row h-100 justify-content-between align-items-center">
            <div class="col-lg-12">
                <div class="text-center">
                    <h1 class="mt-5 text-faded">Do you want to make your own 
                        Virtual Business Card?</h1>
                    <p>Are you tired of been printing business cards? Waiting for them to be delivery at your door step.
                    </p>
                    <button class="btn btn-success btn-outline mt-5" data-toggle="modal" data-target="#login-modal" id="loginbtn"> LOGIN</button>
                    <button class="btn btn-outline-primary  mt-5" data-toggle="modal" data-target="#register-modal" id="registerbtn"> REGISTER</button>

                </div>


            </div>
        </div>
    </div>

</section> 

<!--Carousel
<div class="container-fluid mt-5">
    <div class="item active">
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="4000" style="background-image:  url('assets/images/444.png')"></div>
                <div class="carousel-item" data-interval="4000" style="background-image:  url('assets/images/333.jpg')"></div>
                <div class="carousel-item" data-interval="4000" style="background-image:  url('assets/images/555.jpg')"></div>

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







<!--Page Content

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
<section>
    <div class="container p-0 mt-5 bg-white">
        <div class="row d-flex flex-rap ">

            <!-- First block Card -->
            <div class="col-md-6 order-sm-0 my-auto p-1">
                <div class="card border-0" >
                    <img class="card-img-top border-0" src="assets/images/2images.jpg" alt="Card image cap" height="500px" width="50px">
                </div>
            </div>      
            <div class="col-md-6 order-sm-1 my-auto p-5">
                <div class="text-center">
                    <h2 class="headerTitle text-muted">Log into your free account</h2>
                    <p class="load ">Use our business card builder</p>
                </div>
            </div>

            <!-- Second block Card-->
            <div class="col-md-6 order-sm-3 my-auto p-0">
                <div class="card border-0" >
                    <img class="card-img-top" src="assets/images/5images.jpg" alt="Card image cap" height="500px" width="50px">
                </div>
            </div>  
            <div class="col-md-6 order-lg-2 my-auto p-5">
                <div class="text-center">
                    <h2 class="headerTitle text-muted">Load your image</h2>
                    <p class="load">Design your Business card</p>
                </div>
            </div>

            <!-- Third block Card-->
            <div class="col-md-6  order-sm-4 my-auto p-0">
                <div class="card border-0" >
                    <img class="card-img-bottom" src="assets/images/1img.jpg" alt="Card image cap" height="500px" width="50px">
                </div>
            </div>
            <div class="col-md-6  order-sm-5  my-auto my-auto p-5">
                <div class="text-center border-0">
                    <h2 class="headerTitle text-muted">Easy to Use &amp; Customize</h2>
                    <p class="load">Save your project and ready to go!</p>
                </div>
            </div>  


        </div> 
    </div>

    

    <!-- Login Modal -->
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span><i class="fas fa-cloud text-primary fa-2x mr-2 mt-0 mb-2"></i></span>
                    <h5 class="modal-title" id="exampleModalLabel">Virtual Business Card</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">                       
                            <input type="email" class="form-control form-control-lg mb-1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                            <label for="exampleInputEmail1">Email</label>
                        </div>
                        <div class="form-group">                        
                            <input type="password" class="form-control form-control-lg mb-1" id="exampleInputPassword1" placeholder="Password">
                            <label for="exampleInputPassword1">Password</label>
                        </div>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1">
                            <label class="custom-control-label" for="customSwitch1">Remember me</label>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btnmodalclose">Close</button>
                    <button type="button" class="btn btn-primary" id="btnmodallogin">Login</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Register Modal -->
    <div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span><i class="fas fa-cloud text-primary fa-2x mr-2 mt-0 mb-2"></i></span>
                    <h5 class="modal-title" id="exampleModalLabel">Virtual Business Card</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">                        
                            <input type="text" class="form-control form-control-lg mb-1" id="exampleInputEmail1" aria-describedby="Company" placeholder="Company">
                            <label for="exampleInputEmail1">Company</label>
                        </div>
                        <div class="form-group">                        
                            <input type="email" class="form-control form-control-lg mb-1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                            <label for="exampleInputEmail1">Email</label>
                        </div>
                        <div class="form-group">                        
                            <input type="password" class="form-control form-control-lg mb-1" id="exampleInputPassword1" placeholder="Password">
                            <label for="exampleInputPassword1">Password</label>
                        </div>                    
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btnmodalclose">Close</button>
                    <button type="button" class="btn btn-primary" id="btnmodalregister">Register</button>
                </div>
            </div>
        </div>
    </div>

    <!--footer-->
    <?php include('_inc/footer.php'); ?>