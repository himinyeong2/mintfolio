<?php

    $data = json_decode(file_get_contents('php://input'),true); 
    $dno = $data['dno'];
    $category=$data['category'];
    $title=$data['title'];
    $contents=$data['contents'];
    $date=$data['date'];
    include('dbcon.php');
    if( ($_SERVER['REQUEST_METHOD'] == 'POST'))
    {
        if(!isset($errMSG))
        {
            try{
                $stmt = $con->prepare('UPDATE board SET category=:category, title=:title, contents=:contents, date=:date WHERE dno=:dno');
                $stmt -> bindParam(':category',$category);
                $stmt -> bindParam(':title',$title);
                $stmt -> bindParam(':contents',$contents);
                $stmt -> bindParam(':date',$date);
                $stmt -> bindParam(':dno',$dno);

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