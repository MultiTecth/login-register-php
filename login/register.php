<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>

  <!-- CSS -->
  <link rel="stylesheet" href="../css/login/style.css">

</head>
<body>
  
  <form action="signup-check.php" method="post">

    <h2>register</h2>

    <?php if(isset($_GET['error'])){ ?>
      <p class="error"><?php echo $_GET['error']?></p>
    <?php } ?>

    <?php if(isset($_GET['success'])){ ?>
      <p class="success"><?php echo $_GET['success']?></p>
    <?php } ?>
    

    <label for="">name</label>
    <?php if(isset($_GET['name'])){ ?>
      <input type="text" name="name" placeholder="name" value="<?php echo $_GET['name']?>"><br>
    <?php } else {?>
      <input type="text" name="name" placeholder="name"><br>
    <?php }?>

    <label for="">username</label>
    <?php if(isset($_GET['uname'])){ ?>
      <input type="text" name="uname" placeholder="username" value="<?php echo $_GET['uname']?>"><br> 
    <?php } else {?>  
      <input type="text" name="uname" placeholder="username"><br>
    <?php }?>
    

    

    <label for="">password</label>
    <input type="password" name="pw" placeholder="password"><br>

    <label for="">re password</label>
    <input type="password" name="re_pw" placeholder="re password"><br>

    <a href="../home/index.php" class="ca">home</a>

    <div class="option">
      <a href="index.php" class="ca">login</a>
      <button type="submit">register</button>
    </div>

  </form>

</body>
</html>