<?php

    $data = json_decode(file_get_contents('php://input'),true); 
    $category=$data['category'];
    $writer = $data['writer'];
    $pw=$data['password'];
    $title=$data['title'];
    $contents=$data['contents'];
    $date=$data['date'];
    include('dbcon.php');

    if( ($_SERVER['REQUEST_METHOD'] == 'POST'))
    {
        if(!isset($errMSG))
        {
            try{
                $stmt = $con->prepare('INSERT INTO board(category, writer, pw, title, contents, date,views) VALUES(:category, :writer, :pw, :title, :contents, :date , 0)');
                $stmt -> bindParam(':category',$category);
                $stmt -> bindParam(':writer',$writer);
                $stmt -> bindParam(':pw',$pw);
                $stmt -> bindParam(':title',$title);
                $stmt -> bindParam(':contents',$contents);
                $stmt -> bindParam(':date',$date);
                

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