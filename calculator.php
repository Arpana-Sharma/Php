<html>
    <body>
        <form action="calculator.php" method="post">
            <input type="number" name = "num1">
            <br>
            <input type="number" name = "num2">
            <input type="email" name="email" id="">
            <input type="submit">
        </form>
        <?php 
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                echo $_POST["num1"]+$_POST["num2"];
                echo "<br";
                echo $_POST["email"];
            }
        ?>
    </body>
</html>