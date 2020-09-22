<?php

function getDiary($dno){
    include('dao/dbcon.php');

    if($dno==null){
        $select_stmt = $con->prepare("SELECT * FROM Board ");
        $select_stmt->execute();
        $result = $select_stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    else{
        $select_stmt = $con->prepare("SELECT * FROM Board WHERE dno=:dno");
        $select_stmt->bindParam(':dno',$dno);
        $select_stmt->execute();
        $result = $select_stmt->fetchAll(PDO::FETCH_ASSOC);
        $update_stmt = $con->prepare("UPDATE board SET views=(SELECT views FROM board WHERE dno=:dno)+1");
        $update_stmt->bindParam(':dno',$dno);
        $update_stmt->execute();
    }
}
?>