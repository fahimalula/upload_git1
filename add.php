<?php
  require_once('db.php');
  $upload_dir = 'uploads/';

  if (isset($_POST['Submit'])) {
    $keperluan = $_POST['keperluan'];
    $kategori = $_POST['kategori'];

    $imgName = $_FILES['image']['name'];
		$imgTmp = $_FILES['image']['tmp_name'];
		$imgSize = $_FILES['image']['size'];

    if(empty($keperluan)){
			$errorMsg = 'Please input name';
		}elseif(empty($kategori)){
			$errorMsg = 'Please input contact';
		}

			$imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));

			$allowExt  = array('jpeg', 'jpg', 'png', 'gif','pdf');

			$userPic = time().'_'.rand(1000,9999).'.'.$imgExt;

			if(in_array($imgExt, $allowExt)){

				if($imgSize < 5000000){
					move_uploaded_file($imgTmp ,$upload_dir.$userPic);
				}else{
					$errorMsg = 'Image too large';
				}
			}else{
				$errorMsg = 'Please select a valid image';
			}
		}

		$date = date("Y-m-d");
		if(!isset($errorMsg)){
			$sql = "insert into contacts(keperluan, kategori, image , date)
					values('".$keperluan."', '".$kategori."', '".$userPic."', '".$date."')";
			$result = mysqli_query($conn, $sql);
			if($result){
				$successMsg = 'New record added successfully';
				header("Location: index.php");
			}else{
				$errorMsg = 'Error '.mysqli_error($conn);
			}
		}
?>
