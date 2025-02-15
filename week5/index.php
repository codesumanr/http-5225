<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 5</title>
</head>
<body>
<?php
    // Connection String -  Always save your connection string in a variable
    // parameters - localhost, username, password, database name (for XAMP - username and password will be root and root)
    $connect = mysqli_connect(
        'localhost','root','','colors'
    );

    if(!$connect){
        die("Connection Falied: " . mysqli_connect_error());
    }


    $query = "SELECT * FROM colors";
    $colors = mysqli_query($connect,$query);

    // this is to get some information about the table colors using <pre> tag and prints the information 
    // echo "<pre>" . print_r($colors) . "</pre>";


    while($record = mysqli_fetch_assoc($colors)){
        // echo "<pre>" . print_r($record) . "</pre>";
        echo '<div style="background-color:' . $record["Hex"] . '; width:100%; margin:1em; height:100px; text-align:center; align-content:center; font-size:1.2em; font-weight:bold; border:1.5px dashed black;">' . $record["Name"] . '</div>';
    }


?>    


</body>



</html>