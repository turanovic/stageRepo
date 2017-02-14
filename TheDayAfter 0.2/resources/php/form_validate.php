<?php
if(isset($_POST["stage"])) {
    switch($_POST["stage"]) {
        default:
            header("location:../../index.php");
            break;
        case 1://intro
            header("location:../../newuser.php");
            break;
        case 2://background info
            validateInput($_POST);
            //session_start();
            // $_SESSION["id"] = 0;
            //header("location:../../weeklyform.php");
            break;
        case 3:
            print_r($_POST);
            //header("location:../../end.php");
            break;
        case 4:
            header("location:../../newuser.php");
            break;
    }
}

function validateInput($input) {
    switch($input["stage"]) {
        case 2:
            if(!empty($input["birthdate"]) && !empty($input["gender"]) && !empty($input["household"]) && !empty($input["education"]) && !empty($input["worksituation"]) && !empty($input["income"]) && !empty($input["party"]) && !empty($input["news_source"]) && !empty($input["email"])) {
                generateID($input);
            } else {
                echo 0;
            }
            break;
    }
}

function generateID($input) {
    $r_id = rand(100000, 999999);
    //TODO: CHECK IF UNIQUE IN DATABASE!!!
    
    //IF UNIQUE:
    array_push($input, $r_id);
    fill_BI($input);
    
}

function fill_BI($input) {
    $databasename = "thedayafterdb";
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    try {
        $connectionString = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $connectionString->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        switch($input["stage"]) {
            default:
                break;
            case 2:
                $query = $connectionString->prepare("INSERT INTO userbackground (userID, birthdate, gender, household, educationID, workID, incomeID, candidateID, channelID) VALUES ('".$input["0"]."', '".$input["birthdate"]."', '".$input["gender"]."', '".$input["household"]."', '".$input["education"]."', '".$input["worksituation"]."', '".$input["income"]."', '".$input["party"]."', '".$input["news_source"]."')");
                $query->execute();
                //$row = $data["statement"]->fetch(PDO::FETCH_ASSOC);
                break;
        }
        toWeekly($input["0"]);
        
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
}

function toWeekly($id) {
    session_start();
    $_SESSION["id"] = $id;
    header("location:../../weeklyform.php?id=".$_SESSION["id"]."");
    
}
?>