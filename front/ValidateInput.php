<body>
    <h2>Validate Practice</h2>
    <form action="index.php?goto=ValidateInput" method="POST">
        <label>username :</label>
        <input type="text" name="username" required><br>
        <label>age : </label>
        <input type="text" name="age" required><br>
        <label>email : </label>
        <input type="text" name="email"><BR>
        <input type="hidden" name="sendData" value='1'>
        <input type="submit">
        <input type='reset' name='reset' required>
    </form>
</body>
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
        FILTER_VALIDATE_INT
    );
    $email = filter_input(
        INPUT_POST,
        "email",
        FILTER_VALIDATE_EMAIL
    );
    if ($username != null) {
        echo "Hello {$username} <br>";
    }
    if ($age != null) {
        echo "You are {$age} years old <br>";
    } else {
        echo "this number is invalid<br>";
    }
    if ($email != null) {
        echo "Your email is {$email} ";
        $email = null;
    } else {
        echo "this is email is invalid<br>";
    }
}
?>

<body>
    <form action="index.php?goto=ValidateInput" method="post">
        <input type="hidden" name="sendData" value='0'>
        <button type="submit">Clear Output</button>
    </form>
</body>