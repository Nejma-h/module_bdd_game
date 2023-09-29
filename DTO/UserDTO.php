<?php


class UserDTO
{
    private $id;
    private $email;
    private $pseudo;

    public function __construct($id, $email, $pseudo, $avatar, $date_of_birth, $password) {
        $this->id = $id;
        $this->email = $email;
        $this->pseudo = $pseudo;
        $this->avatar = $avatar;
        $this->date_of_birth = $date_of_birth;
        $this->password = $password;
    }

    public function getId() {
        return $this->id;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPseudo() {
        return $this->pseudo;
    }

    public function getAvatar() {
        return $this->avatar;
    }

    public function getDateOfBirth() {
        return $this->date_of_birth;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPseudo($pseudo) {
        $this->pseudo = $pseudo;
    }

    public function setAvatar($avatar) {
        $this->avatar = $avatar;
    }

    public function setDateOfBirth($date_of_birth) {
        $this->date_of_birth = $date_of_birth;
    }

    public  function setPassword($password) {
        $this->password = $password;
    }



}