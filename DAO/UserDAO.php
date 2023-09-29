<?php

include_once 'DTO/UserDTO.php';

class UserDAO
{
    private $pdo;

    // Construct
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Find user by ID
    public function findById($id) {
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        $data =  $stmt->fetch(PDO::FETCH_ASSOC);

        return new UserDTO(
            $data['id'],
            $data['email'],
            $data['pseudo'],
            $data['avatar'],
            $data['date_of_birth'],
            $data['password']
        );
    }


    // Return all users
    public function findAll() {
        $sql = "SELECT * FROM users";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $users = [];

        foreach ($data as $userData) {
            $user = new UserDTO(
                $userData['id'],
                $userData['email'],
                $userData['pseudo'],
                $userData['avatar'],
                $userData['date_of_birth'],
                $userData['password']
            );
            $users[] = $user;
        }

        return $users;
    }



    // Create a new user
    public function createUser(UserDTO $user) {
        $sql = "INSERT INTO users (email, pseudo, avatar, date_of_birth, password) VALUES (:email, :pseudo, :avatar, :date_of_birth, :password)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'email' => $user->getEmail(),
            'pseudo' => $user->getPseudo(),
            'avatar' => $user->getAvatar(),
            'date_of_birth' => $user->getDateOfBirth(),
            'password' => $user->getPassword(),
        ]);

        $userId = $this->pdo->lastInsertId();
        return $this->findById($userId);
    }

}
