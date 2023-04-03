<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Store</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/project/index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/project/index.php">Admin Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">

      <h1>Innoraft Groceries</h1>
      <form action="hcart.php" method="post" class="snackform">
        <!--Div to display all unhealthy snack items-->
        <div class="allitems">
          <div class="item" id="item1">
            <img src="image/healthy.jpeg" alt="img">
            <h3>Cucumber</h3>
            <p id="price" value="100">Rs. 100</p>
            <p>Select:<input type="checkbox" id="item1check" name="item1"></p>
            <p>Quantity:<input type="number" id="q1" name='q1'></p>
            <!--Error message is displayed if quantity is greater than 5-->
            <span id="error"> <?php echo isset($_SESSION['q1Err'])? "*" . $_SESSION['q1Err']: ""; ?> </span> 
          </div>
          <div class="item" id="item2">
            <img src="image/healthy.jpeg" alt="img">
            <h3>Cucumber</h3>
            <p id="price" value="100">Rs. 100</p>
            <p>Select:<input type="checkbox" id="item2check" name="item2"></p>
            <p>Quantity:<input type="number" id="q2" name='q2'></p>
            <!--Error message is displayed if quantity is greater than 5-->
            <span id="error"> <?php echo isset($_SESSION['q2Err'])? "*" . $_SESSION['q2Err']: ""; ?> </span>
          </div>
          <div class="item" id="item3">
            <img src="image/healthy.jpeg" alt="img">
            <h3>Cucumber</h3>
            <p id="price" value="100">Rs. 100</p>
            <p>Select:<input type="checkbox" id="item3check" name="item3"></p>
            <p>Quantity:<input type="number" id="q3" name='q3'></p>
            <!--Error message is displayed if quantity is greater than 5-->
            <span id="error"> <?php echo isset($_SESSION['q3Err'])? "*" . $_SESSION['q3Err']: ""; ?> </span>
          </div>
          <div class="item" id="item4">
            <img src="image/healthy.jpeg" alt="img">
            <h3>Cucumber</h3>
            <p id="price" value="100">Rs. 100</p>
            <p>Select:<input type="checkbox" id="item4check" name="item4"></p>
            <p>Quantity:<input type="number" id="q4" name='q4'></p>
            <!--Error message is displayed if quantity is greater than 5-->
            <span id="error"> <?php echo isset($_SESSION['q4Err'])? "*" . $_SESSION['q4Err']: ""; ?> </span>
          </div>
        </div>
        <input type="submit" value="Submit" class="buttons" onclick="">
      </form>
      
    </div>
    <script src="js/script.js"></script>
  </body>
</html>