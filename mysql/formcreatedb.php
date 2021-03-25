<html>
<body>
    <form action = "#" method = "get">
        ชื่อฐานข้อมูลที่ต้องการสร้าง : <input type = "text" name = "namedb"><br>
        ชื่อตารางฐานข้อมูลที่ต้องการสร้าง : <input type = "text" name = "tablename"><br>
        ชื่อจริง : <input type = "text" name = "firstname"><br>
        นามสกุล : <input type = "text" name = "lastename"><br>
        E-mail : <input type = "text" name = "email"><br>
        <input type = "submit" name = "submit" value = "input">
    </form>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "12345";
        $dbname = $_GET["namedb"];
        $tablename = $_GET["tablename"];
        $fisrtname = $_GET["firstname"];
        $lastname = $_GET["lastename"];
        $email = $_GET["email"];
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // sql to create table
        if(isset($_GET["submit"])){
            $sql = "INSERT INTO ".$tablename." (firstname, lastname, email) VALUES ('$fisrtname','$lastname','$email')";
            //$sql = "CREATE TABLE ".$tablename ."(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,firstname VARCHAR(30)= pp,lastname VARCHAR(30) NOT NULL,email VARCHAR(50),reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
            if ($conn->query($sql) === TRUE) {
                echo "Table ".$tablename." created successfully";
            } 
            else {
                echo "Error creating table: " . $conn->error;
            }
            $conn->close();
        }
    ?>
</body>
</html>