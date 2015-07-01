<?php
		header('Content-Type: application/json');
		require("connectionModule.php");

    /*Beginning of the running code*/
    $conn = createConnection();

    $sql = "SELECT * FROM prodotti LIMIT 1";
    $result_tmp = $conn->query($sql);
		$results = array();

    if ($result_tmp->num_rows > 0) {
      // output data of each row
      while($row = $result_tmp->fetch_assoc()){
        $results[]= $row;
      }
			print json_encode(array("products" => $results));
		} else {
      echo "0 results";
    }

    closeConnection($conn);
