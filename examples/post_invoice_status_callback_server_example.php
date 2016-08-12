<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && $_SERVER["SCRIPT_NAME"] === "/paid_invoice_from_xendit") {
        $dataJSON = file_get_contents("php://input");
        $data = json_decode($dataJSON, TRUE);

        print_r("Get the paid invoice when it is paid. \n");
        print_r(json_encode($data, JSON_PRETTY_PRINT)."\n");
        print_r("Updating your database with the response data that you get. \n");
    } else {
        print_r("Cannot ".$_SERVER["REQUEST_METHOD"]." ".$_SERVER["SCRIPT_NAME"]);
    }
?>