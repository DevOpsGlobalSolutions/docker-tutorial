<!DOCTYPE html>
<html>
<<<<<<< HEAD
<head>
    <meta charset="UTF-8">
    <title>It Works</title>
    <style>
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
=======
    <head>
        <meta charset="UTF-8">
        <title>Hello there</title>
        <style>
            body {
                font-family: "Arial", sans-serif;
                font-size: larger;
            }

            .center {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 50%;
            }
        </style>
    </head>
    <body>
        <img src="https://tech.osteel.me/images/2020/03/04/hello.gif" alt="Hello there" class="center">
        <?php
        $connection = new PDO('mysql:host=mysql;dbname=demo;charset=utf8', 'root', 'root');
        $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'demo'");
        $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

        if (empty($tables)) {
            echo '<p class="center">There are no tables in database <code>demo</code>.</p>';
        } else {
            echo '<p class="center">Database <code>demo</code> contains the following tables:</p>';
            echo '<ul class="center">';
            foreach ($tables as $table) {
                echo "<li>{$table}</li>";
            }
            echo '</ul>';
>>>>>>> 9705504588a60a2c8557b00a55470c044c7c9f5d
        }
    </style>
</head>
<body>
<!--<img src="https://tech.osteel.me/images/2020/03/04/hello.gif" alt="Hello there" class="center">
-->
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyXluxJ08GHEj66Yp6pae3mZb72CUkjojGzw&usqp=CAU" alt="It Works" class="center">
</body>
</html>