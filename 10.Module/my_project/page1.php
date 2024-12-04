<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
</head>
<body>
    <h1>Welcome to Page 1</h1>
    <p>This is the first page. You can go to the second page by clicking the link below:</p>
    
    <!-- Link to Page 2 -->
     <?php $Base_Url = "/EDGE-RUET-CSE-RUETCSEB0103/EDGE-RUET-CSE-RUETCSEB0103/10.Module/my_project"?>

    <a href= <?php echo $Base_Url."/page2"; ?> >Go to Page 2</a>

</body>
</html>
