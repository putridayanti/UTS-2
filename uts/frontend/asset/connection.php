<?php
    $db_name = 'mysql:host=127.0.0.1;dbname=dbkitchentools';
    $db_user = 'root';
    $db_password = '';

    $conn = new PDO($db_name, $db_user, $db_password);

    if ($conn) {
        echo "";
    }

    function unique_id(){
        $chars = '12345';
        $chaLength = strlen('$chars');
        $randomString ='';
        for ($i=0; $i < 20 ; $i++){
            $randomString.=$chars[mt_rand(0, $chaLength - 1)];
        }
        return $randomString;
    }
?>