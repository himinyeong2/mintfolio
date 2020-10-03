<?php

function getComment($dno){

    include('dao/dbcon.php');
    $result;

    
    // 클릭한 글번호의 댓글을 출력     

    $select_stmt = $con->prepare("SELECT * FROM Comment WHERE boardId=:dno AND CommentID is NULL");
    $select_stmt->bindParam(':dno',$dno);
    $select_stmt->execute();
    $result = $select_stmt->fetchAll(PDO::FETCH_ASSOC);

    return $result;

}

function getCComment($commentId){
//대댓글 출력

    $result;

    include('dao/dbcon.php');
    $stmt = $con->prepare("SELECT * FROM Comment WHERE commentId=:commentId");
    $stmt->bindParam(':commentId',$commentId);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}
?>