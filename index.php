<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mobiquity Swagger Docs</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-4">

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
                    <li><a href="<?php echo $directory ?>"><?php echo ucwords(basename($directory)) ?></a></li>

                    <?php

                }
                ?>
            </ul>
        </div>

    </div>
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>
