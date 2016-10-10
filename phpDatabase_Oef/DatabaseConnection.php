<?php
require_once 'databaseConfig.php';

class DatabaseConnection{
    public static $conn;

    //Destructor closes the connection
    function __destruct() {
        $this->close();
    }
    //Close connection
    function close(){
        mysqli_close(self::$conn);
    }

    static function getConnection(){
        //Gegevens van de database ophalen
        if(is_null(self::$conn)){
            //Connectie maken
            $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

            if($conn->connect_error){
                die("Couldn't connect to database: " . $conn->connect_error);
            } else {
//                Debug::d_echo("Connected successfully");
                self::$conn = $conn;
            }
        }
        return self::$conn;
    }

}
?>



