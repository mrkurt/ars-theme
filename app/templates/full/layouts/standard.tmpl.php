<html>
    <head>
    </head>
    <body>
        <?= $contents ?>
        <h4>Time: <?= microtime(true) - $GLOBALS['page_start_time'] ?>
    </body>
</html>