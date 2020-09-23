<?php 
function paging($mode){
    include 'dbcon.php';

    $page = $_GET['page'];    
    if($page==null){//default
        $select_stmt = $con->prepare("SELECT * FROM Board");
        $select_stmt->execute();
        $result = $select_stmt->fetchAll(PDO::FETCH_ASSOC);
    }else{//클릭한 페이지가 있음..
        // $page = $_GET['page'];
        if( ($_SERVER['REQUEST_METHOD'] == 'GET'))
        {
            $clickedPage=0;
            $size=3;

            $stmt = $con->prepare("SELECT * FROM board ");
            // $stmt -> bindParam(':start', $clickedPage);
            // $stmt->bindParam(':size', $size);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        }
    }
    return $result;
}
    
?>