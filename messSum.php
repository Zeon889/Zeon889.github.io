<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Message Summary</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <?php
    // Check if all required fields are filled
    if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["message"])) {
        // Sanitize user input
        $nameIn = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $message = htmlspecialchars($_POST["message"]);

        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>Invalid email format. Please go back and correct it.</p>";
            echo '<a href="Contact.html">Go back to the form</a>';
            exit;
        }
        ?>
        <h1>Message Summary</h1>
        <p>Thank you <?= $nameIn ?> for your message! I will get back to you within 5 business days.</p>
        <p>Here is what you wrote:</p>
        <p><?= nl2br($message) ?></p> <!-- nl2br preserves line breaks -->
        <p>With this email:</p>
        <p><?= $email ?></p>
    <?php
    } else {
        // Missing fields error
        echo "<p>Some required fields are missing. Please go back and fill out the form completely.</p>";
        echo '<a href="Contact.html">Go back to the form</a>';
    }
    ?>
</body>

</html>
