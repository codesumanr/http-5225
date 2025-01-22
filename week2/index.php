<!doctype html>
<html>
  <head>
    
    <title>PHP and Creating Output</title>
    
  </head>
  <body>
  

    <?php 
        echo "<h1>PHP and Creating Output</h1>";

        echo "<p>The PHP echo command can be used to create output.</p>";
    ?>
  

    <p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>
    
    <ul>
        <li>Use HTML special characters</li>
        <li>Alternate between single and double quotes</li>
        <li>Use a backslash to escape quotes</li>
    </ul>
    
    <h2>More HTML to Convert</h2>

    <p>PHP says "Hello World!"</p>

    <p>Can you display a sentence with ' and "?</p>
    <?php
        echo "<img src=\"logo.png\"width=\"200px\">";

    ?>
    <img src="<?php echo'logo.png'; ?>" alt="<?php echo 'ALT TAG'; ?>" width="250px">

    <?php
    $name = "suman rani";
    $lastname = 'rani';



    $person['first'] = 'suman';
    $person['last'] = 'rani';
    $person['email'] = 'sumankamboj1997@gmail.com';
    $person['web'] = 'https://github.com/codesumanr';

    echo "Hello, " . $name;
    echo "Hello," . $person['first'];

    
    ?>
    <br>
    <a href="mailto:<?php echo $person['email']; ?>"><?php echo $person['email']; ?></a>
    <br>
    <a href="<?php echo $person['web']; ?>"><?php echo $person['web']; ?></a>

  </body>
</html>