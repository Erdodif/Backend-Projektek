<?php
    header('Content-Type: text/css');
    function be($str)
    {
        return htmlspecialchars_decode($str,ENT_QUOTES);
    }
    $szin = be($_GET["szin"]);
    $hatter = be($_GET["hatter"]);
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