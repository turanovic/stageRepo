<?php
session_start();
/* controleerd of de gebruiker al ingelogd is */
if(isset($_SESSION["id"])) {
    session_destroy(); 
}

/* controleerd of er d.m.v. de form ge-submit is */
if(isset($_POST["stage"])) {
    switch($_POST["stage"]) {
        default:
            header("location:../../index.php");
            break;
        case 0: //De gebruiker heeft al een ID
            validateInput($_POST);
            break;
        case 1: //Een nieuwe gebruiker
            header("location: ../../newUser.php");
            break;
        case 2: //Aanmaken van een gebruiker
            validateInput($_POST);
            break;
    }
} else {
    header("location:../../index.php");
}

/* controleerd de invul waarde */
function validateInput($input) {
    switch($input["stage"])
    {
            /* Login */
        case 0:
            if(!empty($input["id"]) && $input["id"] != null) {
                connect($input);
            } else {
                output(101);
            }
            break;
            /* Achtetgrond Informatie */
        case 2:
            if(!empty($input["birthdate"]) && !empty($input["gender"]) && !empty($input["household"]) && !empty($input["education"]) && !empty($input["worksituation"]) && !empty($input["income"]) && !empty($input["party"]) && !empty($input["news_source"]) && !empty($input["email"])) {
                connect($input);
            } else {
                output(106);
            }
            break;
    }
   
}

/* connectie naar de database */
function connect($input) {
    $databasename = "enquete";
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    try {
        $connectionString = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $connectionString->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        output(501);
        /* query bepalen */
        switch($input["stage"]) {
            default:
                output(104);
                break;
            case 0:
                $data = array("statement" => "SELECT * FROM gebruiker WHERE id = ".$input["id"]."","connectionString" => $connectionString, "stage" => $_POST["stage"]);
                query($data);
                break;
            case 2:
                $r_id = rand(100000,999999);
                $data = array("statement" => "SELECT id FROM gebruiker","connectionString" => $connectionString, "stage" => $_POST["stage"], "r_id" => $r_id);
                query($data);
                break;
        }
    }
    catch(PDOException $e) {
        output(102);
        //echo $e->getMessage();
    }
}

/* uitvoering van de query */
function query($data) {
    try {
        $data["statement"] = $data["connectionString"]->prepare($data["statement"]);
        $data["statement"]->execute();
        $row = $data["statement"]->fetch(PDO::FETCH_ASSOC);
        output(502);
        switch($data["stage"]) {
            case 0:
                if(count($row["id"]) > 0) {
                    output(503);
                    session_start();
                    $_SESSION["id"] = $row["id"];
                    header("location:../../weeklyForm.php");
                } else {
                    output(105);
                }
                break;
            case 2:
                //print_r($_POST);
                $data["statement"] = $data["connectionString"]->prepare("INSERT INTO gebruiker (id) VALUES (".$data["r_id"].")");
                $data["statement"]->execute();
                break;
        }
    }
    catch(PDOException $e) {
        output(103);
        //echo $e->getMessage();
    }
}

//output
function output($output) {
    switch($output) {
        default:
            $output = "Er is iets misgegaan";
            break;
        case 101: //$input is leeg of null
            $output = "Vul een ID in.";
            break;
        case 102: //de connectie string is fout of de database is offline
        case 103: //de statement string is fout of de database if offline
            $output = "Probeer het later nog eens.";
            break;
        case 104: //de $assignment heeft een foute waarde
            $output = "Deze assignment bestaat niet.";
            break;
        case 105: //de invulwaarde bestaat niet in de tabel
            $output = "Dit ID bestaat niet.";
            break;
        case 106:
            $output = "Niet alles is ingevuld.";
            break;
        case 501:
            $output = "Het verbinden met de database is gelukt!";
            break;
        case 502:
            $output = "Het uitvoeren van de query is gelukt!";
            break;
        case 503: //de invulwaarde bestaat in de tabel
            $output = "U wordt ingelogd!";
            break;
    }
    echo "<br>".$output."<br>";
}

?>