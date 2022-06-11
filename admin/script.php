<?php
// pdo php mysql connection
  
  $servername= "db";
  $username="root";
  $password="root";

  // create connection
  try{
    $conn = new PDO("mysql:host=$servername;dbname=david",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

    $data = $conn->query("SELECT * FROM users")->fetchAll();

    echo json_encode($data);

  } catch(PDOException $e){
    echo "connection failed". $e->getMessage();
  } 