<?php 

$databaseFile = "testapp.db";
if(file_exists($databaseFile)){

	echo 'Database file already exists'.PHP_EOL;
	exit;
}


$db = new SQLite3($databaseFile);

//create todo
$db->exec("CREATE TABLE IF NOT EXISTS  test(
    test_id INTEGER PRIMARY KEY AUTOINCREMENT,
    task TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
)");



$db->close();

echo "'testapp.db' database , created successfully!".PHP_EOL;


?>



