<?php

include_once 'DAO/UserDAO.php';

$pdo = require 'Database.php';
$userDao = new UserDAO($pdo);

// Create a new user
$newUser = new UserDTO(null, 'newuser2@test.com', 'newuser2', 'fake/avatar', '2000-01-01', 'password');
$createdUser = $userDao->createUser($newUser);

// Find user by ID
$user = $userDao->findById(1);

// Get all users
$allUser = $userDao->findAll();

print_r($createdUser);
print_r($user);
print_r($allUser);

?>


