<!DOCTYPE  html>
<html>>
    <head>
        <title>Virtual Business Card</title>
        <!-- CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    </head>
    <body>
         <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <a class="navbar-brand text-white" href="index.php"><span><i class="fas fa-cloud text-white fa-2x mr-2" href="index.php"></i></span>Virtual Business Card</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
        </nav>
        <1--Empty meassage Cart Div-->
        <div class="container-fluid mt-4 text-center fa-4x" id="designback">&nbsp;
            <p class="text-white">Your shopping Cart is Empty</p>
            <span><i class="fas fa-hand-point-up fa-2x text-white" href="index.php"></i></span>
            <div class="row">
                <div class="col-md-4"></div>

                <div class="col-md-4">
                    <a class="nav-link" href="index.php"><button class="btn btn-info mb-0" id="cartbtn">Return to home</button></a>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
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
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="contact.php">Contact</a></li>
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
        <section style="text-align:center; margin:10px auto;"><p>Designed by <a href="http://enfoplus.net">Yariel Dominguez Freelance Frontend Web Developer</a></p></section>







    

</body>
<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="myscripts.js"></script>
<script type="text/javascript">window.onload = date_time('date_time');</script>
</html>