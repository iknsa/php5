<?php

namespace User\Controller;

class UserController
{
    public function indexAction()
    {
        return array(
            'template' => 'index'
        );
    }

    public function newAction()
    {
        return array(
            'template' => "new"
        );
    }

    public function createUserAction($user, $parameters, $db)
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $request = $db->prepare('INSERT INTO user SET email = :email, password = :password, name = :name, surname = :surname, phone = :phone');

            $request->bindValue(':email', $user->getEmail());
            $request->bindValue(':password', $user->getPassword());
            $request->bindValue(':name', $user->getName());
            $request->bindValue(':surname', $user->getSurname());
            $request->bindValue(':phone', $user->getPhone());

            $request->execute();

            return array (
                'email' => '$email',
                'template' => 'show'
            );
        }
    }
}