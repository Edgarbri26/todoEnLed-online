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
         $a;
         $b;

        $stmt = $this->conn->prepare("SELECT * FROM users WHERE user_name = ?");
        $stmt->bind_param("s", $a);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){

            
                if($row["user_name"]==$a && $row["pass"]==$b) {
                   $_SESSION['rol'] = $row['id_rol'];
                   $_SESSION['username'] = $row['user_name'];
                   return true;
               }                
            }  
        }
        return false;
    }
}


}

?>