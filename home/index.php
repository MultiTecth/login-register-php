<?php 
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['user_name'])){
  $id = $_SESSION['id'];
  $user_name = $_SESSION['user_name'];
  $_SESSION['idUser'] = $id;
  $_SESSION['uname'] = $user_name;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>

  <!-- Setting css -->
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/body.css">


  <!-- CSS -->
  <link rel="stylesheet" href="../css/nav.css">
</head>
<body>
  
  <nav>
    <ul class="menu">
      <a href=""><li>home</li></a>
      <a href=""><li>blogs</li></a>
      <a href=""><li>about</li></a>
    </ul>
    

    <?php if(
      (isset($_SESSION['id']) && isset($_SESSION['user_name']) && 
      !($_SESSION['id'] == "guest" && $_SESSION['user_name'] == "guest"))){?>
      <ul class="con-gambar">
        <a href="../users/index.php">
          <p>@<?= $_SESSION['user_name'] ?></p>
          <li class="gambar">    
            <img src="../img/user.png" alt="">
          </li>
        </a>
      </ul>
    <?php } else {?>
      <ul class="login-register">
        <a href="../login/index.php"><li>login</li></a>
        <a href="../login/register.php"><li>register</li></a>
      </ul>
    <?php }?>
  </nav>

</body>
</html>