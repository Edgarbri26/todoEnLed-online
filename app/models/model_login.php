<?php


class Login{

private $conn;


    public function __construct() {
        $this->conn = Conectar::Conexion();
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
    }


    public function authenticate($a, $b) {

      if(isset($_POST["button"])){
         $user_name = $_POST["username"];
         $password = $_POST["password"];

        $stmt = $this->conn->prepare("SELECT * FROM users WHERE user_name = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        //if($result->num_rows > 0){
            //while($row = $result->fetch_assoc()){

            
               /* if($row["user_name"]==$user_name && $row["password"]==$password) {
                   $_SESSION['rol'] = $row['id_rol'];
                   $_SESSION['username'] = $row['user_name'];
                   return true;
               } */

               if($a == "admin" && $b == "12345") {
                   $_SESSION['rol'] = 1;
                   $_SESSION['username'] = "admin";
                   return true;
               }
            }

            
            return false;
            
        }

    }

//}

//}

?>