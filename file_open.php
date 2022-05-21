<html>
    <body>
    <?php
        $myfile = fopen("text.txt", "r") or die("Unable to open file!");
        //echo fread($myfile,filesize("text.txt"));
        echo fgets($myfile);
        echo "<br>"; // Returns a single line
        
        while(!feof($myfile)) {
            echo fgets($myfile) . "<br>";
        }
        fclose($myfile);
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        $txt = "Arpana Sharma\n";
        fwrite($myfile, $txt);
        $txt = "DOB 17/01/2003\n";
        fwrite($myfile, $txt);
        fclose($myfile);
    ?>
    </body>
</html>