<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if (file_exists($target_file)) {
  echo "File with same name already exist";
  $uploadOk = 0;
}



if ($_FILES["fileToUpload"]["size"] > 2500000) {
  echo "Your file is too large.";
  $uploadOk = 0;
}

if($imageFileType != "pdf" && $imageFileType != "doc" && $imageFileType != "jpeg"
&& $imageFileType != "jpg" ) {
  echo "Sorry, only PDF, DOC, JPG, JPEG files are allowed.";
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  echo "Your file was not uploaded, please try again";
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {    
    echo 'File has been uploaded';
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

}
