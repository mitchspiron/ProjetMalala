<?php
try {
    $user = 'root';
    $pass = '';
    $db = new PDO('mysql:host=localhost;dbname=publicad', $user, $pass);

} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>