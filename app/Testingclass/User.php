<?php


namespace App\Testingclass;


class User
{
    //properties
    private $id;
    private $username;
    private $password;
    private $firstname;
    private $lastname;

    //methods

    /**
     * User constructor.
     * @param $id
     * @param $username
     * @param $password
     * @param $firstname
     * @param $lastname
     */
    public function __construct($id, $username, $password, $firstname, $lastname)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }


    public function getFullName(){
        return $this->getFirstname().' '.$this->getLastname();
    }
}
