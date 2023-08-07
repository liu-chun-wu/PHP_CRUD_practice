<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SanitizeInput</title>
</head>

<body>
    <h2>Sanitize Practice</h2>
    <form action="index.php?goto=SanitizeInput" method="POST">
        <label>username :</label>
        <input type="text" name="username" required><br>
        <label>age : </label>
        <input type="text" name="age" required><br>
        <label>email : </label>
        <input type="text" name="email" required><br>
        <input type="hidden" name="sendData" value='1'>
        <input type="submit">
        <input type='reset' name='reset'>
    </form>
</body>

</html>
<?php
if (isset($_POST["sendData"]) && $_POST["sendData"] == 1) {
    $username = filter_input(
        INPUT_POST,
        "username",
        FILTER_SANITIZE_SPECIAL_CHARS
    );
    $age = filter_input(
        INPUT_POST,
        "age",
        FILTER_SANITIZE_NUMBER_INT
    );
    $email = filter_input(
        INPUT_POST,
        "email",
        FILTER_SANITIZE_EMAIL
    );

    if ($username != null) {
        echo "Hello {$username} <br>";
    }

    //echo 'Hello ' . $_POST['username'] . '<br>';
    if ($age != null) {
        echo "You are {$age} years old <br>";
    }
    if ($email != null) {
        echo "Your email is {$email} ";
    }
} else {
    echo '';
}
?>

<body>
    <form action="index.php?goto=SanitizeInput" method="post">
        <input type="hidden" name="sendData" value='0'>
        <button type="submit">Clear Output</button>
    </form>
</body>