
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["name"];
    $email=$_POST["email"];

    echo "<h1>Your Output</h1>";
    echo "Your Name: ".htmlspecialchars($name)."<br>";
    echo "Your Email: ".htmlspecialchars($email)."<br>";
}



?>

<form action="index.php" method="post">
    <input type="text" name="name" placeholder="Name"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <button>Submit</button>

</form>
    
</body>
</html>