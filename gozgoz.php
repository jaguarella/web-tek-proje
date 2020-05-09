
    <?php
    include "ust.php";
      ?>
      <style>
         

.carousel {
  height: 500px;
  margin-bottom: 60px;
  background-color: black;
}

.carousel-caption {
  z-index: 10;
;
}

.carousel .item {
  height: 500px;
  background-color: black;
}
.carousel-inner > .item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 500px;

  
}
 .marketing{
   background-color:yellow;
 }

.marketing .row {
  background-color: black;

}

}
.marketing .col-lg-4 {
  margin-bottom: 20px;
  text-align: center;
}
.marketing h2 {
  font-weight: normal;
  background-color: black;
}
.marketing .col-lg-4 p {
  margin-right: 10px;
  margin-left: 10px;
}



.featurette-divider {
  margin: 80px 0; 
}

.featurette-heading {
  font-weight: 300;
  line-height: 1;
  letter-spacing: -1px;
 
}




@media (min-width: 768px) {
 
  .navbar-wrapper {
    margin-top: 20px;
    
  }
  .navbar-wrapper .container {
    padding-right: 15px;
    padding-left: 15px;
   
  }
  .navbar-wrapper .navbar {
    padding-right: 0;
    padding-left: 0;
   
  }

  /* The navbar becomes detached from the top, so we round the corners */
  .navbar-wrapper .navbar {
    border-radius: 4px;
    
  }

  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 20px;
    font-size: 21px;
    line-height: 1.4;
   
  }

  .featurette-heading {
    font-size: 50px;
    
  }
}

@media (min-width: 992px) {
  .featurette-heading {
    margin-top: 120px;
    background-color: white;
  }
}
      </style>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="images/gozgoz.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>GÖZGÖZ</h1>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="first-slide" src="images/gozgoz2.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1> GÖZGÖZ</h1>
            </div>
          </div>
        </div>

      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


    
    <div class="container marketing">
     <div class="row">
      <div class="col-lg-4">
        <h2><font color="red">YÖNETİM KURULU</font></h2>
          <p><font color="blue">Başkan<br></font>
          <font color="yellow"> Mehmet Sepil<br></font>
          <font color="blue"> Başkan Vekili<br></font>
          <font color="yellow">  Talat Papatya<br></font>
          <font color="blue"> Yönetim Kurulu Üyeleri<br></font>
          <font color="yellow"> Can Kestelli<br>
             Doğan Mutlu<br>
             Aktuğ Sönmez<br>
             Kaan Öz<br>
             Sinan Öznur <br>
             Enes Memiş</font>

           </p>
      
        </div>
        <div class="col-lg-4">
          <img class="img-circle" src="images/glogo.png" alt="Generic placeholder image" width="140" height="140">
          <h2><font color="red">ARMA</h2></font>
          <p><font color="yellow">Göztepe sarı kırmızı renklerle kurulan bir kulüp olmuştu ama armasında futbol ön plana çıkmıştı. Ama o dönem Göztepe, başta yelken olmak üzere birçok amatör branşta büyük başarılara imza atan bir kulüptü. Diğer branşların yöneticileri ana yönetime tepki gösterince sol üst köşeye amatör bronşları çağrıştıran kareler konuldu, ortaya ise lokomatif olan futbol topu konduğunda yıl 1934'tü.</font></p>
        </div>
        <div class="col-lg-4">
          
          <h2><font color="red">ALIŞVERİŞ</font></h2>
          <p><a href="https://www.gozgoz.com.tr/" target="_blank">LİNK</a></p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><font color="red">ÇUBUKLU FORMA </font><span class="text-muted"></span></h2>
          </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="images/forma.png" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading"><font color="red">EFSANE MAVİ FORMA</font><span class="text-muted"></span></h2>
          </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="images/forma2.png" alt="Generic placeholder image">
        </div>
      </div>
      

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><font color="red">SARI FORMA </font><span class="text-muted"></span></h2>
         </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="images/sarı forma.PNG" alt="Generic placeholder image">
        </div>
      </div>





  
  <?php
    include "alt.php";
      ?>