 <?php
$servername = "localhost"; /*dit is je servernaam (xampp) */
$username = "root";        /*dit is je root   (xampp) */             
$password = "root";            /*dit is je pasword   (xampp) */
$database = "groente&fruit";  /*dit is de naam van je database (xampp)  */
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
    } 
catch(PDOException $e)
    { 
    echo "Connection failed: " . $e->getMessage();
    }
?> 