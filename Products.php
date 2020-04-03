<?PHP
//continue session continued from the validate.php
    session_start();
    
    /* prints the values in the session if it has values */
    //print_r($_SESSION);
    
    if(isset($_SESSION['errflag']))
    {
        foreach($_SESSION as $key => $value)    //store SESSION values in to local variables
        {
            $$key = $value;
        }
        //session_destroy();        //destroys the session once the values are loaded. REFRESH to clear the fields
    }
    else
    {
        // default variable values
        $profilePic = "";

        // default error message
        $imgerr = "";
        
        session_destroy();
    }
?>
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
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/MUSA_product-display-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_product-display.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" type="text/css" media="screen" href="style/screen.css" />
<link rel="stylesheet" type="text/css" href="style/style.css" media="all">
</head>

<body>
    <!-- Guest User -->
<?php
if($_SESSION['login_user']== NULL)
{?>

<div>
        <nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean-button" style="background-color: rgb(0,0,0);">
            <div class="container"><a class="navbar-brand" href="index.php" style="padding: 0px;color: rgb(23,21,146);width: 200px;">J's Electronic's &amp; More</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1" style="background-color: #171592;"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="AboutUs.php">AboutUs</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="ContactUs.php">ContactUs</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="Products.php">Products</a></li>
                    </ul><span class="navbar-text actions"> <a class="text-primary login" href="Login.php">Log In</a><a class="btn btn-light bounce animated infinite action-button" role="button" href="Register.php" style="background-color: rgb(23,21,146);">Register</a></span></div>
              </div>
        </nav>
    

    
    </div>

    <?php
}
    
    
    ?>

<!-- Logged in user -->

<?php
if($_SESSION['login_user']!= NULL)
{?>

<div>
        <nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean-button" style="background-color: rgb(0,0,0);">
            <div class="container"><a class="navbar-brand" href="index.php" style="padding: 0px;color: rgb(23,21,146);width: 200px;">J's Electronic's &amp; More</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1" style="background-color: #171592;"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="AboutUs.php">AboutUs</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="ContactUs.php">ContactUs</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="Products.php">Products</a></li>
                    </ul><span class="navbar-text actions"> <a class="text-primary login" href="Logout.php">Log Out</a><a class="text-primary" role="button" href="#" >Welcome <?php echo $_SESSION['login_user'];?></a></span></div>
              </div>
        </nav>
    

    
    </div>

    <?php
}
    
    
    ?>

