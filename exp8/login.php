<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'sans-serif';
            }
            body{
                display:flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                background-color: darksalmon;
            }
        </style>
    </head>
    <body>
        <form method="post" action="validate.php">
            <table>
                <tr>
                    <td>
                        <input type="textbox" name='userName' placeholder="User ID" id="userName_ID">
                    </td>
                </tr>
                <tr>
                    <td><input type="password" name="password" id="password_ID" placeholder="Password"> </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="remember" value="1" required> Remember Me</td>
                </tr>
                <tr>
                    <td align="center"><input type="submit" value="login" name="login"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
<?php
    if(isset($_COOKIE['userName']) and isset($_COOKIE['password']))
    {
        $un=$_COOKIE['userName'];
        $pass=$_COOKIE['password'];
        echo "<script>
            document.getElementById('userName_ID').value='$un';
            document.getElementById('password_ID').value='$pass';
            </script>";
    }
?>
