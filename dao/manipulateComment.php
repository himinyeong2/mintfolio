<?php 

$data = json_decode(file_get_contents('php://input'),true); 
$mode = $data['mode'];

function insertComment($data){
    include('dbcon.php');
    if( ($_SERVER['REQUEST_METHOD'] == 'POST'))
    {
        if(!isset($errMSG))
        {
            try{

                $stmt = $con->prepare('INSERT INTO comment(boardId, commentId, name, pw, comment) VALUES(:boardId, :commentId ,:name, :pw, :comment)');
                $stmt -> bindParam(':boardId',$data['boardId']);
                $stmt -> bindParam(':commentId',$data['commentId']);
                $stmt -> bindParam(':name',$data['name']);
                $stmt -> bindParam(':pw',$data['pw']);
                $stmt -> bindParam(':comment',$data['comment']);
             
                if($stmt->execute()){
                    echo "SUCCESS";
                }
                else{
                    $errMSG = "사용자 추가 에러";
                }

            } catch(PDOException $e) {
                die("Database error: " . $e->getMessage()); 
            }
        }
    }
}
function editComment($data){
    include('dbcon.php');
    if( ($_SERVER['REQUEST_METHOD'] == 'POST'))
    {
        if(!isset($errMSG))
        {
            try{

                $stmt = $con->prepare('UPDATE Comment set comment=:comment WHERE dno=:dno');
                $stmt -> bindParam(':comment',$data['comment']);
                $stmt -> bindParam(':dno',$data['dno']);
             
                if($stmt->execute()){
                    echo "SUCCESS";
                }
                else{
                    $errMSG = "사용자 추가 에러";
                }

            } catch(PDOException $e) {
                die("Database error: " . $e->getMessage()); 
            }
        }
    }
}
function deleteComment($dno){
    include('dbcon.php');
    if( ($_SERVER['REQUEST_METHOD'] == 'POST'))
    {
        if(!isset($errMSG))
        {
            try{

                $stmt = $con->prepare('DELETE FROM Comment WHERE dno=:dno');
                $stmt -> bindParam(':dno',$data['dno']);

                if($stmt->execute()){
                    echo "SUCCESS";
                }
                else{
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
    insertComment($data);
}else if($mode=="EDIT"){
    editComment($data);
}else if($mode=="DELETE"){
    deleteComment($data['dno']);
}

?>
