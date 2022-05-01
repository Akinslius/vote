<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>voting system login page</title>
<!-- Bootstrap css link -->
<link rel="stylesheet" href="css/bootstrap.css">
<style>
body{
    background:url('bg-image/balls.jpg');
    background-position:center;
    width:100%;
    height: 100vh;
    
}


</style>


</head>
<body class="bg-warnin my-4" >
    <h1 class="text-white text-center p-3"> Voting system</h1> 

    <div class="bg-primary">
        <h2 class="text-center" >Login</h2>
        <!-- container start -->
        <div class="container text-center">
            <div class="row">
            <form action="actions/login.php">
                <div class="mb-3">
                    <input type="text" name="username" placeholder="Enter your Username" class="form-control w-50 m-auto" required  >
                </div>
                <!-- <div class="mb-3">
                    <input type="tel" name="mobile" placeholder="Enter your mobile number" class="form-control w-50 m-auto" required maxLength="10" minLength="10" >
                </div> -->
                <div class="mb-3">
                    <input type="password" name="password" placeholder="Enter your Password" class="form-control w-50 m-auto" required  >
                </div>
                
                </div>
                <div class="text-center">
                <button type="submit" class="btn text-white bg-warning my-4 ">
                    login

                </button>
                
                <p class="text-dark mb-3" > Don't have an account?  <a href="register.php" class="text-white text-decoration-none">Register Here</a> </p>
                </div>
            </form>
            </div>


        </div>
        <!-- container start -->


    </div>


    
</body>
</html>