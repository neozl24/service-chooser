<html>
<head>
    <meta charset="utf-8">
    <title>PHP</title>
</head>
<body>
    <p>
        <?php
        echo htmlspecialchars(implode(array_keys($_POST), ', '));
        ?>
    </p>
</body>
</html>
