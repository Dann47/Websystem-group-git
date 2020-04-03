<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Websystems Group Project</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Data-Table-1.css">
    <link rel="stylesheet" href="assets/css/Data-Table.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/MUSA_product-display-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_product-display.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean-button" style="background-color: rgb(0,0,0);">
        <div class="container"><a class="navbar-brand" href="index.html" style="padding: 0px;color: rgb(23,21,146);width: 200px;">J's Electronic's &amp; More</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1" style="background-color: #171592;"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="AboutUs.html">AboutUs</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="ContactUs.html">ContactUs</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="Products.php">Products</a></li>
                </ul><span class="navbar-text actions"> <a class="text-primary login" href="Login.php">Log In</a><a class="btn btn-light active action-button" role="button" href="Register.php" style="background-color: rgb(23,21,146);">Register</a></span></div>
        </div>
    </nav>
    <div class="register-photo">
        <div class="form-container">
            <form method="post" action="RegisterValidate.php">
                <h2 class="text-center"><strong>Register&nbsp;</strong>an account.</h2>
                <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Vendor Name" required ></div>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" required></div>
                <div class="form-group"><input type="text" name="Contact" placeholder="(876)-XXX-XXXX" class="form-control" inputmode="tel" required /></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"required></div>
                <div class="form-group"><input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)"required></div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"></label></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color: rgb(23,21,146);">Sign Up</button></div><a href="Login.php" class="already">You already have an account? Login here.</a></form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/MUSA_product-display.js"></script>
</body>

</html>