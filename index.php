<?php include('_inc/header.php'); ?>
<!-- Header -->
<header class="masthead d-flex" style="background-image:  url('assets/images/landinpage1.jpg')" id="landingpage1">
    <div class="container text-center my-auto">
        <h1 class="mb-1">Do you want to make your own 
            <i class="fab fa-edge"></i>-Business Card?</h1>
        <button type="button" name="login" id="loginbtn" class="btn btn-info btn-outline  mt-5 mb-5" data-toggle="modal" data-target="#login-modal"> Login</button>
        <button class="btn btn-info btn-outline mt-5 mb-5" data-toggle="modal" data-target="#register-modal" id="registerbtn"> Register</button>

    </div>
    <div class="overlay"></div>
</header>

<section class="content-section" id="homejumb">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h2>Are you tired ordering Business Cards ???</h2>
                <p class="lead mb-5">This is the next Generation Industry. 
                    <a href="#"></a></p>
                <a class="btn btn-info btn-outline btn-xl js-scroll-trigger" id="loginbtn" href="#services">Find out More</a>
            </div>
        </div>
    </div>
</section>



<!-- Container (Carousel Section) -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/images/carousel1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="bg-light">Welcome to the next Generation</h1>
                
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/images/carousel2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="bg-light">No more Waiting</h1>
                
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/images/carousel3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="bg-light">Grow your Business with one click</h1>
                
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


<br>
<section>
    <div class="container p-0 bg-white" id="landingbanner">
        <div class="row d-flex flex-rap ">
            <!-- First block Card -->
            <div class="col-md-6 col-sm-12 order-sm-0 my-auto p-0">
                <div class="card border-0 portfolio-item" >
                    <img class="card-img-top border-0" src="assets/images/banner1.jpg" alt="Card image cap" height="500px">
                </div>
            </div>      
            <div class="col-md-6 col-sm-12 order-sm-1 my-auto p-5">
                <div class="text-center">
                    <h2 class="headerTitle text-muted">Login into your free account</h2>
                    <p class="load ">Use our business card builder</p>
                </div>
            </div>
            <!-- Second block Card-->
            <div class="col-md-6 order-sm-3 my-auto p-0">
                <div class="card border-0 portfolio-item" >
                    <img class="card-img-top" src="assets/images/banner2.jpg" alt="Card image cap" height="500px">
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
                <div class="card border-0 mb-4 portfolio-item" >
                    <img class="card-img-bottom mb-2" src="assets/images/banner3.jpg" alt="Card image cap" height="500px">
                </div>
            </div>
            <div class="col-md-6  order-sm-5  my-auto my-auto p-5">
                <div class="text-center border-0 mb-4">
                    <h2 class="headerTitle text-muted">Easy to Use &amp; Customize</h2>
                    <p class="load">Save your project and ready to go!</p>
                </div>
            </div>  
        </div> 
    </div>



    <!-- Login Modal -->
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content form-elegant">
                <!--Header-->
                <div class="modal-header text-center">
                    <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Sign in</strong></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="container sign-form">
                    <form>
                        <div class="form-group-md">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email:" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group-md">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password:" required><small id="passwordHelpInline" class="text-muted">
                                Must be 8-20 characters long.
                            </small>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn input-block-level form-control btn-rounded z-depth-1a" id="Submit-btn" onclick="myFunction()">Login</button>
                        </div>
                    </div>
                </div>
                <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> Follow us on:</p>
                <div class="row my-3 d-flex justify-content-center">
                    <!--Facebook-->
                    <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fab fa-facebook-f text-center"></i></button>
                    <!--Twitter-->
                    <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fab fa-twitter"></i></button>
                    <!--Google +-->
                    <button type="button" class="btn btn-white btn-rounded z-depth-1a"><i class="fab fa-google-plus-g"></i></button>
                </div>
                <!--Footer-->
                <div class="modal-footer mx-5 pt-3 mb-0">
                    <p class="font-small grey-text d-flex justify-content-end">Not a member? <a href="#register-modal" data-toggle="modal" data-target="#register-modal" class="blue-text ml-1">
                            Register</a></p>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>

    <!-- Register Modal -->
    <div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content form-elegant">
                <!--Header-->
                <div class="modal-header text-center">
                    <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Sign up</strong></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="container sign-form">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email:" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Password</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Password:" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Full Address:" required>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor:" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="inputCity" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="DC">District Of Columbia</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" id="inputZip" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn input-block-level form-control btn-rounded z-depth-1a" id="Submit-btn">Register</button>
                    </form>
                    <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> Follow us on:</p>

                    <div class="row my-3 d-flex justify-content-center">
                        <!--Facebook-->
                        <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fab fa-facebook-f text-center"></i></button>
                        <!--Twitter-->
                        <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fab fa-twitter"></i></button>
                        <!--Google +-->
                        <button type="button" class="btn btn-white btn-rounded z-depth-1a"><i class="fab fa-google-plus-g"></i></button>
                    </div>
                </div>
                <!--Footer-->
                <div class="modal-footer mx-5 pt-3 mb-1">

                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!--footer-->




    <?php include('_inc/footer.php'); ?>

