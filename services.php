<?php include('_inc/header.php'); ?>
<!--Page Content-->
<div class="container-fluid" style="background-image:  url('assets/images/333.jpg')">
    <div class="container portfolio mb-3">&nbsp;
        <div class="row">
            <div class="col-sm-12">
                <div class="heading">				
                    <span><i class="fas fa-cloud text-primary fa-2x ml-2 mr-2" href="index.php"></i>Virtual Business Card</span>
                </div>
            </div>	
        </div>
        <div class="bio-info">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                            <div class="bio-image">
                                <img src="http://placehold.it/350x400" class="img-responsive" alt="a" />                            
                            </div>
                        </div>
                    </div>	
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xs-6">
                    <div class="bio-content text-center mb-5">                    
                        <form>
                            <div class="row mt-5">
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mb-3">
                                    <input type="text" class="form-control" placeholder="Company Name">
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mt-5">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mt-2">
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 mt-2">
                                    <input type="text" class="form-control" placeholder="fax">
                                </div>
                            </div>
                        </form>

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-4">
                                    <a class="fb-ic">
                                        <i class="fab fa-facebook-f fa-lg text-primary fa-2x mt-5"> </i>
                                    </a>    
                                </div>
                                <div class="col-sm-4">
                                    <a class="tw-ic">
                                        <i class="fab fa-twitter fa-lg text-primary fa-2x mt-5"> </i>
                                    </a>    
                                </div>
                                <div class="col-sm-4">
                                    <a class="gplus-ic">
                                        <i class="fab fa-instagram fa-lg text-danger fa-2x mt-5"> </i>
                                    </a>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
        <!--buttons-->
        <div class="container heading text-center mt-5">
            <div class="row">
                <div class="col-sm-6">
                    <button class="btn btn-outline-primary"  id="designbtn">Upload image</button>
                </div>
                <div class="col-sm-3">
                    <button class="btn btn-outline-danger"  id="designbtn">Reset</button>
                </div>
                <div class="col-sm-3">
                    <a class="btn btn-outline-success"  href="checkout.php" id="designbtn">Save & Pay</a>
                </div>


            </div>  
        </div>
    </div>   
    <?php include('_inc/footer.php'); ?>