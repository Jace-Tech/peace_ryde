<?php 

class UserLogin {
    private $connection;

    function __construct($connection) 
    {
        $this->connection = $connection;
    }

    public function generatePassword($length = 8)
    {
        $prefix = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $password = "";

        for($i = 0; $i < $length; $i++) {
            $password .= $prefix[rand(0, (strlen($prefix) - 1))];
        }

        return $password;
    }

    public function register(array $user) 
    {
        extract($user);

        $query = "INSERT INTO `user_login`(`user_id`, `email`, `password`) 
            VALUES (:userId, :email, :password)";
        $result = $this->connection->prepare($query);
        $result->execute([
            'userId' => $user_id,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_BCRYPT)
        ]);

        return $result;
    }

    public function login ($email, $password) 
    {
        $query_user = "SELECT * FROM `user_login` WHERE `email` = ?";
        $result_user = $this->connection->prepare($query_user);
        $result_user->execute([$email]);

        if(!$result_user->rowCount()){
            return false;
            exit();
        } 
        
        $user = $result_user->fetch();
        if(password_verify($password, $user['password'])) {
            return $user;
            exit();
        }

        return false;
    }

}