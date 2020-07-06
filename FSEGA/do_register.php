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

$csapatnev = $_POST["csapatnev"];
$tanarnev = $_POST["tanarnev"];
$iskola = $_POST["iskola"];
$helyseg = $_POST["helyseg"];

$csaladnev1 = $_POST["lastname1"];
$keresztnev1 = $_POST["firstname1"];
$szak1 = $_POST["szak1"];
$ev1 = $_POST["ev1"];
$email1 = $_POST["email1"];
$tel1 = $_POST["tel1"];

$csaladnev2 = $_POST["lastname2"];
$keresztnev2= $_POST["firstname2"];
$szak2 = $_POST["szak2"];
$ev2 = $_POST["ev2"];
$email2 = $_POST["email2"];
$tel2= $_POST["tel2"];

$csaladnev3 = $_POST["lastname3"];
$keresztnev3 = $_POST["firstname3"];
$szak3 = $_POST["szak3"];
$ev3= $_POST["ev3"];
$email3 = $_POST["email3"];
$tel3 = $_POST["tel3"];

$password = $_POST["password"];


if (
    $csapatnev == "" || $tanarnev == "" || $iskola == "" || $helyseg == "" ||
    $csaladnev1 == "" || $keresztnev1 == "" || $szak1 == "" || $ev1 == "" || $email1 == "" || $tel1 == "" ||
    $csaladnev2 == "" || $keresztnev2 == "" || $szak2 == "" || $ev2 == "" || $email2 == "" || $tel2 == "" ||
    $csaladnev3 == "" || $keresztnev3 == "" || $szak3 == "" || $ev3 == "" || $email3 == "" || $tel3 == "" ||
    $password == ""
) {
		$_SESSION["register_error"] = true;
		header("Location: http://localhost/FSEGA/register.php");
}

// insert students
$conn->query("INSERT INTO diakok(Csaladnev, Keresztnev, Szak, Evfolyam, Email, Tel)
                        VALUES ('$csaladnev1', '$keresztnev1', '$szak1', $ev1, '$email1', '$tel1'),
                               ('$csaladnev2', '$keresztnev2', '$szak2', $ev2, '$email2', '$tel2'),
                               ('$csaladnev3', '$keresztnev3', '$szak3', $ev3, '$email3', '$tel3')");

// get students ids
$id1 = $conn->query("SELECT * FROM diakok WHERE Tel = '$tel1'")->fetch_assoc()['DiakID'];
$id2 = $conn->query("SELECT * FROM diakok WHERE Tel = '$tel2'")->fetch_assoc()['DiakID'];
$id3 = $conn->query("SELECT * FROM diakok WHERE Tel = '$tel3'")->fetch_assoc()['DiakID'];

// insert into team
$result = $conn->query("INSERT INTO csapatok(CsapatNev, TanarNev, IskolaNev, Helyseg, DiakID1, DiakID2, DiakID3, Password)
                                VALUES ('$csapatnev', '$tanarnev', '$iskola', '$helyseg', $id1, $id2, $id3, '$password')");

if ($result) {
	$_SESSION["registered"] = true;
	unset($_SESSION['register_error']);
	$_SESSION['csapatnev'] = $csapatnev;
	header("Location: http://localhost/FSEGA/index.php");
}

$conn->close();

?>