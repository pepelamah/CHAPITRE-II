<!DOCTYPE html>
<html>
    <head>
        <title> les variables</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        $a="0";
        $b="TRUE";
        $c=FALSE;
        $d=($a OR $b);  
        $e=($a AND $c);
        $f=($a XOR $b);
        echo ($a);
        echo "<br>";
        echo $b;
        echo "<br>"; 
        echo $c;
        var_dump($c);
        echo "<br>";
        echo $d;  
        echo "<br>"; 
        echo $e;
        echo "<br>";
        echo $f;                 
        ?>
    </body>
</html>