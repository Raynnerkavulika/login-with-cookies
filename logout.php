<?php

include 'connect.php';

setcookie('user_id', '', time() - 1, '/');

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>logout</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<div class="content">

   <div class="box">
      <h3>logged out successfully!</h3>
      <div class="flex-btn">
         <a href="login.php" class="btn">login</a>
         <a href="register.php" class="btn">register</a>
      </div>
   </div>

</div>

</body>
</html>