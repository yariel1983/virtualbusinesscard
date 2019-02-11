<?php include('_inc/header.php'); ?>
<dvi class="container h-100">
    <div class="d-flex justify-content-center">
        <div class="card mt-5 col-md-4 animated bounceInDown myForm">
            <div class="card-header">
                <h4>Register</h4>
            </div>
            <div class="card-body">
                <form>
                    <div id="dynamic_container">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text br-15"><i class="fas fa-building"></i></span>
                            </div>
                            <input type="text" placeholder="Company Name" class="form-control"/>
                        </div>
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text br-15"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" placeholder="First Name" class="form-control"/>
                        </div>
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text br-15"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="email" placeholder="Last Name" class="form-control"/>
                        </div>
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text br-15"><i class="fas fa-at"></i></span>
                            </div>
                            <input type="email" placeholder="Email" class="form-control"/>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <a class="btn btn-secondary btn-sm" id="remove_more"><i class="fas fa-trash-alt"></i> Remove</a>
                <button class="btn btn-success btn-sm float-right submit_btn text-dark"><i class="fas fa-arrow-alt-circle-right"></i> Submit</button>
            </div>
        </div>
    </div>
</dvi>
<?php include('_inc/footer.php'); ?>