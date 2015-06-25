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

    $sql = "SELECT * FROM prodotti ";
    $result = $conn->query($sql);
    $resultArray = array();

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()){
        $resultArray[] = $row;
      }
      print json_encode($resultArray);
    } else {
      echo "0 results";
    }

    //header('Content-Type: application/json');

    /*print json_encode(array("products" => $products))."\n";
    print "disagio\n";
    print json_encode($products);*/

    closeConnection($conn);
