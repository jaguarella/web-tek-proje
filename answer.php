<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
      // define variables and set to empty values
      $errName = $errEmail = $errLike = $errMessage = $errGender = "";
      $name = $email = $gender = $comment = $like = $result = "";
      
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
          $errName = "Name zorunludur";
        } else {
          $name = test_input($_POST["name"]);
        }
        
        if (empty($_POST["email"])) {
          $errEmail = "Email zorunludur";
        } else {
          $email = test_input($_POST["email"]);
        }
          
        if (empty($_POST["like"])) {
          $errLike = "Seçim zorunludur";
        } else {
          $like = test_input($_POST["like"]);
        }
      
        if (empty($_POST["comment"])) {
          $errMessage = "Mesaj zorunludur";
        } else {
          $comment = test_input($_POST["comment"]);
        }
      
        if (empty($_POST["gender"])) {
          $errGender = "Seçim zorunludur";
        } else {
          $gender = test_input($_POST["gender"]);
        }

      echo "<h2>İletişim Formu:</h2>";
      echo "<br><h3>Ad Soyad: </h3>";
      echo $name;
      echo "<br><h3>Email:</h3>";
      echo $email;
      echo "<br><h3>Beğendiniz mi:</h3>";
      echo $like;
      echo "<br><h3>Mesaj:</h3>";
      echo $comment;
      echo "<br><h3>Cinsiyet:</h3>";
      echo $gender;
      }
      
      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
?>

</body>
</html>