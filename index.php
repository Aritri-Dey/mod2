<!--Landing page-->
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

      <div class="items">
        <div class="snackdiv">
          <h2>Healthy Snacks</h2>
          <img src="image/healthy.jpeg" alt="img" id="snack">
          <p>Choose from a variety of healthy snack</p>
          <a href="/project/healthy.php" class="buttons">Go to market</a>
        </div>
        <div class="snackdiv">
          <h2>Tasty Snacks</h2>
          <img src="image/unhealthy.jpg" alt="img" id="snack">
          <p>Choose from a variety of tasty snack</p>
          <a href="/project/unhealthy.php"class="buttons">Go to market</a>
        </div>
      </div>
      
    </div>
    
  </body>
</html>