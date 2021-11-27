<?php
    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile_number'];
        $usermessage = $_POST['message'];

        $message = "Name: ".$name. "\r\n Eamil :" .$email. "\r\n  Message : " .$usermessage. "\r\n  Mobile Number : " .$mobile;
        $subject = "Contact Form";
        $fromname = $name;
        $fromemails = $email;
        $mailto = "singhchanchal5778@gmail.com";

        //A random hash wil be neccessary to send mixed content
        $eol = "\r\n";
        $headers = 'From:' .$fromname. '<'.$fromemails.'>';
        //message
        $body = $message . $eol;

        if (mail($mailto, $subject, $body, $headers)) {
            echo "messgae sent Successfully";
        }
        else {
            echo "Message Sent Failed";
            print_r( error_get_last() );
        }

    }
?>
