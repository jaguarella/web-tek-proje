
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ayşe Yılmaz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css\bootstrap.css">
  <script src="js\jquery-3.5.0.min.js"></script>
  <script src="js\bootstrap.js"></script>
<style>
    html,
body {
  height: 100%;
}
body {
  display: -ms-flexbox;
  display: -webkit-box;
  display: flex;
  -ms-flex-align: center;
  -ms-flex-pack: center;
  -webkit-box-align: center;
  align-items: center;
  -webkit-box-pack: center;
  justify-content: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']) && isset($_POST['password'])){
    $mail = htmlspecialchars($_POST['email']);
    $pass = htmlspecialchars($_POST['password']);
    if($mail=="b151210063@sakarya.edu.tr" && $pass == "123"){
        echo "<script>alert ('HOŞGELDİNİZ $mail')</script>";
        header('Refresh: 0; URL=/index.php'); 
        setcookie("user", "enes", time()+2*24*60*60); 
    }
    else{
      echo "<script>alert('Giriş başarısız.')</script>";
    }
}
?>

</head>
<body class="text-center">
        <form class="form-signin" role="form" method="post" action="login.php">
                <img class="mb-4" src="images/Fox-vector-logo.svg" alt="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal">Lütfen Giriş Yapın</h1>
                <label for="email" class="sr-only">Email address</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
                <label for="password" class="sr-only">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                <div class="checkbox mb-3">
                  <label>
                    <input type="checkbox" value="remember-me"> Beni Hatırla
                  </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Giriş</button>
                <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
              </form>

</body>
</html>
