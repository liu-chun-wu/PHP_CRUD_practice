<div style="margin:auto; border:1px solid #333; width: 350px;" align="left">
    <form action="index.php?goto=SanitizeInput" method="post">
        <h2 class="cent">Sanitize Input Practice</h2>
        <p class="cent">username : <input type="text" name="username" required></p>
        <p class="cent">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;age : <input type="text" name="age" required></p>
        <p class="cent">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;email :<input type="text" name="email" required></p>
        <input type="hidden" name="sendData" value='1'>
        <input type="submit">
        <input type='reset' name='reset'>
    </form>
</div>
<div style="margin:auto; border:1px solid #333; width: 350px;" align="left">
    <p align="center">輸出為 :&nbsp;</p>
    <div align="left" style="margin:auto;  width: 150px;">
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
            if ($age != null) {
                echo "You are {$age} years old <br>";
            }
            if ($email != null) {
                echo "Your email is {$email} ";
            } else {
                echo '';
            }
        }
        ?>
    </div>
    <form action="index.php?goto=SanitizeInput" method="post" align="center">
        <input type="hidden" name="sendData" value='0'>
        <button type="submit">Clear Output</button>
    </form>
</div>