<?php
require_once('database/sql.php');
$db = new database('notesapp.db');
if (!$db) {
    die('Error opening database');
}


$sql = "SELECT * FROM  todo";

$res = $db->query($sql);

if(!$res){
    die('Error exec');
    
}
else{    
    $row = $res->fetchArray(SQLITE3_ASSOC);
    exit(json_encode($row));
}

?>
