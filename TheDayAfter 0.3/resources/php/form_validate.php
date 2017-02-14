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
            if(!empty($input["birthdate"]) && !empty($input["gender"]) && !empty($input["household"]) && !empty($input["education"]) && !empty($input["worksituation"]) && !empty($input["income"]) && !empty($input["party"]) && !empty($input["news_source"])) {
                fill_BI($input);
            } else {
                echo 0;//Niet alles is ingevuld
            }
            break;
    }
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
                $query = $connectionString->prepare("INSERT INTO userbackground(userID, birthdate, gender, household, educationID, workID, incomeID, candidateID, channelID) VALUES ('', '".$input["birthdate"]."', '".$input["gender"]."', '".$input["household"]."', '".$input["education"]."', '".$input["worksituation"]."', '".$input["income"]."', '".$input["party"]."', '".$input["news_source"]."')");
                $query->execute();
                createHash($connectionString->lastInsertId());
                //$row = $data["statement"]->fetch(PDO::FETCH_ASSOC);
                break;
            case 3:
                $query = $connectionString->prepare("UPDATE userbackground SET userHash='".$input["hash"]."' WHERE userid ='".$input["userid"]."'");
                $query->execute();
                //echo $input["hash"];
                setcookie("visitor",$input["hash"],time() * 3600*24*7*13);
                break;
        }
        //toWeekly($input["0"]);
        
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
}

function toWeekly($id) {
    session_start();
    $_SESSION["id"] = $id;
    //header("location:../../weeklyform.php?id=".$_SESSION["id"]."");
    
}

function createHash($id) {
    $input = array("stage" => 3, "userid" => $id, "hash" => crypt($id, "ICT-Academie".time()));
    fill_BI($input);
    //$hash = crypt($id, "ICT-Academie");
    
}

function submitWeekly() {
    
    $userhash = $_COOKIE["visitor"];
    $userID = getUserByHash($userhash);   
    
}
?>