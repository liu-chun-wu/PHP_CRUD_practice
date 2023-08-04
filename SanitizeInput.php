<?php
include("Menu.html");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>excersice</title>
</head>

<body>
    <h2>Sanitize Practice</h2>
    <form action="SanitizeInput.php" method="POST">
        <label>username :</label>
        <input type="text" name="username"><br>
        <label>age : </label>
        <input type="text" name="age"><br>
        <label>email : </label>
        <input type="text" name="email"><BR>
        <input type="submit" name="login">
    </form>
</body>

</html>
<?php
if (isset($_POST["login"])) {
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
    if ($age != null) {
        echo "You are {$age} years old <br>";
    }
    if ($email != null) {
        echo "Your email is {$email} ";
    }
}
?>
<?php
include("footer.html");
?>