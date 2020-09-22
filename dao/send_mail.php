<?php
$data = json_decode(file_get_contents('php://input'),true); 
$to = "pre106879@gmail.com";
$subject = "메일이 도착했씁니다.";
$message = $data['contents']."\n"."tel:".$data['phone']."\n"."name:".$data['name'];
$from = $data['email'];
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "SUCCESS"
?>
