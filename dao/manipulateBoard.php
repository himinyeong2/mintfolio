<?php


function insertBoard($data){
    include('dbcon.php');

    if( ($_SERVER['REQUEST_METHOD'] == 'POST'))
    {
        if(!isset($errMSG))
        {
            try{
                $stmt = $con->prepare('INSERT INTO board(category, writer, pw, title, contents, date,views) VALUES(:category, :writer, :pw, :title, :contents, :date , 0)');
                $stmt -> bindParam(':category',$data['category']);
                $stmt -> bindParam(':writer',$data['writer']);
                $stmt -> bindParam(':pw',$data['password']);
                $stmt -> bindParam(':title',$data['title']);
                $stmt -> bindParam(':contents',$data['contents']);
                $stmt -> bindParam(':date',$data['date']);
                

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
}
function editBoard($data){
    include('dbcon.php');
    if( ($_SERVER['REQUEST_METHOD'] == 'POST'))
    {
        if(!isset($errMSG))
        {
            try{
                $stmt = $con->prepare('UPDATE board SET category=:category, title=:title, contents=:contents, date=:date WHERE dno=:dno');
                $stmt -> bindParam(':category',$data['category']);
                $stmt -> bindParam(':title',$data['title']);
                $stmt -> bindParam(':contents',$data['contents']);
                $stmt -> bindParam(':date',$data['date']);
                $stmt -> bindParam(':dno',$data['dno']);

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
}
function deleteBoard($dno){
    include('dbcon.php');

    if( ($_SERVER['REQUEST_METHOD'] == 'POST'))
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
}


$data = json_decode(file_get_contents('php://input'),true); 
$mode = $data['mode'];

if($mode=="INSERT"){
    insertBoard($data);
}else if($mode=="EDIT"){
    editBoard($data);
}else if($mode=="DELETE"){
    deleteBoard($data['dno']);
}

?>