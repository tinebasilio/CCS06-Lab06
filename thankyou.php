<!DOCTYPE html>
<html>
<head>
    <title>Thank You!</title>
</head>
<body>
    <h1>Thank You!</h1>

    <?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $type = $_POST['type'];
        $satisfaction_level = $_POST['satisfaction_level'];
        $message = $_POST['message'];

        echo "<p>Received $type message from $name ($email)</p>";
        echo "<p>$message</p>";
		echo "<p>Satisfaction Level: $satisfaction_level/10</p>";

    ?>
</body>
</html>

