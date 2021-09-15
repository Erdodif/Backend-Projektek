<?php
    header('Content-Type: text/css');
?>
body{
    background:<?php 
    $dontes= rand(0,1);
        if($dontes === 1)
        {
            echo "indianred";
        }
        else
        {
            echo "aliceblue";
        }
    ?>;
}
td{
    background: <?php
    if($dontes === 0)
    {
        echo "indianred;color: aliceblue;";
    }
    else
    {
        echo "aliceblue;color: indianred;";
    }
    ?> 
}