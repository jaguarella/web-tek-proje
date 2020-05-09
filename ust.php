<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ayşe Yılmaz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css\bootstrap.css">
  <script src="js\jquery-3.5.0.min.js"></script>
  <script src="js\bootstrap.js"></script>
  <link rel="stylesheet" href="css\custom.css">
</head>

<?php
if(!isset($_COOKIE["user"])){ 
  header('Refresh: 0; URL=/login.php');
}
?>

<body>
    
    <nav class="navbar navbar-inverse navbar-expand-md navbar-dark fixed-top bg-dark" style="border-radius: 0px">
        <div class="container-fluid">
            <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="#"><font color="blue"><b>AYŞ</b></font></a>
          </div>
          <ul class="nav navbar-nav">
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php"><font color="blue"><b>HAKKIMDA</b></font></a></li>
            <li><a href="egitim.php"><font color="blue"><b>EĞİTİM</b></font></a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><font color="blue"><b>ŞEHRİM</b></font><span
                  class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="izmir.php"><font color="blue"><b>İZMİR</b></font></a></li>
                <li><a href="gozgoz.php"><font color="blue"><b>GÖZTEPE FK</b></font></a></li>
              </ul>
            </li>
            <li><a href="iletisim.php"><font color="blue"><b>İLETİŞİM</b></font></a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span><font color="blue"><b>LOGİN</b></font></a></li>
          </ul>
        </div>
        </div>
      </nav>