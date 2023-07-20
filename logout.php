<!--
	The 'logout.php' page is the end page of the chronological ordering. 
        Once the user wants to logout, they will end their session and gets redirected to default opening page (login.html)
-->
<?php
session_start();

header("Location: login.html");
exit;
?>