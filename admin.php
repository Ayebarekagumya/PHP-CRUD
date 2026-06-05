<?php
    $role="subscriber";
    $message="";

    switch($role){
        case "admin":
            $message="Welcome Admin";
            break;
        case "editor":
            $message="Welcome Editor";
            break;
        case "subscriber":
            $message="Welcome Subscriber";
            break;
        default:
            $message="No role found";
    }
    echo $message;

?>
