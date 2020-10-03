<?php



 $data = json_decode(file_get_contents('php://input'),true); 
 $dno = $data['dno'];
 $commentId = $data['commentId'];
 $name= $data['name'];
 $pw = $data['pw'];
 $comment = $data['comment'];

 function insertComment($dno, $name, $pw, $comment){
    include('dbcon.php');
    if( ($_SERVER['REQUEST_METHOD'] == 'POST'))
    {
        if(!isset($errMSG))
        {
            try{

                $stmt = $con->prepare('INSERT INTO comment(boardId, name, pw, comment) VALUES(:dno, :name, :pw, :comment)');
                $stmt -> bindParam(':dno',$dno);
                $stmt -> bindParam(':name',$name);
                $stmt -> bindParam(':pw',$pw);
                $stmt -> bindParam(':comment',$comment);
             
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
function insertCommentComment($dno, $commentId, $name, $pw, $comment){
    include('dbcon.php');
    if( ($_SERVER['REQUEST_METHOD'] == 'POST'))
    {
        if(!isset($errMSG))
        {
            try{

                $stmt = $con->prepare('INSERT INTO comment(boardId,commentId, name, pw, comment) VALUES(:dno,:commentId ,:name, :pw, :comment)');
                $stmt -> bindParam(':dno',$dno);
                $stmt -> bindParam(':commentId',$commentId);
                $stmt -> bindParam(':name',$name);
                $stmt -> bindParam(':pw',$pw);
                $stmt -> bindParam(':comment',$comment);
             
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
if($commentId == null){
    insertComment($dno, $name, $pw, $comment);
}else{
    insertCommentComment($dno, $commentId, $name, $pw, $comment);
}
?>