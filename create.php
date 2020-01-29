<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact V4</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
  <link rel="icon" type="image/png" href="template/images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="template/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="template/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="template/vendor/animate/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="template/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="template/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="template/vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="template/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="template/css/util.css">
  <link rel="stylesheet" type="text/css" href="template/css/main.css">
<!--===============================================================================================-->
</head>
<body>


  <div class="container-contact100">
    <div class="wrap-contact100">
      <form class="contact100-form validate-form" action="add.php" method="post" enctype="multipart/form-data">
        <span class="contact100-form-title">
          Form Penyimpanan Tiket
        </span>

        <div class="wrap-input100 validate-input" data-validate="Name is required">
          <span class="label-input100"> Keperluan Tiket </span>
          <input class="input100" type="text" name="keperluan" placeholder="Tulis keperluan tiket">
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 input100-select">
          <span class="label-input100">Kategori Tiket</span>
          <div>
            <select class="selection-2" name="kategori">
              <option disabled selected>Pilih kategori tiket</option>
              <option value="Tiket Pesawat">Tiket Pesawat</option>
              <option value="Tiket Kereta">Tiket Kereta</option>
            </select>
          </div>
          <span class="focus-input100"></span>
        </div>

        <div class="row" style="margin-bottom:5vh;">

            <div class="col s12 m6">
              <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                  <span class="card-title">Upload File Tiket</span>
                  <input type="file" name="image" style="margin-top:5px;">
                  <p> </p>
                </div>
                <div class="card-action">
                </div>
              </div>
            </div>
          </div>

        <div class="container-contact100-form-btn">
          <div class="wrap-contact100-form-btn">
            <div class="contact100-form-bgbtn"></div>
            <button class="contact100-form-btn" type="submit" name="Submit" >
                Simpan data tiket
                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>



  <div id="dropDownSelect1"></div>

<!--===============================================================================================-->
  <script src="template/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="template/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="template/vendor/bootstrap/js/popper.js"></script>
  <script src="template/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="template/vendor/select2/select2.min.js"></script>
  <script>
    $(".selection-2").select2({
      minimumResultsForSearch: 20,
      dropdownParent: $('#dropDownSelect1')
    });
  </script>
<!--===============================================================================================-->
  <script src="template/vendor/daterangepicker/moment.min.js"></script>
  <script src="template/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="template/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="template/js/main.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>

