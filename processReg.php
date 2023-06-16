<?php
// $hostname = "localhost";  // Replace with your hostname
// $username = "root";
// $password = " ";
// $database = "techdb";

// // Create connection
// $conn = new mysqli($hostname, $username, $password, $database);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";

error_reporting(0);
class register{

    public $connect;
    public function __construct(){
        $this->host = "localhost";
        $this->user = "root";
        $this->password = "password";
        $this->db = "techdb";

        $this->connect = mysqli_connect($this->host,$this->user,$this->password,$this->db);
        // $this->connect = mysqli_connect("localhost","root","","techdb");
        if ($this->connect){
            echo "Your db is ready";
        }else{
            echo "Your db is not ready";
        }
    }
}
$obj = new register();
?>
