<?php
if (count($argv) != 3) {
    echo "Usage: php age.php <name> <birth year>\n";
    exit(1);
}

$name = $argv[1];
$birth_year = $argv[2];
$current_year = date("Y");
$age = $current_year - $birth_year;


echo "Your name is $name, and your age is $age years old.\n";

// check if age is a voter
if ($age >= 18) {
    echo "You are a voter.\n";
}

// check if age is a senior citizen
if ($age >= 60) {
    echo "You are a senior citizen.\n";
}
?>
