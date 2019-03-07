<?php include('_inc/header.php'); ?>
<section class="wrapper fixed-top" style="background-image:  url('assets/images/landingOriginal.jpg')">
    <div class="overlays"></div>

    <!--Mascara de imagen-->
    <div class="container h-100">
        <div class="row h-100 justify-content-between align-items-center">
            <div class="col-lg-12">
                <div class="text-center">
                    <h1 class="mt-5 text-faded">Do you want to make your own 
                        Virtual Business Card?</h1>

                    <button class="btn btn-outline-primary  mt-5 mb-5" data-toggle="modal" data-target="#login-modal" id="loginbtn"> Login</button>
                    <button class="btn btn-success btn-outline mt-5 mb-5" data-toggle="modal" data-target="#register-modal" id="registerbtn"> Register</button>

                    <h3>Are you tired ordering business cards?...</h3>
                    <h4> Then, this is for you</h4>

                </div>


            </div>
        </div>
    </div>

</section> 

<!--Page Content-->


<br>
<section>
    <div class="container p-0 bg-white mt-2" id="landingbanner">
        <div class="row d-flex flex-rap ">

            <!-- First block Card -->
            <div class="col-md-6 order-sm-0 my-auto p-0">
                <div class="card border-0" >
                    <img class="card-img-top border-0" src="assets/images/banner11.jpg" alt="Card image cap" height="500px">
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
                    <img class="card-img-top" src="assets/images/banner11111.jpg" alt="Card image cap" height="500px">
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
                    <img class="card-img-bottom" src="assets/images/banner111111.jpg" alt="Card image cap" height="500px">
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
                <div class="modal-body mx-4">
                    <!--Body-->
                    <div class="md-form mb-3">
                        <input type="email" id="defaultRegisterFormEmail" class="form-control" placeholder="E-mail">

                        <label data-error="wrong" data-success="right" for="Form-email1"></label>
                    </div>

                    <div class="md-form pb-3">
                        <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                        <label data-error="wrong" data-success="right" for="Form-pass1"></label>
                        <p class="font-small blue-text d-flex justify-content-end">Forgot <a href="#" class="blue-text ml-1">
                                Password?</a></p>
                    </div>

                    <div class="text-center mb-3">
                        <button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Sign in</button>
                    </div>
                    <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Sign in
                        with:</p>

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
                    <p class="font-small grey-text d-flex justify-content-end">Not a member? <a href="#" class="blue-text ml-1">
                            Sign Up</a></p>
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
                <div class="modal-body mx-4">
                    <!--Body-->
                    <div class="row">
                        <div class="md-form mb-3 col-md-6">
                            <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name">
                            <label data-error="wrong" data-success="right" for="Form-email1"></label>
                        </div>
                        <div class="md-form mb-3 col-md-6">
                            <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name">
                            <label data-error="wrong" data-success="right" for="Form-email1"></label>
                        </div>
                        <div class="md-form pb-3 col-md-12">
                            <input type="email" id="defaultRegisterFormEmail" class="form-control" placeholder="E-mail">
                            <label data-error="wrong" data-success="right" for="Form-pass1"></label>

                        </div>

                        <div class="md-form pb-3 col-md-12">
                            <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                            <label data-error="wrong" data-success="right" for="Form-pass1"></label>

                        </div>
                    </div>
                    <div class="text-center mb-3">
                        <button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Sign in</button>
                    </div>
                    <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Sign up
                        with:</p>

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
                    <p class="font-small grey-text d-flex justify-content-end">Already a member? <a href="#" class="blue-text ml-1">
                            Sign in</a></p>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    

    <!--footer-->
    <?php include('_inc/footer.php'); ?>