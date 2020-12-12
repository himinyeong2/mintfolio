<?php
    include 'db/dbcon.php';

    $mode = $_GET['mode'];
    include "header.html";
    

    if($mode == "diary"){
        $diary_on = "color : #DEBAB8;";
        $sql = "SELECT date, path FROM me_diary d inner join me_emotion e ON d.emotion_number=e.number";
        $result = $conn->query($sql);
        $diary_list = array();
        while($row = mysqli_fetch_assoc($result)){
            array_push($diary_list, $row);
        }
        $json_data= json_encode($diary_list);
        
        include("html/calendar.html");
    }
    else if($mode == "diary_add"){

        $diary_on = "color : #DEBAB8;";
        $date = explode("-",$_GET['date']);
        $date = $date[0].".".$date[1].".".$date[2];
        $emotions='';
        $btn = '<a id="save" class="submit-btn" type ="add">SAVE</a>';

        $sql = "SELECT count(number) cnt, contents  FROM me_diary WHERE date = '$_GET[date]'";
        $result = $conn->query($sql);
        $check = mysqli_fetch_assoc($result);

        if($check['cnt']!=0){
            $contents = $check['contents'];
            $btn = '<a id="save" class="submit-btn" type ="edit">EDIT</a>'.'<a id="del" class="submit-btn"  type ="del">DELETE</a>';
        }

        $sql = "SELECT number, path FROM me_emotion";
        $result = $conn->query($sql);
        while($row = mysqli_fetch_array($result)){
            $emotions.='
            <div class="emo-div">
                <img class="emo" id="'.$row['number'].'" src="'.$row['path'].'">
            </div>
            ';
        }

        include("html/diary_form.html");
    }
    else if($mode == "diary_reg"){
        $contents = $_POST['contents'];
        $date = $_POST['date'];
        $emotion_number = $_POST['emotion'];
        $type = $_POST['type'];

        if($type=="del"){
            $sql = "DELETE FROM me_diary WHERE date = '$date'";
        }
        else{
            if($type=="add"){
                $sql = "INSERT INTO";
            }else if($type=="edit"){
                $sql = " UPDATE";
                $WHERE = " WHERE date = '$date'";
            }
            $sql = $sql." me_diary SET contents='$contents', date = '$date', emotion_number = $emotion_number, mod_date = now() ".$WHERE;
        }
       
       
        $conn->query($sql);
        exit;
    }

    include "footer.html";
   
?>