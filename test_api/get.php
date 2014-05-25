<?php

$dsn = 'mysql:dbname=test_api;host=localhost';
$user = 'root';
$password = 'root';

try{
		    $dbh = new PDO($dsn, $user, $password);
}catch (PDOException $e){
		    print('Error:'.$e->getMessage());
							    die();
}

$stmt = null;
if(!$_GET){
		$sql = 'select id, name from student';
		    $stmt = $dbh->prepare($sql);
			$stmt->execute();
}else{
		$sql = 'select id, name from student where id = ?';
		    $stmt = $dbh->prepare($sql);
			$stmt->execute(array($_GET['id']));
}
		$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$res = array("data" => $res);
			echo json_encode($res);
