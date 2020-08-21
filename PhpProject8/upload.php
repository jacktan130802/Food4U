<?php
if(isset($_POST['upload'])) {
    //$file = $_FILES['file']; 
    $db = mysqli_connect('localhost:3308', 'root', '', 'feedback');
    
    $fileName = $_FILES['file']['name']; // File Name: clock.jpg
    $fileTmpName = $_FILES['file']['tmp_name']; //File's temporairy name
    $fileSize = $_FILES['file']['size']; // File Size
    $fileError = $_FILES['file']['error']; //State of error( 0 = no error, 1 = error)
    $fileType = $_FILES['file']['type']; //File extension type
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    $allowExt = array('jpg', 'jpeg', 'png');
    
    if(in_array($fileActualExt, $allowExt)) {
        if($fileError === 0) {
            if($fileSize < 1000000){
                $fileNameNew = uniqid('', true). ".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                $sql = "INSERT INTO image (imagedir) VALUES ('$fileDestination')";
                mysqli_query($db, $sql);
                move_uploaded_file($fileTmpName, $fileDestination);
               // header("Location: index.php?uploaded");
            } else {
                echo "File size too large";
            }
        } else {
            echo "There was an error uploading file";
        }
    } else {
        echo "File format not supported";
    }
}
?>

