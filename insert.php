<?php

    $data = json_decode(file_get_contents('php://input'),true); 
    // print_r($d_data);
    $id = $data['id'];
    $title=$data['title'];
    $content=$data['content'];

    include('dbcon.php');
    if( ($_SERVER['REQUEST_METHOD'] == 'POST'))
    {
        if(!isset($errMSG))
        {
            try{
                $stmt = $con->prepare('INSERT INTO diary VALUES(:id, :title, :content)');
                $stmt->bindParam(':id', $id);
                $stmt->bindParam(':title', $title);
                $stmt->bindParam(':content', $content);

                if($stmt->execute())
                {
                    echo "SUCCESS";
                }
                else
                {
                    $errMSG = "사용자 추가 에러";
                }

            } catch(PDOException $e) {
                die("Database error: " . $e->getMessage()); 
            }
        }
    }
?>