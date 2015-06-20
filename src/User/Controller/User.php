<?php

namespace User\Controller;

class UserController
{
    private $db;

    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function setDb(PDO $db)
    {
        $this->db = $db;
        return $this;
    }
    public function newAction(User $user)
    {
        $request = $this->db->prepare('INSERT INTO user SET email = :email, password = :password, name = :name, surname = :surname, phone = :phone');

        $request->bindValue(':email', $user->email());
        $request->bindValue(':password', $user->password());
        $request->bindValue(':name', $user->name());
        $request->bindValue(':surname', $user->surname());
        $request->bindValue(':phone', $user->phone());

        $request->execute();

        return array(
            'template' => "index"
        );
    }
}