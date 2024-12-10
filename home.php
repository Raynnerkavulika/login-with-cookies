<?php

include 'connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
   header('location:login.php');
}

$select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
$select_profile->execute([$user_id]);
$fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<div class="content">

   <div class="box">
      <h3>welcome : <span><?= $fetch_profile['name']; ?></span></h3>
      <div class="flex-btn">
         <a href="login.php" class="btn">login</a>
         <a href="register.php" class="btn">register</a>
      </div>
      <a href="logout.php" class="delete-btn" onclick="return confirm('logout from the website?');">logout</a>
   </div>

</div>

</body>
</html>