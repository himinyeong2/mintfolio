<?php 
function getTotalSize($category){
    include 'dbcon.php';
    if(isset($_GET['category'])){
        $category = $_GET['category']; 
    }else{
        $category = null;
    }
  
    if($category==null){
        $stmt = $con->prepare("SELECT * FROM board"); // 전체 크기 구하기
    }else{
        $stmt = $con->prepare("SELECT * FROM board WHERE category=:category");
        $stmt -> bindParam(':category',$category);
    }
    $stmt -> execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return sizeof($result);

}
function paging($mode){
    include 'dbcon.php';

    if(isset($_GET['category'])){
        $category = $_GET['category']; 
    }else{
        $category = null;
    }
    if(isset($_GET['page'])){
        $page = $_GET['page'];   
    }else{
        $page=null;
    }
    //클릭한 페이지가 있음..
    $size=5;
    if($category!=null){ // 카테고리가 선택이 되었나용?
        if($page==null){//default page일떄!! 즉 첫번쨰 페이지!!!
            $start=1*$size-$size;
        }else{
            $start = ((int)$_GET['page'])*$size-$size;
        }
        $stmt = $con->prepare("SELECT * FROM board WHERE category=:category LIMIT ".$start.",".$size);
        $stmt -> bindParam(':category',$category);
        $stmt -> execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $array[0]=$size;
        $array[1]=$result;
        return $array;

    }else{ //카테고리가 선택이 안되었을 경우
        if($page==null){//default page일떄!! 즉 첫번쨰 페이지!!!
            $start=1*$size-$size;
        }else{
            $start = ((int)$_GET['page'])*$size-$size;
        }
        $stmt = $con->prepare("SELECT * FROM board LIMIT ".$start.",".$size);
        $stmt -> bindParam(':category',$category);
        $stmt -> execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $array[0]=$size;
        $array[1]=$result;
        return $array;
    }
}

?>