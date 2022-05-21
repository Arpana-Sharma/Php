<html>
    <head>
        <style>
            .error {color: #FF0000;}
            #h{
                font-size: 4rem;
                color: white;
                text-align: centre;
                padding-left: 500px;
            }
            #contact{
                position: relative;
            }
            #contact::before{
                content: "";
                position: absolute;
                width: 100%;
                height: 100%;
                z-index: -1;
                opacity: 0.7;
                background: url("https://images.unsplash.com/photo-1531545514256-b1400bc00f31?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80") no-repeat center center/cover;
            
            }
            #contact-box{
                display: flex;
                justify-content: center;
                align-items: center;
                padding-bottom: 34px;
            }
            #contact-box input, 
            #contact-box textarea{
                width: 100%;
                padding: 0.5rem;
                border-radius: 9px;
                font-size: 1.1rem;
            } 
            
            #contact-box form{
                width: 40%;
            }
            
            #contact-box label{
               font-size: 1.3rem;
               font-family: 'Bree Serif', serif;            
            }
            #success{
                display: block;
                /* position: absolute; */
                /* top: 20px;
                left: 50px; */
                background-color: #7add80;
                margin: auto;
                padding: 10px;
                text-align: centre;
            }
        </style>
    </head>
    <body> 
        
        <?php
            $name = $email = $gender = $comment = $website = $message = "";
            $nameErr = $emailErr = $genderErr = $websiteErr = "";
            $e = 0;

            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["name"])) {
                    $nameErr = "Name is required";
                    $e = 1;
                } else {
                    $name = test_input($_POST["name"]);
                }
                
                if (empty($_POST["email"])) {
                    $emailErr = "Email is required";
                    $e = 1;
                } else {
                    $email = test_input($_POST["email"]);
                }
                  
                if (empty($_POST["website"])) {
                    $website = "";
                } else {
                    $website = test_input($_POST["website"]);
                }
            
                if (empty($_POST["comment"])) {
                    $comment = "";
                } else {
                    $comment = test_input($_POST["comment"]);
                }
            
                if (empty($_POST["gender"])) {
                    $genderErr = "Gender is required";
                    $e = 1;
                } else {
                    $gender = test_input($_POST["gender"]);
                }
                if(!preg_match("/^[a-zA-Z-']*$/",$name)){
                    $nameErr = "Only letters and white space allowed";
                    $e = 1;
                }
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    $emailErr = "Invalid Email";
                    $e = 1;
                }
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                    $websiteErr = "Invalid URL";
                    $e = 1;
                }
                if($e == 0){
                    $message = "Your record had been submitted successfully";
                }
            }  
        ?>
        <section id="contact">
            <h1 id="h">Contact Us</h1>
            <div id="contact-box">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                    <div class="form-group">
                        Name: <input type="text" name="name">
                        <span class="error">* <?php echo $nameErr;?></span>
                        <br><br>
                    </div>
                    <div class="form-group">
                        E-mail: <input type="text" name="email">
                        <span class="error">* <?php echo $emailErr;?></span>
                        <br><br>
                    </div>
                    <div class="form-group">
                        Website: <input type="text" name="website">
                        <span class="error"><?php echo $websiteErr;?></span>
                        <br><br>
                    </div>
                    <div class="form-group">               
                        Comment: <textarea name="comment" rows="5" cols="40" ></textarea>
                        <br><br>
                    </div>
                    <div class="form-group">
                        Gender:
                        <input type="radio" name="gender" value="female">Female
                        <input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="other">Other
                        <span class="error">* <?php echo $genderErr;?></span>
                        <br><br>
                    </div>           
                    <div>
                        <input type="submit" name="submit" value="Submit" id = "btn">
                        <span id = "success"> <?php echo $message;?></span>
                        <br><br>
                    </div>
                </form>
                <p id = "last"></p>
            </div>
        </section>        
        <?php
            
            $name = htmlspecialchars($name);
            $email = htmlspecialchars($email);
            $website = htmlspecialchars($website);
            $comment = htmlspecialchars($comment);
            $gender = htmlspecialchars($gender);
            $servername = "localhost";
            $username = "root";
            $password = "";
            $conn = mysqli_connect($servername,$username,$password);
            if(!$conn){
                echo "Pagal <br>";
            }
            $sql = "create database mydata3;";
            mysqli_query($conn,$sql);
            $sql2 = "CREATE TABLE `mydata3`.`candidate` ( `sNo` INT(3) NOT NULL AUTO_INCREMENT , `Name` VARCHAR(30) NOT NULL , `Email` VARCHAR(20) NOT NULL , `Website` VARCHAR(30) , `Comment` VARCHAR(100) , `Gender` VARCHAR(7) NOT NULL , PRIMARY KEY (sNo));";
            $sql4 = "use mydata3;";
            mysqli_query($conn,$sql2);
            mysqli_query($conn,$sql4);
            // echo $name . $email;
            $sql3 = "INSERT INTO `candidate` (`Name`, `Email`, `Website`, `Comment`, `Gender`) VALUES ('$name' , '$email' , '$website' , '$comment' , '$gender');";
            mysqli_query($conn,$sql3);
            $_POST = array();
        ?>
        
    </body>
</html>