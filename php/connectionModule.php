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
