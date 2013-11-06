<?php

echo 'Hello World!';

$xml = new DOMDocument();
$xml->formatOutput = true;
$root = $xml->appendChild(new DOMElement('root'));
$name = $root->appendChild(new DOMElement('name','dinesh'));
$phone = $root->appendChild(new DOMElement('phone','4545454'));
//echo $xml->saveXML();


$dsn = 'mysql:dbname=test;host=localhost';
$user = 'root';
$password = 'password';

try {
    $db = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

$st = $db->prepare("select * from tt");
$st->execute();
$res = $st->fetchAll();
echo ('<pre>'.print_r($res, true).'</pre>')

//print_r(phpinfo());

?>
