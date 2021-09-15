<?php
    header('Content-Type: text/css');
    $szin = $_GET["szin"];
    $hatter = $_GET["hatter"];
?>
body{
    background:<?php 
        echo $hatter;
    ?>;
}
body *{
    <?php
        echo "background:$szin;
        color: $hatter;";
    ?> 
}
body th {
    color: black;
}