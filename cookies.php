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
        //Cookies vs Session
        //Cookie is stored in browser (not secured)
        //Session is carefully stored in server (secured)
        setcookie("category","Books",time()+86400,"/");
        echo("The cookie is set!");
    ?>
</body>
</html>