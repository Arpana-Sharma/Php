<?php
    // Ways to connect MYSQL with PHP
    // 1. MYSQLi extension
    // 2.PDO
    // Connecting to DAtabase
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername,$username,$password);
    if(!$conn){
        die("Connection Unsuccessful!<br>" . mysqli_connect_error());
    }
    echo "Successful";
    $sql = "create database mydata2";
    echo var_dump(mysqli_query($conn,$sql));
    $sql2 = "CREATE TABLE `mydata2`.`student` ( `sNo` INT(3) NOT NULL AUTO_INCREMENT ,  
    `Name` VARCHAR(30) NOT NULL , `Email` VARCHAR(30) NOT NULL ,`Website` VARCHAR(30) , `Comment` VARCHAR(100) , `Gender` VARCHAR(7) NOT NULL, PRIMARY KEY  (`sNo`));";
    echo var_dump(mysqli_query($conn,$sql2));
?>
