<?php
    session_start();
    # connection to database (url, user, password, databasename)
    $conn = mysqli_connect(
        'localhost',
        'root',
        '',
        'php_mysql_crud'
    );
?>