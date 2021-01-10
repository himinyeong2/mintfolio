<?php
    include 'db/dbcon.php';

    $mode = $_GET['mode'];
    include "header.html";

    $mode = $_GET['mode'];
    if($mode=='add'){
        include 'html/study_form.html';
    }else if($mode == "reg_board"){
        
        $title = $_POST['title'];
        $contents = $_POST['contents'];
        $tag = $_POST['hashtag'];
        $sub_category = $_POST['sub_category'];
        $category = $_POST['category'];

    

    }
?>

<?php
    include "footer.html";
?>