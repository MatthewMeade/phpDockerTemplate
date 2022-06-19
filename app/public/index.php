<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello World!</h1>

    <p>
        <?php

        $pdo = new PDO('mysql:dbname=tutorial;host=mysql', 'tutorial', 'secret', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

        $query = $pdo->query('SHOW VARIABLES like "version"');

        $row = $query->fetch();

        echo 'MySQL version:' . $row['Value'];

        phpinfo();
        ?>
    </p>
</body>

</html>