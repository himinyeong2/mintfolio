<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $subject = "$name 님으로 부터 메일이 도착하였습니다 - mintfolio";
    $to = "pre106879@naver.com";
    $headers = "FROM : $email";

    if(mail($to, $subject, $message,  $headers)){
        echo "SUCCESS";
    }else{
        echo "FAILED";
    }
    
    
?>