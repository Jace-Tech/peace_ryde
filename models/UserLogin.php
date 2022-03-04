<?php 

class UserLogin {
    private $connection;

    function __construct($connection) 
    {
        $this->connection = $connection;
    }

    public function register(array $user) 
    {
        extract($user);

        $query = "INSERT INTO `user_login`(`user_id`, `email`, `password`) VALUES (:userId, :email, :password)";
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

        if(!$result_user->rowCount()) return false;
        if(password_verify($password, $result_user['password'])) return true;

        return false;
    }

}