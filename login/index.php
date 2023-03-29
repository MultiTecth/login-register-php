<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <!-- CSS -->
  <link rel="stylesheet" href="../css/login/style.css">

</head>
<body>
  
  <form action="login.php" method="post">

    <h2>login</h2>

    <?php if(isset($_GET['error'])){ ?>
      <p class="error"><?php echo $_GET['error']?></p>
    <?php } ?>

    <label for="">username</label>
    <input type="text" name="uname" placeholder="username"><br>

    <label for="">password</label>
    <input type="password" name="pw" placeholder="password"><br>
      
    
    <a href="../home/index.php" class="ca">home</a>
    
    <div class="option">
      <a href="register.php" class="ca">register</a>
    
      <button type="submit">login</button>
    </div>

  </form>

</body>
</html>