<?php
//connecting to database 
include ('connection.php');
session_start();

// fetching data from input field
$username = $_GET['username']; 
$password = $_GET['password'];

// check if the data is available in the database
$sql = " SELECT * FROM voting WHERE username = '".$username."' || password = '".$username."' ";
// connect to database
$result = mysqli_query($con, $sql );

if($result){
    $row = mysqli_fetch_assoc($result);

   $_SESSION['candidate']=$row['username'];
   $_SESSION['position']=$row['standard'];
   $_SESSION['phoneNumber']=$row['number'];
   $_SESSION['votes']=$row['votes'];
   $_SESSION['img']=$row['photo'];
   $_SESSION['stat']=$row['status'];
   $_SESSION['userid']=$row['id'];
}

// if fetching successful, print "welcome user"
if($result){
    echo ' <script> alert("Welcome  ' .$_SESSION['candidate'].' " )  ;
    window.location="../portal.php";
    </script> ';
}
// else print failed
else{
    echo "Invalid Username or passord";
}



?>