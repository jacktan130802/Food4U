<?php 
include('connection.php');
session_start();
$_SESSION['currentPage']='forum.php'; 
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Forum</title>
         
        
        <!-- Content -->
        <main role="main">
        <div class="jumbotron" style="padding-top:15px;padding-bottom:30px;margin-bottom:0px;background-color: white;color:white">
            <div class="mx-auto">
                <form method="post" action="search.php">
                    <input type="text" name="searchQuery"><button name="search"><img src="searchicon.png" height="20" width="20" style="padding:0px;margin-bottom:4px"></button>
                </form>
<?php
if (isset($_POST['search'])) {
    
    if(isset($_POST['searchQuery'])){
    $query = "SELECT * FROM search WHERE foodname LIKE '%".$_POST['searchQuery']."%' ORDER BY id DESC";
    $result = mysqli_query($link, $query);
//    $row = mysqli_fetch_array($result)
        while($row = mysqli_fetch_array($result)) {
          
            echo '<div class="row" style="color:black;background-color:white;border-radius:5px;padding:10px;margin-top:10px;margin-bottom:10px">';
            echo '<div class="column" style="width:100%;border:5px">';
            echo '<b>Food: </b>'.$row['foodname'].'<br>';
//            echo '<b>Price: </b>'.$row['foodprice'].'<br><b>'.$row['time'].'</b><br>';
            echo '<b>Description: </b><br>'.$row['fooddesc'].'<br>';
//            echo '<img width="60%" src="data:image;base64,'.$row['image'].'"alt="Image" style="padding-top:10px">';
            echo '</div></div>';
        }
    }
    }
else {
    echo 'Not Found';
}


?>
</div>
</div>
