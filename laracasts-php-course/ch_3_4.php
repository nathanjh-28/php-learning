<?php

// ____________________________________Creating Variables 

//variables start with $ sign
$greeting = 'Hello There';

echo $greeting;

echo '<br>';

// You can use double quotes to interpolate your print statement

$name = 'Nathan';

echo "Hello, $name";
// some people wrap the variables with {} but that's optional.

echo '<br>';
// or you can concatenate with a period (not a plus sign)

echo 'goodbye ' . $name;


// ____________________________________PHP and HTML

// Opening and closing tags with PHP, the closing tag is not needed if the whole document is PHP.  When mixing HTML and PHP, you need the closing tag.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    header {
        background: #e3e3e3;
        padding: 2em;
        text-align: center;
    }
    </style>
</head>
<body>
    <header>
        <h1>
        
        
        <?php 

        // We can use this GET method to retrieve URL values by setting the URL key.  

        // localhost:8888/?name='johndoe' ==> Hello johndoe
        $name = $_GET['name'];
        echo 'Hello '. $name; 
        
        // also shortand for open php tag and echo something out would be < ? = (without spaces)
        //Below is a more terse way to write the same thing
        ?>
        </h1>

        <h1><?= 'Hello ' . $_GET['name']; ?></h1>


        <h1><?= 'Hello ' . htmlspecialchars($_GET['name']); ?></h1>

        <!-- What if we wanted to make this more secure?  Anybody could put anything in to name.  By using the htmlspecialchars function we can "sanitize" the url so that we don't get back any html tags or anything thats not a normal string.   -->
    
    </header>
    
</body>
</html>