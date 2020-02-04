<?php
    class Db {
        public  $host='localhost';
        public  $dbName='videochat';
        public  $userName='root';
        public  $password='';
        public static $con;


        function __construct() {
            try {
                self::$con = mysqli_connect( $this->host,$this->userName,$this->password,$this->dbName);
            }
            catch(PDOException $e)
            {
                echo "Connection failed: " . $e->getMessage();exit();
            }
        }
        public static function select($query){
              $result = mysqli_query(self::$con, $query);
              return $result->fetch_all(MYSQLI_ASSOC);
        }
    }
?>
