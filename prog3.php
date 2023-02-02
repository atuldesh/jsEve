<?php
$mname = $_POST['mname'];
$age = $_POST['age'];


$host = 'localhost';
$db = 'vc';
$user = 'root';
$password='';
$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
	$pdo = new PDO($dsn, $user, $password);

	if ($pdo) {
        $sql = "insert into members (mname,age) values (?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$mname,$age]);
        echo "Record Saved.";
    }
 } catch (PDOException $e) {
        echo $e->getMessage();
}
    ?>