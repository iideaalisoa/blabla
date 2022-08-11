<?php
class operations {
    public $conn = null;

    function __construct() {
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "reclam";

        $this->conn = mysqli_connect($host,$user,$password,$database);
    }

    public function setUser($email,$mdp){
        $query = "insert into auth(email,mdp) values('$email','$mdp')";
        $result = mysqli_query($this->conn,$query);

        if ($result != null) {
            return 1;
        }else{
            die('error' .mysqli_error($this->conn));
            return 0;
        }
    }
}
?>