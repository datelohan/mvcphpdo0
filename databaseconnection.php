<?php 
class DatabaseConnection {
    public function connection(){
        $hostname = "127.0.0.1";
        $database = "mvc";
        $username = "root";
        $password = "";

        $conn = mysqli_connect($hostname, $username, $password, $database);
        if (!$conn){
            die("Connection Failed:" .mysqli_connect_error());
        }
        echo "Connected Success";
    }
}
?>
g