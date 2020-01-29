<?php
  include('db.php');
  $upload_dir = 'uploads/';

  if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		$sql = "select * from contacts where id = ".$id;
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			$image = $row['image'];
			unlink($upload_dir.$image);
			$sql = "delete from contacts where id=".$id;
			if(mysqli_query($conn, $sql)){
				header('location:index.php');
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact V4</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
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
      <form class="contact100-form validate-form">
        <span class="contact100-form-title">
          Data Tiket Tersimpan
        </span>

        <div class="table-responsive">
              <table id="example" class="table">
                   <thead>
                    <tr>
                      <th scope="col">Id Tiket</th>
                      <th scope="col">Kategori</th>
                      <th scope="col">Keperluan</th>
                      <th scope="col">Tanggal Simpan</th>
                      <th scope="col">File Tiket</th>
                      <th scope="col">Preview Tiket</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                                  $sql = "select * from contacts";
                                  $result = mysqli_query($conn, $sql);
                                  if(mysqli_num_rows($result)){
                                    while($row = mysqli_fetch_assoc($result)){
                                ?>
                    <tr>
                      <th scope="row"><?php echo $row['id'] ?></th>
                      <td><?php echo $row['kategori'] ?></td>
                      <td><?php echo $row['keperluan'] ?></td>
                      <td><?php echo $row['date'] ?></td>
                      <td><?php echo $row['image'] ?></td>
                      <td class="text-center">
                                    <a href="show.php?id=<?php echo $row['id'] ?>" class="btn btn-success">View</a>
                                  </td>
                    </tr>
                    <?php
                                    }
                                  }
                                ?>
                  </tbody>
              </table>

        </div>

        <div class="container-contact100-form-btn">
          <div class="wrap-contact100-form-btn">
            <div class="contact100-form-bgbtn"></div>
            <button class="contact100-form-btn">
              <a href="create.php" class="text-white">
                Kembali ke Upload Tiket
                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
              </a>
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
    <script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
      } );
    </script>

</body>
</html>

