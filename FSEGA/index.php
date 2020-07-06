<?php
include 'header.php';
session_start();
include 'navbar.php';

if (isset($_SESSION['registered'])) {
	$name = $_SESSION["csapatnev"];
	echo "<div id='register-success'>Sikeres feliratkozás! Üdv, $name </div>";
	unset($_SESSION['registered']);
}

if (isset($_SESSION['uploaded'])) {
	echo "<div id='register-success'>Sikeres feltöltés!</div>";
	unset($_SESSION['uploaded']);
}


include 'page_header.php';
?>

<?php
include 'footer.php';
?>


