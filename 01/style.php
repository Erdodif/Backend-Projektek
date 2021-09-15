<?php
    header('Content-Type: text/css');
    $szin = $_GET["szin"] ??"indianred";
    $hatter = $_GET["hatter"] ?? "aliceblue";
?>
body{
    background:<?php 
        echo $hatter;
    ?>;
}
body *{
    background: <?php
        echo "$szin;
        color: $hatter;";
    ?> 
}
body th {
    color: black;
}