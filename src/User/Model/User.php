<?php

namespace User\Model;

class User
{
    protected $email;
    protected $password;
    protected $name;
    protected $surname;
    protected $phone;

    public function populate(array $data)
    {
        foreach ($data as $key => $value) {
            $setter = 'set'.ucfirst($key);
                
            if (method_exists($this, $setter)) {
                $this->$setter($value);
            }
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
        return $this;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }
}