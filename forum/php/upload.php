<?php
include("../../config/config.php");
session_start();
if (isset($_SESSION['uid'])){
    $user = $_SESSION['uid'];
    echo $_SESSION['uid'];



    $target_dir = "../../../profilepic/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "<script>
        alert('Image uploaded successfully');
        window.location.href='../views/index2.php';
        </script>";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "<script>
        alert('Sorry your images is too large.');
        window.location.href='../views/index2.php';
        </script>";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "<script>
        alert('Only jpg/jpeg/png/gif file types can be uploaded.');
        window.location.href='../views/index2.php';
        </script>";
        $uploadOk = 0;
    }

    $image = $_FILES['fileToUpload']['name'];
    $path = "http://localhost/profilepic/".$_FILES['fileToUpload']['name'];
    echo $path;

    $sql = "update `user` set `photo`='$path' where `uid`='$user'";
    $result = mysqli_query($conn,$sql);
    $_SESSION['photo'] = $path;
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<script>
        alert('Sorry your upload failed');
        window.location.href='../views/index2.php';
        </script>";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "<script>
        alert('Image uploaded successfully');
        window.location.href='../views/index2.php';
        </script>";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
    ?>
