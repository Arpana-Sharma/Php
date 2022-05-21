<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $conn = mysqli_connect($servername,$username,$password);
        if(!$conn){
            echo "Pagal <br>";
        }
        $sql = "create database mydata3;";
        mysqli_query($conn,$sql);
        $sql2 = "use mydata3;";
        mysqli_query($conn,$sql2);
        $sql3 = "SELECT * from `candidate`;";
        $result = mysqli_query($conn,$sql3);
        // echo $result;
        while($row = mysqli_fetch_assoc($result)){
            foreach($row as $key=>$value){
                echo $key . "=" . $value ."  ";
                echo "|";
            }
            echo "<br>";
        }
    ?>
</body>
</html>