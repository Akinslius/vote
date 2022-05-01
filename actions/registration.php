<?php
include ('connection.php');

$username = $_POST['username'];
$number = $_POST['number'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$image = $_FILES ['photo']['name'];
// $tmp_name = $_FILES['photo']['tmp_name'];
$std = $_POST['std'];

// check if usename exist from database
$res = " SELECT * FROM voting WHERE username = '".$username."' " ;
$ak = mysqli_query($con, $res);
if($ak -> num_rows > 0 ){
    echo ' <script> alert ("Username Taken");
    window.location="../register.php";
    </script> ';

}

// check if password match
if($password == $cpassword){

    //   submit all user data into the database
    $sql = "INSERT INTO voting(username,number,password,photo,standard,status,votes) VALUES ('$username','$number','$password','$image','$std',0,0) ";

    $result = mysqli_query($con, $sql);
    // check if data submitted succefully 
    if($result){
        move_uploaded_file($_FILES['photo']['tmp_name'], "../upload/$image");

        echo ' <script> alert ("Registration Successful");
        window.location="../index.php";
        </script> ';

    }
    // if data failed to submit
    else{
        echo "failed to submit";

    }
      

}
// if password doesn't match 
else{
    echo ' <script> alert ("Password do not match");
    window.location="../register.php";
    
    </script> ';
}

 





?>