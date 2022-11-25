<?php
require_once "Auth/Auth.php";

function myOutput($username, $status, $auth)
{
    ...  /* See first example in introduction for the full listing */
}

$params = array(
            "dsn" => "mysql://martin:test@localhost/auth",
            "table" => "myAuth",
            "usernamecol" => "myUserColumn",
            "passwordcol" => "myPasswordColumn"
            );

$a = new Auth("DB", $params, "myOutput");

$a->start();

if ($a->getAuth()) {
    echo "You have been authenticated successfully.";
}




//por des base de donnees differents


<?php
require_once "Auth/Auth.php";

function myOutput($username, $status)
{
    ...  /* See first example in introduction for the full listing */
}

$a = new Auth(new CustomAuthContainer($options), null, "myOutput");

$a->start();

if ($a->getAuth()) {
    echo "You have been authenticated successfully.";
}
?>






?>

