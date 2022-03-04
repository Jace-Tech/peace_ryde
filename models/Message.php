<?php  

class Message {
    var $connection; 

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function generate_message_id(int $length = 9)
    {
        $message_id = "msg_";

        for($i = 1; $i <= $length; $i++) {
            $message_id .= rand(0, 9);
        }

        return $message_id;
    }

    public function message_user($reciever, $from, $message)
    {
        $query = "INSERT INTO `messages` (`message_id`, `user_id`, `sender_id`, `message`, `is_read`) VALUES (:message_id, :user, :sender, :message, :is_read)";
        $result = $this->connection->prepare($query);
        $result->execute([
            'message_id' => $this->generate_message_id(),
            'user' => $reciever,
            'sender' => $from,
            'message' => $message,
            'is_read' => false
        ]);
        
        return $result;
    }

    public function mark_read($message_id)
    {
        $query = "UPDATE `messages` SET `is_read` = :is_read WHERE `message_id` = :message_id";
        $result = $this->connection->prepare($query);
        $result->execute([
            'is_read' => true,
            'message_id' => $message_id
        ]);

        return $result;
    }

    public function get_user_messages($user_id)
    {
        $query = "SELECT * FROM `messages` WHERE `user_id` = ?";
        $result = $this->connection->prepare($query);
        $result->execute([$user_id]);

        return $result->fetchAll();
    }

    public function get_message($message_id)
    {
        $query = "SELECT * FROM `messages` WHERE `message_id` = ?";
        $result = $this->connection->prepare($query);
        $result->execute([$message_id]);

        return $result->fetch();
    }

    public function delete_message($message_id)
    {
        $query = "DELETE FROM `messages` WHERE `message_id` = ?";
        $result = $this->connection->prepare($query);
        $result->execute([$message_id]);
        
        return $result;
    }


}