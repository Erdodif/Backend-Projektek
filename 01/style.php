<?php
    header('Content-Type: text/css');
    $szin = "indianred";
    $hatter = "aliceblue";
    if(isset($_GET["szin"]))
    {
        $szin = $_GET["szin"];
    }
    if(isset($_GET["hatter"]))
    {
        $hatter = $_GET["hatter"];
    }
?>
body{
    background:<?php 
        echo $hatter;
    ?>;
}
body *{
    background: <?php
        echo "$szin;color: $hatter;";
    ?> 
}
body th {
    color: black;
}