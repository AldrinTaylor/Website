<?php
    // Get Input Data
    if(isset($_GET['submit'])){
        $input_data['name'] = htmlentities($_GET['name']);
        $input_data['email'] = htmlentities($_GET['email']);
        $input_data['message'] = htmlentities($_GET['message']);
        
        // Filter and Sanitize Email
        $input_data['email'] = filter_var($input_data['email'], FILTER_SANITIZE_EMAIL);

        // Test Input and Validate Email
        if(!$input_data['name'] || !$input_data['message']){
            $empty_error_msg = 'Please fill all input boxes.';
        } else if(filter_var($input_data['email'],FILTER_VALIDATE_EMAIL) === false) {
            $email_error_msg = 'Please use a valid email.';
        } else {

            // Set Email Data
            $email_data = [
                'receiver' => 'aldrintaylormail@gmail.com',
                'subject' => 'Website Contact Message',
                'body' => "{$input_data['message']}"
            ];
            $email_data['headers'] = 'MIME-Version: 1.0'.'\r\n';
            $email_data['headers'] .='Content-Type: text/html;charset=UTF-8'.'\r\n';
            $email_data['headers'] .='From: '.$input_data['name'].' <'.$input_data['email'].'>'.'\r\n';
        }

        // Send and Test Email
        if(mail($email_data['receiver'], $email_data['subject'], $email_data['body'], $email_data['headers'])){
            $email_sent_msg = 'Email successfully sent.';
        } else {
            $email_not_sent_msg = 'Email sending failure.';
        }
    }
?>