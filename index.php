<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <style>
    body{
        background: #e0e0e0;
    }
    div.neone{
            border-radius: 53px;
            background: #e0e0e0;
            box-shadow:  -24px 24px 48px #989898,24px -24px 48px #ffffff;
            border-spacing: 40px 40px;
            padding: 10px 30px 10px 30px;
            text-shadow: -3px 2px 7px rgba(0,0,0,0.58);
            
            
        }
    button.neobut{
        border-radius: 53px;
            background: linear-gradient(225deg, #f0f0f0, #cacaca);
            box-shadow:  -16px 16px 32px #989898,
                        16px -16px 32px #ffffff;
            color:#000000;
            border-color: whitesmoke;
            font-size: 20px;
            text-shadow: -3px 2px 7px rgba(0,0,0,0.58);
            padding: 10px 20px 10px 20px;
    }
    .heading{
            font-family: 'Trirong', serif;
            font-size: 50px;            
            font-weight: bold;
            color: #000000;
            border-radius: 53px;
            background: linear-gradient(225deg, #f0f0f0, #cacaca);
            box-shadow:  -16px 16px 32px #989898,
                            16px -16px 32px #ffffff;
            width:autoload; 
            padding: 10px 10px 10px 40px;
    }
  </style>
  <body>
    <?php require 'partials/_nav.php'  ?>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            include 'partials/_dbconnect.php';
            $username = $_POST['username'];
            $password = $_POST['password'];
            $confirmpassword = $_POST['confirmpassword'];
            $exists = false;
            

            // check whether this username exists
            $sql = "SELECT * FROM `users` WHERE name = '$username'";
            $result = mysqli_query($conn, $sql);
            $numRows = mysqli_num_rows($result);
            if($numRows > 0){
                $exists = true;
                echo "<div class='alert alert-info' role='alert'>
                Username already exists!
                
              </div>";
              
            }
            else{
                if(($password == $confirmpassword) && $exists == false){
                    $hash = password_hash($password, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO `users` (`name`, `password`, `dt`) VALUES ('$username', '$hash', current_timestamp())";
                    $result = mysqli_query($conn, $sql);
                    if($result){
                        echo "<div class='alert alert-success fade show' role='alert'>
                                <h4 class='alert-heading'>Success!</h4>
                                <p>Aww yeah, you can successfully login now</p>
                            
                            </div>";
                    }
                }
                else{
                    echo "<div class='alert alert-danger fade show' role='alert'>
                            <h4 class='alert-heading'>Error!</h4>
                            <p>Sorry, passwords do not match</p>
                            <hr>
                            <p class='mb-0'>Try again</p>
                        </div>";
                }
            }
            /*if($exists==true){
                
            }*/
        }

    ?>

    </br>
    <div class="container my-4 neone">
        </br>
        <h1 class="heading text-center"><b>Signup to our website</b></h1>
        </br></br>
        <form action="/Login/index.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label"><b>User-name</b></label>
                <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="enter username">
                
            </div>
            <div class="mb-3">
                <label for="password" class="form-label"><b>Password</b></label>
                <input type="password" name="password" class="form-control" id="password" placeholder="enter password">
            </div>
            <div class="mb-3">
                <label for="confirmpassword" class="form-label"><b>Confirm Password</b></label>
                <input type="password" name="confirmpassword" class="form-control" id="confirmpassword" placeholder="enter password again">
                <div id="emailHelp" class="form-text"><b>Make sure to type the same password</b></div>
            </div>
            </br>
            <button type="submit" class="btn btn-primary neobut"><b>Sign-up</b></button>
        </form>
        </br>

    </div>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>