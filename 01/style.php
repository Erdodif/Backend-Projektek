<?php
    header('Content-Type: text/css');
?>
body{
    background:<?php 
        if(rand(0,1) === 1)
        {
            echo "indianred";
        }
        else
        {
            echo "aliceblue";
        }
    ?>;
}