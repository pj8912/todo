<?php

if(isset($_REQUEST['type']) == 'todo'){
 
    
    $postData = file_get_contents("php://input");
    $req = json_decode($postData);
    //sql queries..

    require_once('database/sql.php');
    
    $db = new database('notesapp.db');

    if (!$db) {
        die('Error opening database');
    }
    // $sql = "INSERT INTO todo(tasks) VALUES('$req')";
    
    $db->exec("INSERT INTO todo(tasks) VALUES('$req')");



    if(!$res){
        die('Error exec');
    }
}

