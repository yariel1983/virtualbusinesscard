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
            <div class="container-fluid" id="homelogo">
                <span><i class="fas fa-cloud text-white fa-2x mr-2" href="index.php"></i></span>
                <a class="navbar-brand text-white"  href="index.php" id="homelogo">Virtual Business Card</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex" id="navbarResponsive">
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
                            <a class="nav-link" href="services.php">Services</a>
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
            </div>
        </nav>
        <div class="container-fluid mt-5 text-center fa-4x">
            <p>Your shopping Cart is Empty</p>
            <span><i class="fas fa-hand-point-up fa-2x" href="index.php"></i></span>
            <div class="row">
                <div class="col-md-4"></div>

                <div class="col-md-4">
                    <a class="nav-link" href="index.php"><button class="btn btn-info mb-0" id="cartbtn">Return to home</button></a>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>






       

    </div>

</body>
<script src="myscripts.js"></script>
<script type="text/javascript">window.onload = date_time('date_time');</script>
</html