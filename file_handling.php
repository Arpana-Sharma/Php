<html>
    <body>
        <?php
            include "var_file.php";
            //include "imaginary.php";
            //Warning: include(imaginary.php): failed to open stream: No such file or directory

            //Warning: include(): Failed opening 'imaginary.php'
            //require "imaginary.php";
            //Warning: require(imaginary.php): failed to open stream: No such file or directory

            //Fatal error: require(): Failed opening required 'imaginary.php' (include_path='C:\xampp\php\PEAR')
            echo $a . $august; 
            echo readfile("phpDate.php");
        ?> 
    </body>
</html>