<?php
//require_once 'admin.php';
class adminDao{
    private $pdo;
    public function __construct(){
        include '../db/conexion.php';
        $this->pdo=$pdo;
    }
    public function login($admin){
        $query = "SELECT * FROM tbl_admin WHERE email=? AND passwd=?";
        $sentencia=$this->pdo->prepare($query);
        $email=$admin->getEmail();
        $psswd=$admin->getPasswd();
        $sentencia->bindParam(1,$email);
        $sentencia->bindParam(2,$psswd);
        $sentencia->execute();
        $result=$sentencia->fetch(PDO::FETCH_ASSOC);
        $numRow=$sentencia->rowCount();
        if(!empty($numRow) && $numRow==1){
            $admin->setId_admin($result['Id']);
            session_start();
            $_SESSION['admin']=$admin;
            return true;
        }else {
            return false;
        }
    }
}
?>