<?php


session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kutv";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$csapat_nev = $_POST["csapatnev"];
$password = $_POST["pass"];

if ($result = $conn->query("SELECT * FROM csapatok WHERE CsapatNev = '".$csapat_nev."' AND  Password = '".$password."'")) {

	/* determine number of rows result set */
	$row_cnt = $result->num_rows;
	if ($row_cnt > 0) {
		$_SESSION["logged_in"] = true;
		$_SESSION["csapat_id"] = $result->fetch_assoc()['CsapatID'];
		header("Location: http://localhost/FSEGA/index.php");
	} else {
		$_SESSION["error"] = true;
		header("Location: http://localhost/FSEGA/login.php");
	}
}
$conn->close();

?>