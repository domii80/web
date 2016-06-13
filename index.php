<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<head>
    <link rel="stylesheet" href="CSS.css">
    <meta charset="UTF-8">
    <title>noetel.com</title>
</head> 

<body>
    <div id="header">
        <h1>City Gallery</h1>
    </div>

    <div id="nav">
        London<br>
        Paris<br>
        Tokyo
    </div>

    <div id="section">
        <h1>London</h1>
        <p>London is the capital city of England. It is the most populous city in the United Kingdom,
            with a metropolitan area of over 13 million inhabitants.</p>
        <p>Standing on the River Thames, London has been a major settlement for two millennia,
            its history going back to its founding by the Romans, who named it Londinium.</p>
    </div>
    <div id="section2">
        <h1>London</h1>
        <p>London is the capital city of England. It is the most populous city in the United Kingdom,
            with a metropolitan area of over 13 million inhabitants.</p>
        <p>
            <?php
        require 'htmlTable.php';
        require 'MySqlConnection.php';
//        start();

        $x = new htmlTable;
        $x->setLength(25);
        $x->setWidth(10);
        print $x->getWidth();
        print $x->getLength();
        $x->forLoop(27);
//        echo $_SERVER['PHP_SELF'];
//echo "<br>";
//echo $_SERVER['SERVER_NAME'];
//echo "<br>";
//echo $_SERVER['HTTP_HOST'];
//echo "<br>";
//echo $_SERVER['HTTP_REFERER'];
//echo "<br>";
//echo $_SERVER['HTTP_USER_AGENT'];
//echo "<br>";
//echo $_SERVER['SCRIPT_NAME'];
        
    ?>
        </p>
    </div>

    <div id="footer">
        Copyright © noetel.com
    </div>

</body> 

