
    <?php
    include "ust.php";
      ?>
      <style>
    .container .row {
        background-color:#FFFAF0;
    }
      </style>

    <div class="container-fluid hakkimda bg-3 text-center">
        <h3><font  size= 5 color="black" ><b>İLETİŞİM</b></font></h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form class="form-horizontal" role="form" name="iletisim" method="post" action="answer.php" onsubmit="return validateForm()" >
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Ad Soyad</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="First & Last Name"  >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="example@domain.com" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="comment" class="col-sm-2 control-label">Mesaj</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="4"
                                name="comment" id="comment"> </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gender" class="col-sm-2 control-label">Cinsiyet</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="gender" id="gender">
                                <option value="erkek">erkek</option>
                                <option value="kadın">kadın</option>
                                <option value="diğer">diğer</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="like" class="col-sm-2 control-label">Siteyi Beğendiniz mi ?</label>
                        <div class="col-sm-10">
                            <input type="radio" name="like" value="Evet">Evet
                            <input type="radio" name="like" value="Hayır">Hayır
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <input id="submit" name="submit" type="submit" value="Gönder" class="btn btn-primary">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <script>
                    function validateForm() {
                var name = document.forms["iletisim"]["name"].value;
                var comment = document.forms["iletisim"]["comment"].value;
                var like = document.forms["iletisim"]["like"].value;
                var gender = document.forms["iletisim"]["gender"].value;
                if (name == "") {
                  alert("İsim Girmek Zorunludur.");
                  return false;
                }
                if (comment == "") {
                  alert("Mesaj Girmek Zorunludur.");
                  return false;
                }
                if (like == "") {
                  alert("Seçim Zorunludur.");
                  return false;
                }
                if (gender == "") {
                  alert("Seçim Zorunludur.");
                  return false;
                }
              }
    </script>
    <?php
include "alt.php"
?>