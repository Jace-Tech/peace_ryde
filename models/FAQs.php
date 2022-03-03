<?php  

class FAQs {
    var $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function add_question($question, $answer) 
    {
        $query = "INSERT INTO `faq` (`question`, `answer`) VALUES (:question, :answer)";
        $result = $this->connection->prepare($query);
        $result->execute([
            'question' => $question,
            'answer' => $answer
        ]);

        return $result;
    }

    public function get_all_questions()
    {
        $query = "SELECT * FROM `questions`";
        $result = $this->connection->prepare($query);
        $result->execute();

        return $result->fetchAll();
    }

    public function get_one_question($question_id)
    {
        $query = "SELECT * FROM `questions` WHERE `question_id` = ?";
        $result = $this->connection->prepare($query);
        $result->execute([$question_id]);

        return $result->fetch();
    }

    public function delete_question($question_id) 
    {
        $query = "DELETE FROM `faq` WHERE `id` = ?";
        $result = $this->connection->prepare($query);
        $result->execute([$question_id]);

        return $result;
    }

    public function update_question($question, $answer, $id) 
    {
        $query = "UPDATE `faq` SET `question` = :question, `answer` = :answer WHERE `id` = :id";
        $result = $this->connection->prepare($query);
        $result->execute([
            'question' => $question,
            'answer' => $answer,
            'id' => $id
        ]);

        return $result;
    }



}