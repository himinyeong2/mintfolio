<?php 

    error_reporting(E_ALL); 
    ini_set('display_errors',1); 

    include('dbcon.php');


    if( ($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['submit']))
    {

        $id=$_POST['id'];
        $title=$_POST['title'];
        $content=$_POST['content'];
        $date=$_POST['date'];
        if(!isset($errMSG))
        {
            try{
                $stmt = $con->prepare('INSERT INTO diary VALUES(:id, :title, :content, :date)');
                $stmt->bindParam(':id', $id);
                $stmt->bindParam(':title', $title);
                $stmt->bindParam(':content', $content);
                $stmt->bindParam(':date', $date);

                if($stmt->execute())
                {
                    echo '<script>alert("입력완료");</script>';
                    
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

<html>
   <body>
        <?php 
        if (isset($errMSG)) echo $errMSG;
        if (isset($successMSG)) echo $successMSG;
        ?>
        
        <form action="<?php $_PHP_SELF ?>" method="POST">
            id: <input type = "text" name = "id" />
            title: <input type = "text" name = "title" />
            content <input type = "text" name = "content" />
            date: <input type = "text" name = "date" />
            <input type = "submit" name = "submit" />
            <input type = "submit" value = "삭제 " />
            <input type = "submit" value = "변경" />
        </form>
   
   </body>
</html>