<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
<!-- Bootstrap css link -->
<link rel="stylesheet" href="bootstrap.css">
<style>
body{
    background:url('bg-image/balls.jpg');
    background-position:center;
    width:100%;
    height: 100vh;
    
}


</style>


</head>
<body class="bg-warning" >
    <h1 class="text-white text-center"> Voting system </h1> 

    <div class="bg-primary">
        <h2 class="text-center" >Register Account</h2>
        <div class="container text-center">
            <form action="actions/registration.php" method="POST" enctype="multipart/form-data" >
                <div class="mb-3">
                    <input type="text" name="username" placeholder="Enter your Username" class="form-control w-50 m-auto" required  >
                </div>
                <div class="mb-3">
                    <input type="tel" name="number" placeholder="Enter your mobile number" class="form-control w-50 m-auto" required maxLength="14" minLength="11" >
                </div>
                <div class="mb-3">
                    <input type="password" name="password" placeholder="Enter your Password" class="form-control w-50 m-auto" required  >
                </div>
                <div class="mb-3">
                    <input type="password" name="cpassword" placeholder="Confirm Password" class="form-control w-50 m-auto" required  >
                </div>
                <div class="mb-3">
                    <input type="file" name="photo" class="form-control w-50 m-auto" >
                </div> 
                <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto" >
                        <option value="President"> President </option>
                    
                        <option selected value="Voters"> Voter </option>
                    </select>
                </div>
                <button type="submit" class="btn text-white bg-warning my-4 ">
                    Register

                </button>
                <p class="text-dark mb-3" > Already have an account?  <a href="index.php" class="text-white text-decoration-none">Login Here</a> </p>
                
            </form>


        </div>


    </div>


    
</body>
</html>