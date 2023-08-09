<div style="margin:auto; border:1px solid #333; width: 350px;" align="center">
    <form action="index.php?goto=ValidateInput" method="post">
        <h2 class="cent">Validate Input Practice</h2>
        <table>
            <tr>
                <td align="right">username :</td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td align="right">age : </td>
                <td><input type="text" name="age" required></td>
            </tr>
            <tr>
                <td align="right">email : </td>
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
            // $username = $_POST['username'];
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
    </div>
    <form action="index.php?goto=ValidateInput" method="post" align="center">
        <input type="hidden" name="sendData" value='0'>
        <button type="submit">Clear Output</button>
    </form>
</div>