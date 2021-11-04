<?php

if (!isset($router) || !isset($content)) {
    exit(0);
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="style/variables.css" rel="stylesheet">
    <link href="style/style.css" rel="stylesheet">
    <link href="style/header.css" rel="stylesheet">
    <link href="style/footer.css" rel="stylesheet">
    <title>BUT Info Lyon 1</title>
</head>

<body>

<div class="test">
    <header>

        <p>Header</p>

    </header>

    <main>
        <?= $content ?>
    </main>
</div>

<footer>

    <p>Footer</p>

    <?php if (defined('DEBUG_TIME')) { ?>
        Page générée en <?= round(1_000 * (microtime(true) - DEBUG_TIME)) ?>ms.
    <?php } ?>

</footer>

</body>

</html>