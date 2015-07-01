<?php

		require("connectionModule.php");
		
    /*Beginning of the running code*/
    $conn = createConnection();

    $sql = "SELECT * FROM prodotti";
    $result_tmp = $conn->query($sql);
		$results = array();

    if ($result_tmp->num_rows > 0) {
      // output data of each row
      while($row = $result_tmp->fetch_assoc()){
        $results[]= $row;
      }
			print 'numero elementi nell\'array result_tmp: '.count($result_tmp)."\n";
			print 'numero elementi nell\'array results: '.count($results)."\n";
			print 'results: '.(json_encode($results))."\n";
    } else {
      echo "0 results";
    }

    closeConnection($conn);
