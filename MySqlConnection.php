<?php

function start() {
   try {
        $pdo = new PDO(
                'mysql:host=127.0.0.1;dbname=marco;port=3306;charset=utf8', 'root', 'root'
        );
    } catch (PDOException $e) {
        //	Database	connection	failed
        echo "Database	connection	failed";
        exit;
    }
    print $pdo->errorInfo();
}


