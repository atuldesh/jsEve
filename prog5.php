<?php
$host = 'localhost';
$db = 'vc';
$user = 'root';
$password='';
$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
	$pdo = new PDO($dsn, $user, $password);
    $json = file_get_contents('php://input');
    // Converts it into a PHP object
    $data = json_decode($json);    
	if ($pdo) {
        $sql = "insert into members (mname,age,bdate) values (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$data->mname,$data->age,$data->bdate]);
        echo "Record Saved.";
    }
 } catch (PDOException $e) {
        echo $e->getMessage();
}
    ?>