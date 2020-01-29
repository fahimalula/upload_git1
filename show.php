<?php
  require_once('db.php');
  $upload_dir = 'uploads/';

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select * from contacts where id=".$id;
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    }else {
      $errorMsg = 'Could not Find Any Record';
    }
  }
  $ext = pathinfo($row['image'], PATHINFO_EXTENSION);
?>
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
      <div class="row">
        <?php if($ext=="pdf") {?>
              <div class="col-lg-12" style="height: 80vh;width: 100%; position:relative;">
                <embed src="<?php echo $upload_dir.$row['image'] ?>" type="application/pdf" width="100%" height="100%">
              </div>
              <?php } else {?>
                  <div class="col-lg-12">
                    <img src="<?php echo $upload_dir.$row['image'] ?>" height="200">
                  </div>
                <?php }?>
                <div class="col-lg-12">
                    <h5 class="form-control"><i class="fa fa-user-tag">
                      <span><?php echo $row['keperluan'] ?></span>
                    </i></h5>
                    <h5 class="form-control"><i class="fa fa-mobile-alt">
                      <span><?php echo $row['kategori'] ?></span>
                    </i></h5>

                      <a class="btn btn-outline-danger" href="index.php"><i class="fa fa-sign-out-alt"></i><span>Kembali ke Penyimpanan Tiket</span></a>

                </div>
      </div>  
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