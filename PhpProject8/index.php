<?php
	include ('layout_manager.php');
        include ('content_function.php');
?>
<html>
<head><title>KeepLeView's Discussion Forum</title></head>
<link rel="stylesheet" type="text/css" href="main.css">
<body>
	<div class="pane">
            <div class="header"><h1><a href="/PhpProject8">KeepLeView's Discussion Forum</a></h1></div>
            <div class="loginpane">
			<?php
                                session_start();
				if (isset($_SESSION['username'])) {
					logout();
				} else {
					if (isset($_GET['status'])) {
						if ($_GET['status'] == 'reg_success') {
							echo "<h1 style='color: green;'>new user registered successfully!</h1>";
                                                } else if ($_GET['status'] == 'login_fail') {
							echo "<h1 style='color: red;'>invalid username and/or password!</h1>";
						}
					}
                                        loginform();
				}
			?>
		</div>
 
            <div class="forumdesc">
			<p>Welcome to KeepLeView's Discussion Forum. Please do give us recommendations for our food items!!</p>
		</div>
            <div class="content">
                    <?php dispcategories(); ?>
                </div>
        </div>                
</body>
</html>