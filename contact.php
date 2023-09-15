<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Projectweek</title>
    <link rel="icon" href="./assets/images/website-icon.png" type="image/icon type">
    <link rel="stylesheet" href="assets/CSS/style.css">
    <link rel="stylesheet" href="assets/CSS/contact.css">
</head>

<body>
<div class="drop-down">
    <div class="navbar">
        <ul>
            <li> <a href="index.html">Home</a></li>
            <li> <a>About</a>
                <ul>
                    <li><a href="CVskills.html">CV/Skill</a></li>
                    <li><a href="artist.html">Artist</a></li>
                    <li><a href="project.html">Projects</a></li>
                    </li>
                </ul>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>
</div>
<div class="container-box">

    <div class="main-contact">
       
    <form method="POST" class="contact-box">
            <h1>Contact Us</h1>
            <div class="info">
                <input class="fname" type="text" name="name" placeholder="Full name">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="phone" placeholder="Phone number">
                <input type="text" name="company" placeholder="Company name">
            </div>
            <p>Message</p>
            <div>
                <textarea rows="4" name="message" id="msg"></textarea>
            </div>
            <div class="wrapper">
                <button type="submit" class="button">Submit</button>
            </div>
            
        </form>
   
    </div>
</div>
    <div class="footer">
        <a href="contact.php" class="link"><img src="assets/images/discord.png" alt="" class="icon-pics"></a>
        <a href="contact.php" class="link"><img src="assets/images/outlook.png" alt="" class="icon-pics"></a>
    </div>
</body>

</html>





<?php
$host = 'localhost:3306';
$dbUsername = "88694";
$dbPassword = "AAPJE123!";
$dbName = "databaseprojectweek1";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $company = $_POST["company"];
    $message = $_POST["message"];

    $sql = "INSERT INTO Portfolio (naam, email, nummer, bedrijf, vraag) VALUES ('$name', '$email', '$phone', '$company', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
