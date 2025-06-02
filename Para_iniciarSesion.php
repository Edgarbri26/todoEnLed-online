
<?php
include("src/php/db.php");
session_start();

if(isset($_POST["button"])){
 $user_name = $_POST["username"];
 $password = $_POST["password"];
    $sql = "SELECT * FROM users where user_name= '$user_name'" ;
      $result = $conn->query($sql);
      if($result == 1){
 while($row = $result->fetch_assoc())  {
    if($row["user_name"]==$user_name){
        $_SESSION['rol']= $row['id_rol'];
        header("location:index.php");
    }
 }
}
}

?>