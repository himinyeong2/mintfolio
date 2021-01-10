<?php
    include 'db/dbcon.php';

    $mode = $_GET['mode'];
    include "header.html";

    $mode = $_GET['mode'];
    if($mode==''){
        include 'html/blog_index.html';
    }
?>

<?php
    include "footer.html";
?>