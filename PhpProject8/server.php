<?php

$db = mysqli_connect('localhost:3308', 'root', '', 'feedback');
if (!$db) {
 die("Connection failed: " . mysqli_connect_error());
}
// initialize variables
$name = "Jack";
$email = "dsfsad";
$subject ="sddfsa";
$feedback="sadfd";
$id = 0;
$update = false;
//if (isset($_POST['save'])) {
 $name = $_POST['name'];
 $address = $_POST['email'];
  $subject = $_POST['subject'];
   $feedback = $_POST['message'];
 $sql = "INSERT INTO feedback (feedback,name,email,subject) VALUES ('$feedback', '$name','$address','$subject')";
 if (mysqli_query($db, $sql)) {
   echo "New record created successfully";   
// $_SESSION['message'] = "Address Saved";
 } else {
//     echo mysqli_error($sql,$db);
// $_SESSION['message'] = "Address Save Failed!";
      echo "Error: " . $sql . "<br>" . mysqli_error($db);
 }
//}
//else{
//    echo 'SAVED';
//}





//if (isset($_POST['update'])) {
// $id = $_POST['id'];
// $name = $_POST['name'];
// $address = $_POST['address'];
// $sql = "UPDATE info SET name='$name', address='$address' WHERE id=$id";
// if (mysqli_query($db, $sql)) {
// $_SESSION['message'] = "Address Updated";
// } else {
// $_SESSION['message'] = "Address Update Failed!";
// }
// header('location: index.php');
//}
//if (isset($_GET['del'])) {
// $id = $_GET['del'];
// $sql = "DELETE FROM info WHERE id=$id";
// if (mysqli_query($db, $sql)) {
// $_SESSION['message'] = "Address Deleted";
// } else {
// $_SESSION['message'] = "Address Delete Failed!";
// }
// header('location: index.php');
//}
//if (isset($_GET['edit'])) {
// $id = $_GET['edit'];
// $update = true;
//
// $record = mysqli_query($db, "SELECT * FROM info WHERE id=$id");
// if (mysqli_num_rows($record) == 1) {
// $n = mysqli_fetch_array($record);
// $name = $n['name'];
// $address = $n['address'];
// }
//}