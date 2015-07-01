<?php

    /*Functions declaration*/
	  function createConnection(){
      //-Declaration DB connection parameters
      require("config.php");

		  // Create connection
		  $conn = new mysqli($servername, $username, $password, $dbname);
		  // Check connection
		  if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
		  }
		  return $conn;
	  }

    function closeConnection($conn){
      $conn->close();
	  }

    /*Beginning of the running code*/
    $conn = createConnection();


    /*$result = mysqli_query($conn, "SELECT id, nome, descrizione, prezzo FROM prodotti") or die("Query error!");

    $products = array();

    while($l = mysqli_fetch_assoc($result)){
      array_push($products, array("id" => $l['id'], "name" => $l['nome'], "description" => $l['descrizione'], "price" => $l['prezzo']));
    }*/

    $sql = "SELECT * FROM prodotti";
    $result_tmp = $conn->query($sql);
		$results = array();
    //$resultArray = array();

    if ($result_tmp->num_rows > 0) {
      // output data of each row
      while($row = $result_tmp->fetch_assoc()){
        $results[]= $row;
      }
			//$resultArray=json_encode($results);
			print 'numero elementi nell\'array result_tmp: '.count($result_tmp)."\n";
			print 'numero elementi nell\'array results: '.count($results)."\n";
			//print 'numero elementi nell\'array resultArray: '.count($resultArray)."\n";
			print 'results: '.(json_encode($results))."\n";
			//var_dump(($results));
			//print_r(array_values($results));
      //print 'resultArray: '.($resultArray)."\n";
			//print 'I should have printed the resultArray';
    } else {
      echo "0 results";
    }

    //header('Content-Type: application/json');

    /*print json_encode(array("products" => $products))."\n";
    print "disagio\n";
    print json_encode($products);*/

    closeConnection($conn);
