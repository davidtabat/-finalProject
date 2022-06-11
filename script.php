<?php
// pdo php mysql connection
  
  $servername= "db";
  $username="root";
  $password="root";

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];


  if (!$fname) {
    echo "Please, fill in your First Name.\n";
    return;
  } else if(!preg_match('/^[a-z]*$/i', $fname)){
    echo "First Name Should contain only letters.\n";
    return;
  }   

  if (!$lname) {
    echo "Please, fill in your Last Name\n";
    return;
  } else if(!preg_match('/^[a-z]*$/i', $lname)){
    echo "Last Name Should contain only letters.\n";
    return;
  }   

  if (!$email) {
    echo "Please, fill in your E-mail.\n";
    return;
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Please, enter valid email.\n";
    return;
  }
  
  // create connection
  try{
    $conn = new PDO("mysql:host=$servername;dbname=david",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

    $sql = "INSERT INTO users (name, surname, email)
    VALUES ('{$fname}', '{$lname}', '{$email}')";

    $conn->query($sql);

    echo "Form Successfully sent!";

  } catch(PDOException $e){
    echo "connection failed". $e->getMessage();
  } 

  ?>
