<!doctype html>
<html>
    <head>
        <title>PHP If Statements</title> 
    </head>
    <body>

        <h1>PHP If Statements</h1> 

        <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything outputs correctly:</p>

        <?php

        // **************************************************
        // Do not edit this code

        // Generate a random number (1, 2, or 3)
        $randomNumber = ceil(rand(1,3));

        // Display the random number
        echo '<p>The random number is '.$randomNumber.'.</p>';

        // Based on the random number PHP will define four variables and fill them with information about Codecademy, W3Schools, or MDN

        // The random number is 1, so use Codecademy
        if ($randomNumber == 1)
        {
            $linkName = 'Codecademy';
            $linkURL = 'https://www.codecademy.com/';
            $linkImage = '';
            $linkDescription = 'Learn to code interactively, for free.';
        }

        // The random number is 2, so use W3Schools
        elseif ($randomNumber == 2)
        {
            $linkName = 'W3Schools';
            $linkURL = 'https://www.w3schools.com/';
            $linkImage = 'w3schools.png';
            $linkDescription = 'W3Schools is optimized for learning, testing, and training.';
        }

        // The random number is 3, so use MDN
        else
        {
            $linkName = 'Mozilla Developer Network';
            $linkURL = 'https://developer.mozilla.org/';
            $linkImage = 'mozilla.png';
            $linkDescription = 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.';
        }

        // **************************************************

        // Beginning of the exercise, place all of your PHP code here
        // Display the link name as an h2 heading
        echo '<h2>'.$linkName.'</h2>';

        // Display the link as a clickable hyperlink
        echo '<a href="'.$linkURL.'">'.$linkName.'</a>';

        // Optionally, display the link description (if needed)
        echo '<p>'.$linkDescription.'</p>';
        
        ?>

      
        
            <h3>Challenge 1 </h3> 
            <?php
            $currentHour  = ceil(rand(1,24));
         

         if ($currentHour >= 5 && $currentHour < 9) {
           
            echo "<p>The animals should eat: <strong>Bananas, Apples, and Oats (Breakfast)</strong>.</p>";
        } 
        elseif ($currentHour >= 12 && $currentHour < 14) {
           
            echo "<p>The animals should eat: <strong>Fish, Chicken, and Vegetables (Lunch)</strong>.</p>";
        }
        elseif($currentHour >= 19 && $currentHour < 21) {
           
            echo "<p>The animals should eat: <strong>Steak, Carrots, and Broccoli(Dinner)</strong>.</p>";
        }else {
            echo "<p>the animals are not being fed.</p>";
        }
           
        ?>  
        
       
        <h4>Challenge 2</h4>
        <?php
            // User input for the magic number (replace with a real input method like form submission in practice)
            $userNumber = rand(1, 100); // Using a random number between 1 and 100 for demonstration
            
            // Determine the magic number based on the rules
            if ($userNumber % 3 == 0 && $userNumber % 5 == 0) {
                $magicNumber = "FizzBuzz";
            } elseif ($userNumber % 3 == 0) {
                $magicNumber = "Fizz";
            } elseif ($userNumber % 5 == 0) {
                $magicNumber = "Buzz";
            } else {
                $magicNumber = $userNumber;
            }
        
            // Output the magic number
            echo "<p>The user input is: <strong>$userNumber</strong></p>";
            echo "<p>The magic number is: <strong>$magicNumber</strong></p>";
        ?>
        




        

    </body>
</html>
