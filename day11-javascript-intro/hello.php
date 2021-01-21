<?php

    // get the data from somewhere (database, users input)
    // using sensitive information (passwords)
 
    $user_name = 'Joe';
 
    $theme = 'dark';
 
    $year = date('Y'); // inbuilt date function
 
    $stylesheet_url = 'style.css';
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $user_name ?>'s homepage</title>
 
    <link rel="stylesheet" href="<?= $stylesheet_url ?>">
</head>
<body class="<?= $theme ?>">
 
    <main>
 
        <h1>Hello, <?= $user_name ?></h1>
 
    </main>
 
    <footer>
 
        &copy; <?= $year ?>
 
    </footer>

    <script>

        document.querySelector('h1').style.color = 'red';
        
    </script>
 
</body>
</html>