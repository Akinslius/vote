<?php

//connecting to database 
include ('connection.php');
session_start();

$contestant_id = $_POST['contestant_id'];
$userid=$_SESSION['userid'];
// cvidb means Contestant Vote In DataBase 
$cvidb =  mysqli_query($con, " SELECT votes FROM voting WHERE id='$contestant_id'  "  );
if($cvidb){
    $q=mysqli_fetch_assoc($cvidb);

    $ab = $q['votes'];
}

// increasing the number of contestant vote in db
$i = $ab ;
$i++;


//updating contestant total vote in db

$update_contestant_vote = mysqli_query($con, " UPDATE voting SET votes='$i' WHERE id='$contestant_id'  "  );

//updating user status in db
$update_user_status = mysqli_query($con, " UPDATE voting SET status=1 WHERE id='$userid'  "  );

if($update_contestant_vote and $update_user_status ){
   echo ' <script> alert("Voting successful ' .$_SESSION['candidate'].' " )  ;
   window.location="../portal.php";
    </script> ';


}else{
   echo ' <script> alert("Technical Error, please try again later ' .$_SESSION['candidate'].' " )  ;
        window.location="../portal.php";
     </script> ';
 }


?>