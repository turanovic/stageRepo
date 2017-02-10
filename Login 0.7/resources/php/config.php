<?php
//print_r(json_decode(stripslashes($_REQUEST["data"]), true)[0]["value"]);
$id = json_decode(stripslashes($_REQUEST["data"]), true)[0]["value"];
if(isset($_REQUEST["req"]) && isset($_REQUEST["data"])) {
    if(!empty($id)) {
        if(preg_match("/[^A-Za-z0-9]/", $id)) {
            echo 3; //ID value incorrect
        } else {
            if($id == 315583) {
                echo 0;//ID does NOT exist
            } else {
                echo 2;//ID is correct
            } 
        }
    } else {
        echo 1;//ID is empty
    }
} else {
    echo 5000; //Unknown ERROR
}
?>