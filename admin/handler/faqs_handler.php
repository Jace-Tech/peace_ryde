<?php

require_once("../../models/FAQs.php");
require_once("../../functions/index.php");
require_once("../../db/config.php");

$faqs = new FAQs($connect);

if(isset($_POST['add'])) {
    $question = filter_field($_POST['question']);
    $answer = filter_field($_POST['answer']);
    $tags = filter_field($_POST['tags']);

    $result = $faqs->add_question($question, $answer, $tags);

    if($result) {
        $alert = [
            'alert_message' => "FAQ added",
            'alert_type' => 'success'
        ];

        session_start();
        $_SESSION['alert'] = json_encode($alert);

        header('location: ../faqs.php');
    }

    else{
        $alert = [
            'alert_message' => "Something went wrong, please try again",
            'alert_type' => 'error'
        ];

        session_start();
        $_SESSION['alert'] = json_encode($alert);

        header('location: ../faqs.php');
    }
}