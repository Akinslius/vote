<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">

    <style>
        body{
            background-color:wheat;
            
        }
        h1{
            color: white;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

         img{
            border:3px solid red; 
            border-radius:20px; 
        } 
        
    </style>

</head>
<body>
    <div class="text-center my-3 p-3 "> <h1 class="text-danger" > Voting System </h1> </div>

    <div class="col m-3  " > <button class="btn btn-danger " > 
    <a href="actions/logout.php" class="text-decoration-none fw-bolder"> Log out </a> </button>  </div>
                

    <div class="container-lg my-5 ">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="row">
                    
 <?php
include ('actions/connection.php');
session_start();
$mar= '<marquee behavior="scroll" direction="left">
<h1 class="text-danger"> hello </h1>
</marquee>';
$id= $_SESSION['userid'];
$check = mysqli_query($con, " SELECT status FROM voting WHERE id='$id'  " );
//fetch the data ($result -> num_rows > 0 )
$res = mysqli_fetch_assoc($check);
//storing the value of status in variable $status_num
$status_num = $res['status'];

// Display the status if user has voted or not inside a button
if($status_num == 1 ){
    $stat = ' <b class="text-success"> Voted </b>';

}else{
    $stat = ' <b class="text-danger"> Not Voted </b>';

}

// Display in a button if the contestant has been voted for and which one.
if($status_num == 1 ){
// disable button if voted    
    $user_vote = '<button class="btn bg-danger text-light" disabled="disabled" > Voted </button>';
}else{
// submit if you haven't vote    
    $user_vote = '<button class="btn bg-success text-light" type="submit" >Not Voted </button>';
}
    
// Accessing only the president
$sql = " SELECT * FROM voting WHERE standard= 'President'  ";

$result = mysqli_query($con, $sql );

if($result){
//display all the contestant in the database    
    while( $president_group = mysqli_fetch_assoc($result)){

    $_SESSION['President']=$president_group['username'];
    $_SESSION['Votes']=$president_group['votes'];
    $_SESSION['Photo']=$president_group['photo'];
    $_SESSION['Status']=$president_group['status'];
    $_SESSION['Id']=$president_group['id'];
    
    // for president 

    echo ' 

    <div class="col-lg-4 my-4 " >
    <img src="upload/'.$_SESSION['Photo'].' " widtth="100px" height="100px" > <br>
    
    </div>
    
    <div class="col-lg-8 my-4 ">

    <form action="actions/voting.php " method="POST">
<input type="hidden" name="contestant_id" value="  '.$_SESSION['Id'].' ">



    <strong class="my-5"> Candidate Name: </strong> '.$_SESSION['President'].' <br>
    <strong class="my-5" > Vote: </strong> '.$_SESSION['Votes'].' <br>
    
    '.$user_vote.' 
    </form>
    </div> 

<hr class="text-danger">

    
    ';


    } 

} 

if(!$result){
    echo $mar;
}
?>
 
    
                </div>
               
            </div>
            <div class="col-md-5 text-center">
                <!-- for voters -->
                <div class="row">
                     <div class="col-lg my-4 " >
                         <div>  <img src="upload/<?php echo $_SESSION['img']  ;?> " widtth="100px" height="100px" > </div> <br>

                         <strong class="my-5"> Voter's Name: </strong> <span> <?php echo $_SESSION['candidate'] ; ?> </span> <br>
                         <strong class="my-5"> Number: </strong> <span> <?php echo $_SESSION['phoneNumber'] ; ?> </span> <br>
                         <strong class="my-5"> Status: </strong> <span> <?php echo $stat ; ?> </span> <br>

                    </div>
                </div>
            </div>
        </div>
</div>
</body>
</html>