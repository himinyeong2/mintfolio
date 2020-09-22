<?php

function getBoard($dno){
    include('dao/dbcon.php');

    $result;
        if($dno==null){
            // 모든 게시판을 출력
            $select_stmt = $con->prepare("SELECT * FROM Board");
            $select_stmt->execute();
            $result = $select_stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        else{
            // 클릭한 글번호의 게시판을 출력
            $select_stmt = $con->prepare("SELECT * FROM Board WHERE dno=:dno");
            $select_stmt->bindParam(':dno',$dno);
            $select_stmt->execute();
            $result = $select_stmt->fetchAll(PDO::FETCH_ASSOC);
    
            // 조회수 ++1
            $update_stmt = $con->prepare("UPDATE board SET views=(SELECT views FROM board WHERE dno=:dno)+1 WHERE dno=:dno");
            $update_stmt->bindParam(':dno',$dno);
            $update_stmt->execute();
        }
    
    
    return $result;
}
?>