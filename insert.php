<?php

    $data = json_decode(file_get_contents('php://input'),true); 
    // print_r($d_data);
    $id = $data['id'];
    $content=$data['content'];
    $action=$data['action'];

    include('dbcon.php');
    if( ($_SERVER['REQUEST_METHOD'] == 'POST'))
    {
        if(!isset($errMSG))
        {
            try{
                if ($action=="INSERT"){
                    $stmt = $con->prepare('INSERT INTO diary VALUES(:id,:content)');
                    $stmt->bindParam(':id', $id);
                    $stmt->bindParam(':content', $content);
                }else if($action=="EDIT"){
                    $stmt = $con->prepare('UPDATE diary SET content= :content WHERE id=:id');
                    $stmt->bindParam(':id', $id);
                    $stmt->bindParam(':content', $content);
                }else if($action=="DELETE"){
                    $stmt = $con->prepare('DELETE FROM diary WHERE id=:id');
                    $stmt->bindParam(':id', $id);
                }
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