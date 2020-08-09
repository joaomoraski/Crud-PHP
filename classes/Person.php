<?php


class Person
{
    public static function addPerson($firstname, $lastname,$email,$telephone){
        $sql = Mysql::dbconnect()->prepare("INSERT INTO `people` VALUES(?,?,?,?,?)");
        $sql->execute(array(null, $firstname, $lastname,$email,$telephone));
        header("Location: ../index.php");
    }

    public static function UpdatePerson($id, $firstname, $lastname, $email, $telephone){
        $sql = Mysql::dbconnect()->prepare("UPDATE `people` set firstname = ?, lastname = ?, email = ?, telephone = ? WHERE id = $id");
        $sql->execute(array($firstname,$lastname,$email,$telephone));
        header("Location: ../index.php");

    }

    public static function deletePerson($id){
        $sql = Mysql::dbconnect()->prepare("DELETE FROM `people` WHERE id = ".$id);
        $sql->execute();
        header("Location: ../index.php");
    }

}

?>