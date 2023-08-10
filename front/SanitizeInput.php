<div style="margin:auto; border:1px solid #333; width: 350px;" align="center">
    <h2 class="cent">Sanitize Input Practice</h2>
    <form action="index.php?goto=SanitizeInput" method="post">
        <table>
            <tr>
                <td align="right">username : </td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td align="right">age :</td>
                <td><input type="text" name="age" required></td>
            </tr>
            <tr>
                <td align="right">email :</td>
                <td><input type="text" name="email" required></td>
            </tr>
        </table>
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
            //$username = $_POST['username'];
            // <script>alert('這是惡意程式碼!')</script>
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