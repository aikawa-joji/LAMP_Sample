<?php
    $dsn = 'mysql:dbname=sample_db;host=localhost;';
    $user = 'aikawa';
    $password = 'aijo0907';
    try {
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(POD::ATTR_ERROMDE, PDO::ERRMODE_EXCEPTION;)

        $id = $_GET['id'];

        $sql = "delete from user where id=:id"
        $stmt = $dbh->prepare($sql);
        $prams = array(':id'=> $id, ':name'=> $name, ':age'=> $age,);
        $stmt->execute($prams);

        header('Location: index.php?fg=1');

    } catch (PDOException $e) {
        header('Location: index.php?fg=2?err='.$e->getMessage());
        exit();
    }
​
?>