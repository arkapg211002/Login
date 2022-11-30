<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>

  <style>
    .container{
            text-shadow: -3px 2px 7px rgba(0,0,0,0.58);
        }
        .heading{
            font-family: 'Trirong', serif;
            font-size: 50px;            
            font-weight: bold;
            color: #000000;
            
            width:autoload; 
            padding: 10px 10px 10px 40px;
        }
        body{
            background-color:#e0e0e0;
        }
        div.neone{
            border-radius: 53px;
            background: #e0e0e0;
            box-shadow:  -24px 24px 48px #989898,24px -24px 48px #ffffff;
            border-spacing: 40px 40px;
            padding: 10px 40px 10px 40px;
            text-shadow: -3px 2px 7px rgba(0,0,0,0.58);
            text-align: center;
            
            
        }
        div.one{
          padding: 10px 70px 10px 70px;
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
  </style>
  <body>
    <?php require 'partials/_nav.php'  ?>
      </br></br></br></br></br>
    
    <div class="container neone one">
          <div>
            <h3 class='heading'>
              <?php 
                session_start();
                if(isset($_SESSION['loggedin']) &&  isset($_SESSION['name']) && $_SESSION['loggedin'] == true){
                  echo "Welcome ". $_SESSION['name'] ." to My Login System";
                }
                

              
              ?>
            </h3>
          </div>
      </br></br>

      <div class="container neone">
            <img src="wfh_2.svg" class="card-img-top" alt="...">
      </div>
      </br></br></br></br>
      <button style="margin-right: 50px"type="button" class="btn btn-primary btn-lg neobut"><a style="text-decoration:none" href="https://www.linkedin.com/in/arkapratim-ghosh%E2%9C%8C%EF%B8%8F%F0%9F%98%80-86637a21b/"><b>Connect With Me!</b></a></button>
      <button type="button" class="btn btn-secondary btn-lg neobut"><a style="text-decoration:none" href="/Login/logout.php">
        <?php
            session_unset();
            session_destroy();

        
        ?>
        <b>See You Again!</b>
      </button>
      </br></br></br>
    </div>
    </br></br></br></br></br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>