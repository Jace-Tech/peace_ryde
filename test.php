<?php

// $to = 'jacealex151@gmail.com';
// $subject = 'Marriage Proposal';
// $from = 'jacealex@gmail.com';
 
// // To send HTML mail, the Content-type header must be set
// $headers  = 'MIME-Version: 1.0' . "\r\n";
// $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// // Create email headers
// $headers .= 'From: '.$from."\r\n".
//     'Reply-To: '.$from."\r\n" .
//     'X-Mailer: PHP/' . phpversion();
 
// // Compose a simple HTML email message
// $message = '<html><body>';
// $message .= '<h1 style="color:#f40;">Hi Jane!</h1>';
// $message .= '<p style="color:#080;font-size:18px;">Will you marry me?</p>';
// $message .= '</body></html>';
 
// // Sending email
// if(mail($to, $subject, $message, $headers)){
//     echo 'Your mail has been sent successfully.';
// } else{
//     echo 'Unable to send email. Please try again.';
// }

    if(isset($_POST['hash'])) {
        $password = md5($_POST['password']);
        $password2 = md5($_POST['password2']);

        echo "<h1>$password</h1>";
        echo "<h1>$password2</h1>";
        
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Test</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="password">
            <input type="text" name="password2">
            <button name="hash">Hash</button>
        </form>
    </body>
</html>

<?php foreach ($conversation as $message): extract($message); ?>
                                    <?php $messages->mark_read($message_id); ?>
                                    <div class="flex items-start mb-4 last:mb-0" style="flex-direction: <?= $style = $sender_id === $LOGGED_USER['admin_id'] ? "row-reverse" : "row"; ?>">
                                        <div class="flex shadow-sm ml-2 items-center justify-center bg-gray-200 rounded-full w-10 h-10 text-sm font-semibold uppercase text-gray-500">
                                            <?= $name = $sender_id === $LOGGED_USER['admin_id'] ? getSubName($LOGGED_USER['name']) : getSubName($user->get_user($_GET['msg'])['firstname'] . " " . $user->get_user($_GET['msg'])['lastname']); ?>
                                        </div>
                                        <div>
                                            <div class="text-sm <?= $theme =  $sender_id === $LOGGED_USER['admin_id'] ? "bg-indigo-500 text-white" : "bg-white text-gray-800" ?> p-3 rounded-lg border border-transparent shadow-md mb-1" style="border-top-right-radius: 0;">
                                                <?= $message ?>
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <div class="text-xs text-gray-500 font-medium" title="<?= date("l j, M Y H:i A", strtotime($date)) ?>">
                                                    <?= date("D, H:i A", strtotime($date)); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>