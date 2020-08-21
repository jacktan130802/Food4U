<?php
session_start();
$db = mysqli_connect('localhost:3308', 'root', '', 'feedback');
if (!$db) {
 die("Connection failed: " . mysqli_connect_error());
}
// initialize variables
$name = "Jack";
$email = "dsfsad";
$food ="sddfsa";
$food2 ="sddfsa";
$comments="sadfd";
$phone= "123";
$date= "123";
$address="sadfd";
$id = 0;
$update = false;
//if (isset($_POST['save'])) {
 $name = $_POST['name'];
 $email = $_POST['email'];
 $food = $_POST['food'];
 $food2 = $_POST['food2'];
 $comments = $_POST['comments'];
 $phone = $_POST['phone'];
 $address=$_POST['address'];
 $date=$_POST['date'];
 $sql = "INSERT INTO delivery (name,email,food,comments,phone,address,date,food2) VALUES ('$name', '$email','$food','$comments','$phone','$address','$date','$food2')";

 if (mysqli_query($db, $sql)) {
   header("Location:index.html");
// $_SESSION['message'] = "Address Saved";
//    echo 'hello';
 } else {
//     echo mysqli_error($sql,$db);
// $_SESSION['message'] = "Address Save Failed!";
      echo "Error: " . $sql . "<br>" . mysqli_error($db);
 }
 
// mysqli_close($db);
 ?>