<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>
<body>
    <h1>Welcome to Page 2</h1>
    <p>This is the second page. You can go back to Page 1 by clicking the link below:</p>
    
    <!-- Link to Page 1 -->

    <?php include "constant.php" ?>
    
    <a href="<?php $Base_Url.'/page2' ?>">Go to Page 1</a>
</body>
</html>
