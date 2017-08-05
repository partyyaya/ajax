<?php
	// http request error
	if (!isset($_GET['account'])){
		$return = array('result' => -1);
		echo json_encode($return);
		return;
	}

	// mysql server error
	$account = $_GET['account'];
	$conn = mysqli_connect('127.0.0.1','root','root','ming',3306);
	if (mysqli_connect_error()){
		$return = array('result' => -2);
		echo json_encode($return);
		return;
	}

	$sql = "select * from member where account='{$account}'";
	$rs = mysqli_query($conn, $sql);
	if (mysqli_num_rows($rs)>0){
		// 重複
		$return = array('result' => 1);
		echo json_encode($return);
		return;
	}else{
		// OK
		$return = array('result' => 0);
		echo json_encode($return);
		return;
	}


?>