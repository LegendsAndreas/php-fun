<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <p>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <?php echo "{$book["name"]} ({$book["year"]}) {$book["author"]} {$book["pU"]}"; #Perfection?>
            </li>
        <?php endforeach; ?>
    </p>
</body>
</html>