<?php
		header('Content-Type: application/json');
		require("connectionModule.php");

		$productIDReferer = $_SERVER['HTTP_REFERER'];
		$productIDArray = array();
		parse_str(parse_url($productIDReferer,PHP_URL_QUERY ), $productIDArray);

		//echo 'productIDArray["id"]'.$productIDArray['id']."\n";
		$productIDInteger = (int)$productIDArray['id'];
		//echo 'productIDInteger'.$productIDInteger;
		/*Beginning of the running code*/
    $conn = createConnection();

    //$sql = "SELECT * FROM prodotti LIMIT 1";
		$sql = "SELECT * FROM prodotti where id=$productIDInteger";
		//$sql = "SELECT * FROM prodotti WHERE id=(int)$productIDArray['id']";
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
		//$productIDisagio = $_SERVER['REQUEST_URI'];
		/*$productIDReferer = $_SERVER['HTTP_REFERER'];
		$productIDArray = array();
		echo "\n";
		//parse_str($productIDReferer, $productIDArray);
		//var_dump(parse_url($productIDReferer ));
		//var_dump(parse_url($productIDReferer,PHP_URL_QUERY ));
		//var_dump(parse_str(parse_url($productIDReferer,PHP_URL_QUERY ), $productIDArray));
		parse_str(parse_url($productIDReferer,PHP_URL_QUERY ), $productIDArray);
		//var_dump($productIDisagio);
		//echo "\n";
		var_dump($productIDReferer);
		echo "\n"."SUPERDISAGIO: "."\n";
		var_dump($productIDArray['id']);
		//echo "productID:	\n";
		//var_dump($productIDisagio);*/
