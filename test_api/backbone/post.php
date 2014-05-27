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

	$sql = 'select id, name from student';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

//	   while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
//			        print($result['id']);
//			        print($result['name'].'<br>');
//		 }

	//	echo json_encode($_POST);	

		$reqData = json_decode(file_get_contents('php://input'), TRUE);
		$respBody = array('user_name' => $reqData['user_name']);
		echo json_encode($respBody);

