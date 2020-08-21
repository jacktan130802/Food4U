<?php
	include ('layout_manager.php');
	include ('content_function.php');
	addview($_GET['cid'], $_GET['scid'], $_GET['tid']);
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
						if ($_GET['status'] == 'reg-success') {
							echo "<h1 style='color: green;'>new user registered successfully!</h1>";
						} else if ($_GET['status'] == 'login-fail') {
							echo "<h1 style='color: red;'>invalid username and/or password!</h1>";
						}
					}
					loginform();
				}
			?>
		</div>
		<div class="forumdesc">
			<p>Welcome to KeepLeView's Discussion Forum. Please do give us recommendations for our food items!!</p>
			<?php
				if (!isset($_SESSION['username'])) {
					echo "<p>please login first or <a href='/PhpProject8/register.html'>click here</a> to register.</p>";
				}
			?>
		</div>
		<?php
			if (isset($_SESSION['username'])) {
				replytopost($_GET['cid'], $_GET['scid'], $_GET['tid']);
			}
		?>
		<div class="content">
			<?php disptopic($_GET['cid'], $_GET['scid'], $_GET['tid']); ?>
		</div>
	</div>
</body>
</html>