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

$target = "C:\wamp64\www\FSEGA\uploads\\";

// Check if it uploaded correctly
if($_FILES['file']['error'] > 0){
	$_SESSION["upload_error"] = true;
	header("Location: http://localhost/FSEGA/upload_project.php");
}

// Check if an identical filename already exists. Rename
else if(file_exists($target . $_FILES['file']['name'])){
	$random = rand(10000, 99999);

	// Split by .
	$split_filename = explode(".", $_FILES['file']['name']);
	$name = $split_filename[0];
	$extension = $split_filename[1];

	// Rename
	$_FILES['file']['name'] = $name . "-" . $random . "." . $extension;
}

// Move the file into the upload folder
if($_FILES['file']['name'] != ""){
	move_uploaded_file($_FILES['file']['tmp_name'], $target . $_FILES['file']['name'])
	or
	die('Error uploading file - check destination is writeable.');
}


$project_title = $_POST["project-title"];
$csapat_id = $_SESSION["csapat_id"];
$today = date("Y-m-d");
$filename = $_FILES['file']['name'];
$fordulo = $_POST["fordulo"];

if ($project_title == "") {
	$_SESSION["upload_error"] = true;
	header("Location: http://localhost/FSEGA/upload_project.php");
}

$row_cnt= $conn->query("SELECT * FROM resztvesz WHERE Kiadas = 2020 AND Fordulo = '$fordulo' AND CsapatID = $csapat_id")->num_rows;

if ($row_cnt == 0) {
    $conn->query("INSERT INTO resztvesz(CsapatID, Kiadas, Fordulo, Pontszam)
                            VALUES($csapat_id, 2020, '$fordulo', 0)
");
}

$result = $conn->query("INSERT INTO projekt(Cim, CsapatID, FileNev, FeltDatum, Vegleges) VALUES ('$project_title', $csapat_id, '$filename', '$today', 1)");

if ($result) {
	$_SESSION["uploaded"] = true;
	unset($_SESSION['upload_error']);
	header("Location: http://localhost/FSEGA/index.php");
}



