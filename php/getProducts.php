<?php

    require("config.php");
    $con = mysqli_connect($server, $username, $password, $database) or die("DB not connected!");

    $result = mysqli_query($con, "SELECT id, nome, descrizione, prezzo FROM prodotti limit 10") or die("Query error!");

    $products = array();

    while($l = mysqli_fetch_assoc($result)){
      array_push($products, array("id" => $l['id'], "name" => $l['nome'], "description" => $l['descrizione'], "price" => $l['prezzo']));
    }

    header('Content-Type: application/json');

    echo json_encode(array("products" => $products));
    mysqli_close($con);
