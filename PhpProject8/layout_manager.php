<?php
	function loginform() {
		echo "<form action='/PhpProject8/validatelogin.php' method='POST'>
			  <p>Username:</p>
			  <input type='text' id='usernameinput' name='usernameinput' />
				<p>Password:</p>
				<input type='password' id='passwordinput' name='passwordinput' />
				<input type='submit' value='Login' />
				<button type='button' onclick='location.href=\"/PhpProject8/register.html\";'>Register</button>
			</form>";
	}
        function logout() {
		echo nl2br("<p>Welcome ".$_SESSION['username']."!\nLooking good today!</p>
				<form action='/PhpProject8/logout.php' method='GET'>
				<input type='submit' value='Logout' /></form>");
	}
?>