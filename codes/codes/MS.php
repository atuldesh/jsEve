<?php

$stitle = $_POST['title'];
$sname = $_POST['name'];
$aaddress = $_POST['aaddress'];
$baddress = $_POST['baddress'];
$scity = $_POST['city'];
$sregion = $_POST['region'];
$spin = $_POST['pin'];
$scountry = $_POST['country'];
$smail = $_POST['mail'];
$sdate = $_POST['date'];
$smob = $_POST['mob'];
$sage = $_POST['age'];



$host = 'localhost';
$db = 'sg';
$user = 'root';
$password='';
$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
	$pdo = new PDO($dsn, $user, $password);

	if ($pdo) {
        $sql = "insert into marksheet (title,name,aaddress,baddress,city,region,pin,country,mail,date,mob,age) values (?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$stitle,$sname,$aaddress,$baddress,$scity,$sregion,$spin,$scountry,$smail,$sdate,$smob,$sage]);
        echo "Successful !";
    }
 } catch (PDOException $e) {
        echo $e->getMessage();
}
?>