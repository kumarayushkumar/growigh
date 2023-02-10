<?php
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (isset($name) and isset($mobile) and isset($email) and isset($message)) {
        $file = fopen("./tact/aqerpolaas45062dd.txt","a");
        fwrite($file, $name);
        fwrite($file, "\n");
        fwrite($file, $mobile);
        fwrite($file, "\n");
        fwrite($file, $email);
        fwrite($file, "\n");
        fwrite($file, $message);
        fwrite($file, "\n------------------------------\n");
        fclose($file);
    }

    
    header('Location:https://www.growigh.com/');

?>