<?php
    if(isset($_POST['submit']))
    {
        $productName = $_POST["product_name"];
        $productCode = $_POST["product_code"];
        $manufacturer = $_POST["manufacturer"];
        $manufacturerDate = $_POST["manufacturer_date"];
        $productType = $_POST["product_type"];
        $productDescription = $_POST["product_description"];
        $costPrice = $_POST["cost_price"];
        $salesPrice = $_POST["sales_price"];
        $quantity = $_POST["quantity_in_stock"];

        // VALIDATION OF IMAGE UPLOAD
    
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["profilePic"]["name"]);   // e.g. uploads/filename.png
        
        //rawurlencode(var) converts file name to raw URL encode (e.g " " => %20)
        
        $exists = 0;
        $uploadOk = 1;  //status of upload
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        
        // Check if image file is a actual image or fake image
    //  if(isset($_POST["btn_submit"])) 
    //  {
            $check = getimagesize($_FILES["profilePic"]["tmp_name"]);
            
            if($check !== false) 
            {
                $_SESSION['imgerr'] = "<p style = 'color:green; font-size: 50%'>File is an image - " . $check["mime"] . ".</p>";
                $uploadOk = 1;
            } 
            else 
            {
                    $_SESSION['imgerr'] = "<p style = 'color:red; font-size: 50%'>File is not an image.</p>";
                    $uploadOk = 0;
                    //$errflag = true;
            }
        //}
        // Check if file already exists
        if (file_exists($target_file)) 
        {
            $_SESSION['imgerr'] = "<p style = 'color:green; font-size: 50%'>Sorry, file already exists.</p>";
            //$uploadOk = 0;
            //$errflag = true;
            $exists = 1;
        }
        
        // Check file size
        if ($_FILES["profilePic"]["size"] > 5000000) //image larger than 5000KB / 5MB
        {
            $_SESSION['imgerr'] = "<p style = 'color:red; font-size: 50%' 
            >Sorry, your file is too large. File Limit: <strong>5MB</strong></p>";
            $uploadOk = 0;
            $errflag = true;
        }
        
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"   && $imageFileType != "gif" ) 
        {
            $_SESSION['imgerr'] = "<p style = 'color:red; font-size: 50%'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</p>";
            $uploadOk = 0;
            $errflag = true;
        }
        
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) 
        {
            $errflag = true;
            // if everything is ok, try to upload file
        } 
        else 
        {
            //upload the file NOW
            
            if ($exists == 0) 
            {
                move_uploaded_file($_FILES["profilePic"]["tmp_name"], $target_file);
                $_SESSION['imgerr'] = "<p style = 'color:green; font-size: 50%'>The file ". basename( $_FILES["profilePic"]["name"]). " has been uploaded.</p>";                         
                $_SESSION['profilePic'] = $target_file;
            } 
            else 
            {
                $_SESSION['imgerr'] = "<p style = 'color:green; font-size: 50%'>The file ". basename( $_FILES["profilePic"]["name"]). " has been uploaded.</p>";                         
                $_SESSION['profilePic'] = $target_file;
            }
        }

        $conn = mysqli_connect("localhost", "root", "", "jselectronic") or die ("Could not connect to database");
        
        $query= "INSERT INTO products(Name, Code, Manufacturer, ManufacturerDate, Type, Description, CostPrice, SalesPrice, Quantity, Image) 
                VALUES ('$productName', '$productCode', '$manufacturer', '$manufacturerDate', '$productType', '$productDescription', '$costPrice', '$salesPrice', '$quantity', '$target_file')";

        mysqli_query($conn, $query) or die ("Could not insert into table");
        $message = "Data inserted into table";
        echo "<script type='text/javascript'>alert('$message');</script>";

        mysqli_close($conn);
    } 
?>
<form id="Product_Info" method="post" action="Products.php" enctype="multipart/form-data">
    <div class="register-photo">
        <div class="form-container">
            <form method="post">
                <h2 class="text-center"><strong>Add Product&nbsp;</strong></h2>
                <div class="form-group"><input class="form-control" type="text" name="product_name" placeholder="Product Name" required ></div>
                <div class="form-group"><input class="form-control" type="text" name="product_code" placeholder="Product Code/Serial Number" required></div>
                <div class="form-group"><input type="text" name="manufacturer" placeholder="Manufacturer" class="form-control" required /></div>
                <div class="form-group"><input class="form-control" type="date" name="manufacturer_date" required/></div>
                <div class="form-group"><select class="form-control" name="product_type" required>
                    <option value="">*Please select*</option>
                    <option value="Accessory">Accessory</option>
                    <option value="Phones">Phones/Tablets </option>
                    <option value="USB">USB Storage</option>
                    <option value="Consoles">Consoles</option>
                    <option value="Games">Games </option>
                    <option value="Laptop">Laptop/PC</option>
                    
                </select></div>
                <div class="form-group"><textarea class="form-control" name="product_description"rows="5" placeholder="Product Description"required></textarea></div>
                <div class="form-group"><input class="form-control" type="text" pattern="[0-9.]+" name="cost_price" placeholder="Cost Price ($)"required/></div>
                <div class="form-group"><input class="form-control" type="text" pattern="[0-9.]+" name="sales_price" placeholder="Sales Price ($)"required/></div>
                <div class="form-group"><input class="form-control" type="text" pattern="[0-9.]+" name="quantity_in_stock" placeholder="Quantity In Stock ($)"required/></div>
                <div class="form-group"><input class="form-control" type="file" name = "profilePic" id = "profilePic" accept = "image/*" required value = <?php echo $profilePic; ?>/></br><?php echo $imgerr; ?></div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"></label></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="submit" style="background-color: rgb(23,21,146);">Submit</button></div>
        </div>
    </div>
</form>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/MUSA_product-display.js"></script>
</body>
</html>