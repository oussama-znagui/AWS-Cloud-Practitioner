<?php

class User
{
    private $id_user;
    private $name;


    public function __construct($idU, $name)
    {
        $this->id_user = $idU;
        $this->name = $name;
    }

    public function __get($prop)
    {
        return $this->$prop;
    }

    public function __set($prop, $value)
    {
        $this->$prop = $value;
    }

    public function chekUser()
    {
        $sql = db::connexion()->prepare("SELECT * from users where username = :name");
        $sql->bindParam(":name", $this->name);
        $sql->execute();
        if ($sql->rowCount() > 0) {

            return false;
        } else {

            return true;
        }
    }
    public function addNewUser()
    {
        $sql = db::connexion()->prepare("INSERT INTO users VALUES(:id,:name)");
        $sql->bindParam(":id", $this->id_user);
        $sql->bindParam(":name", $this->name);
        $sql->execute();
    }

    public function selectUser()
    {
        $sql = db::connexion()->prepare("SELECT * from users where username = :name");
        $sql->bindParam(":name", $this->name);
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);

        $idU = $result[0]['id_user'];


        $name = $this->name;
        $user = new User($idU, $name);
        return $user;
    }
}

$user = new User(NULL, "oussama");
// $user->chekUser();
// $user->addNewUser();
// print_r($user->selectUser());
