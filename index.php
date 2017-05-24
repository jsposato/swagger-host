<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<head>
    <title>Mobiquity Swagger Docs</title>
</head>
<body>
<h1>Swagger Projects</h1>
<ul>
    <?php
    ini_set("display_errors", "1");
    $directories = glob(__DIR__ . '/*', GLOB_ONLYDIR);

    foreach ($directories as $directory) {
        // ignore the current directory
        if ($directory == '/usr/share/nginx/html/*') {
            continue;
        }
        ?>
        <li><a href="<?php echo $directory ?>>"><?php echo ucwords(basename($directory)) ?></a></li>

        <?php

    }
    ?>
</ul>

</body>
</html>
