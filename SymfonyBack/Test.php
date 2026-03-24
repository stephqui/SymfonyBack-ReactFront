<?php
try {
    $pdo = new PDO('mysql:host=@127.0.0.1:3306;dbname=update_software', 'root', 'Solution!74');
    echo "Connected successfully.";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
