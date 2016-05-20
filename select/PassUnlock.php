<?php
	$username = $_GET['username'];
	$password = $_GET['password'];
	$time = $_GET['time'];

	include('../conn.php');
	$sql = "select home_pass from myhome where home_id = (select home_id from user where username = '$username')";
	if (mysql_query($sql)) {
		$row = mysql_fetch_array(mysql_query($sql));
		if ($row['home_pass'] == $password) {
			$home_id_sql = "select home_id from user where username = '$username' limit 1";	
			$row_home_id = mysql_fetch_array(mysql_query($home_id_sql));
			$home_id = $row_home_id['home_id'];

			$insert_sql = "INSERT INTO myunlock(id,unlock_time, username, home_id) VALUES (null, '$time', '$username', '$home_id')";
			if (mysql_query($insert_sql,$conn)) {
				echo "success";
				exit();
			}else{
				//echo mysql_error() . "\n";
				echo "lose";
				exit();
			}
		}else{
			echo "lose";		
		}

	}else{
		echo "lose";
	}
	

?>