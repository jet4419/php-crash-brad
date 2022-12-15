<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php

    if(isset($_POST['submit'])) {

      $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
      $password = $_POST['password'];

      if($username == 'devjet04' && $password == 'password') {
        $_SESSION['username'] = $username;
        // session_start();
        // echo $_SESSION['username'];
        header('Location: /php/extras/dashboard.php');
      } else {
        echo 'Incorrect login credentials.';
      }

      // $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);
  
      // if (isset($name) && isset($age)) {
      //   echo "Name: $name <br>";
      //   echo "Age: $age";
      // }
    }


    echo "<br><br>";
  ?>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
    <label>Username:</label>
    <input type="text" name="username" id="username">
    <label>Password:</label>
    <input type="password" name="password" id="password">
    <input type="submit" name="submit" id="submit" value="Send">
  </form>
  
</body>
</html>