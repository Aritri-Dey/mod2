
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Cart</title>
</head>
<body>
  <div class="container">
    <form action="final.php" class="cart" method="post">
      <div class="form-group">
        <label for="exampleInputFirstname">Name :</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
        <!--Error message is displayed if field is empty or invalid value is filled-->
        <span id="error"> <?php echo isset($_SESSION['nameErr'])? "*" . $_SESSION['nameErr']: ""; ?> </span>
      </div>
      <div class="form-group">
        <label for="exampleInputFirstname">Email :</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
        <!--Error message is displayed if field is empty or invalid value is filled-->
        <span id="error"> <?php echo isset($_SESSION['emailErr'])? "*" . $_SESSION['emailErr']: ""; ?> </span>
      </div>
      <div class="form-group">
        <label for="exampleInputFirstname">Contact Number :</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone number" required>
        <!--Error message is displayed if field is empty or invalid value is filled-->
        <span id="error"> <?php echo isset($_SESSION['phErr'])? "*" . $_SESSION['phErr']: ""; ?> </span>
      </div>
      <div class="form-group">
        <label for="exampleInputFirstname">Amount to pay :</label>
        <input type="text" class="form-control" id="amt" name="amt" placeholder="<?php echo $_SESSION['total'] ; ?>" disabled>
      </div>
      <div class="form-group">
        <input type="submit" value="Submit" class="buttons" name="submit" onclick="return empty()">
      </div>
    </form>
  </div>
  <script src="js/script.js"></script>
</body>
</html> 