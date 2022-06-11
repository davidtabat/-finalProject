<?php

$id = $_POST['id'];

// pdo php mysql connection
  
  $servername= "db";
  $username="root";
  $password="root";

  // create connection
  try{
    $conn = new PDO("mysql:host=$servername;dbname=david",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

    $conn->exec("DELETE FROM users WHERE id={$id}");

  } catch(PDOException $e){
    echo "connection failed". $e->getMessage();
  } 