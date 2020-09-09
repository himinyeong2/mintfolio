<?php

    $data = json_decode(file_get_contents('php://input'),true); 
    // print_r($d_data);
    $id = $data['id'];
    include('dbcon.php');
    if( ($_SERVER['REQUEST_METHOD'] == 'POST'))
    {
        if(!isset($errMSG))
        {
            try{
                $stmt = $con->prepare('SELECT * FROM diary WHERE ID = :id');
                $stmt->bindParam(':id', $id);

                if($stmt->execute())
                {
                    $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    $data = $stmt->fetchAll();
                    echo $data[0];
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