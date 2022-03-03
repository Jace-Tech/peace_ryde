<?php    

class User {
    var $connection;

    function __construct($connection){
        $this->connection = $connection;
    }

    public function generate_user_id(int $length = 10)
    {
        $user_id = "usr_";

        for ($i = 0; $i < $length; $i++) { 
            $user_id .= rand(0, 9);
        }

        return $user_id;
    }

    public function add_new_user(array $user)
    {
        extract($user);

        $query = "INSERT INTO `users`(`user_id`, `title`, `firstname`, `middle_name`, `lastname`, `date_of_birth`, `gender`, `email`, `passport`, `phone`) VALUES (:userId, :title, :firstname, :middle_name, :lastname, :date_of_birth, :gender, :email, :passport, :phone)";
        $result = $this->connection->prepare($query);
        $result->execute([
            'userId' => $this->generate_user_id(),
            'title' => $title,
            'firstname' => $firstname,
            'middle_name' => $middle_name,
            'lastname' => $lastname,
            'date_of_birth' => $dob,
            'gender' => $gender,
            'email' => $email,
            'passport' => $passport,
            'phone' => $phone,
        ]);

        return $result;
    }

    public function get_user($user_id)
    {
        $query = "SELECT * FROM `users` WHERE `user_id` = ?";
        $result = $this->connection->prepare($query);
        $result->execute([$user_id]);

        return $result->fetch();
    }

    public function get_all_users()
    {
        $query = "SELECT * FROM `users`";
        $result = $this->connection->prepare($query);
        $result->execute();

        return $result->fetchAll();
    }

    public function delete_user($user_id)
    {
        $query = "DELETE FROM `users` WHERE `user_id` = ?";
        $result = $this->connection->prepare($query);
        $result->execute([$user_id]);

        return $result;
    }

    public function update_user($user_id, array $user) 
    {
        extract($user);

        $query = "UPDATE `users` SET `title` = :title, `firstname` = :firstname, `middle_name` = :middle_name, `lastname` = :lastname, `date_of_birth` = :date_of_birth, `gender` = :gender, `email` = :email, `passport` = :passport, `phone` = :phone WHERE `user_id` = :userId";
        $result = $this->connection->prepare($query);
        $result->execute([
            'title' => $title,
            'firstname' => $firstname,
            'middle_name' => $middle_name,
            'lastname' => $lastname,
            'date_of_birth' => $dob,
            'gender' => $gender,
            'email' => $email,
            'passport' => $passport,
            'phone' => $phone,
            'userId' => $user_id
        ]);

        return $result;
    }

    
}