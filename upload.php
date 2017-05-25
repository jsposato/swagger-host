<?php
ini_set('display_errors', '1');

echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

define('S3_BUCKET', 'mobci-swagger-docs');

if (isset($_POST['submit'])) {
    require_once('vendor/autoload.php');

    // get file
//      echo $_POST['fileInput'];
    // upload to S3 bucket
//      http_redirect('index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mobiquity Swagger Docs</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-8">
            <form class="form-inline" action="upload.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="fileInput">Select a file to upload:</label>
                    <input type="file" class="form-control" id="fileInput">
                    <button type="submit" class="btn btn-default" id="submit">Upload Swagger File</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>

