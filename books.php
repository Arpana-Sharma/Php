<html>
    <body>
        <?php
        $books = simplexml_load_file("books.xml") or die("Cannot open file");
        foreach($books as $xobj){
            echo $xobj . "<br>";
        }
        ?>
    </body>
</html>