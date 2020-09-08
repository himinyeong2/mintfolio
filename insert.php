<?php
    // error_reporting(E_ALL); 
    // ini_set('display_errors',1); 

    // include('dbcon.php');

    // if( ($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['submit']))
    // {

    //     $id=$_POST['id'];
    //     $title=$_POST['title'];
    //     $content=$_POST['content'];
    //     $date=$_POST['date'];
    //     if(!isset($errMSG))
    //     {
    //         try{
    //             $stmt = $con->prepare('INSERT INTO diary VALUES(:id, :title, :content, :date)');
    //             $stmt->bindParam(':id', $id);
    //             $stmt->bindParam(':title', $title);
    //             $stmt->bindParam(':content', $content);
    //             $stmt->bindParam(':date', $date);

    //             if($stmt->execute())
    //             {
    //                 echo '<script>alert("입력완료");</script>';
                    
    //             }
    //             else
    //             {
    //                 $errMSG = "사용자 추가 에러";
    //             }

    //         } catch(PDOException $e) {
    //             die("Database error: " . $e->getMessage()); 
    //         }
    //     }

    // }
    if( ($_SERVER['REQUEST_METHOD'] == 'GET')){
        echo "POST 됐어!";
        echo $_GET[0];
    }else{
        echo "POST안됐어!";
        echo $_SERVER['REQUEST_METHOD'];
    }
    echo $_POST['id'];
    echo $_POST{'title'};
?>