<?php

function connect() {
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "rating";
    $con = mysqli_connect($hostname, $username, $password, $dbname);	
  return $con;
}


if(isset($_REQUEST['type'])) {
    if($_REQUEST['type'] == 'save') {
        $vote = $_REQUEST['vote'];
        $show_id = $_REQUEST['show_id'];
        $query = "INSERT INTO rating (show_id, vote) VALUES ('$show_id', '$vote')";
            // get connection
            $con = connect();
            $result = mysqli_query($con, $query);
            echo 1; exit;
	} 
}
 
?>