<?php

    
    include('dbcon.php');
    $dno = $_GET['dno'];
    if( ($_SERVER['REQUEST_METHOD'] == 'GET'))
    {
        if(!isset($errMSG))
        {
            try{
                $stmt = $con->prepare('DELETE FROM board WHERE dno=:dno');
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