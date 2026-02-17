<?php

use Framework\App;
use Framework\Database;

$db = App::resolve(Database::class);

$notes = $db->query("SELECT * FROM notes")->fetchAll();

echo "<pre>";
print_r($notes);
echo "</pre>";


