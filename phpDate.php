<html>
    <body>
        <?php
            date_default_timezone_set("Asia/Calcutta");
            echo "Today is ",date("H:i:s a d/m/Y"); 
            
            // mktime(hour, minute, second, month, day, year)
            $d = mktime(3, 45, 6, 3, 18, 2022);
            echo "<br>Date made " . date("Y-m-d h:i:sa", $d);
            echo "<br>Today is " . date("l");

            $d=strtotime("10:30pm April 15 2014");
            echo "<br>Created date is " . date("Y-m-d h:i:sa", $d);

            $d=strtotime("tomorrow");
            echo date("Y-m-d h:i:sa", $d) . "<br>";
            
            $d=strtotime("next Saturday");
            echo "Next Saturday" . date("Y-m-d h:i:sa", $d) . "<br>";
            
            $d=strtotime("+3 Months");
            echo date("Y-m-d h:i:sa", $d) . "<br>";

            $startdate = strtotime("Saturday");
            $enddate = strtotime("+6 weeks", $startdate);
            
            while ($startdate < $enddate) {
              echo "Next Saturdays " . date("M d", $startdate) . "<br>";
              $startdate = strtotime("+1 week", $startdate);
            }

            $d1=strtotime("July 04");
            $d2=ceil(($d1-time())/60/60/24);
            echo "There are " . $d2 ." days until 4th of July.";
        ?>
    </body>
</html>