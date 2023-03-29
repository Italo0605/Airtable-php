<?php
require 'vendor/autoload.php';
require 'functions.php';

$airtable = new App\Airtable\Test();
dd($airtable->getAllData());


// foreach ($airtable->getAllData() as $record) {
//     echo "Name: " . $record["Name"] . "<br />";
// }
?>