<?php


session_start();

if (isset($_POST['loginbtn']))

{


    foreach ($_POST as $key => $value)
    {
        
        $$key = $value;
        $_SESSION[$key] = $value;
    
        
    }
       
    $servername ="localhost:8889";
    $username="root";
    $password="root";
    $dbname="WebSystems_Group";

    

    // create connection
    $conn = new mysqli ($servername,$username,$password,$dbname);


    // check connection

    if ($conn->connect_error)
    {
        die ("connection failed: ".$conn->connect_error);
    }
  //  echo "Connected Successfully";


 // $myemail = mysqli_real_escape_string($dbname,$_POST['email']);
  //$mypwd = mysqli_real_escape_string($dbname,$_POST['pwd']); 
  

//var_dump($pwd);
  //$sql = "Select email,pwd from Vendor";
  $sql = "SELECT Vid FROM Vendor WHERE email = '$email' and pwd = '$pwd'";
   
  $result = $conn->query($sql);
      
 $count = mysqli_num_rows($result);
      
      // If result matched, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $email;
         header("location:index.php");
         // store user name
         // redirect to index page
         
      }else {
       
       // echo " user not found";
        //redirect back to login page with error
        header("location:Login.php");
         // $errormsg = "Your Login Name or Password is invalid";
      }
   
$conn->close();



}


















?>