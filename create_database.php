<?php 

$databaseFile = "todoapp.db";
if(file_exists($databaseFile)){

	echo 'Database file already exists'.PHP_EOL;
	exit;
}


$db = new SQLite3($databaseFile);

//create todo
$db->exec("CREATE TABLE IF NOT EXISTS  todo(
    todo_id INTEGER PRIMARY KEY AUTOINCREMENT,
    task TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
)");


//create doing
$db->exec("CREATE TABLE IF NOT EXISTS  doing(
    doing_id INTEGER PRIMARY KEY AUTOINCREMENT,
    task TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
)");


//create done
$db->exec("CREATE TABLE IF NOT EXISTS  doing(
    done_id INTEGER PRIMARY KEY AUTOINCREMENT,
    task TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
)");




$db->close();

echo "'todoapp.db' database , todo, doing and done tables created successfully!".PHP_EOL;


?>



