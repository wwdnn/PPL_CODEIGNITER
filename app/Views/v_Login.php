<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
    <table width="100%" height="500vh">
      <tr>
        <td>
          <center>
            <?php

              if(session()->getFlashdata('error'))
              {
                echo '<div style="color:red;">'.session()->getFlashdata('error').'</div>';
              }

            ?>
            <h1>LOGIN</h1>
            <form action="/" method="post">
              <table>
                <tr> 
                  <td>Username</td>
                  <td>:</td>
                  <td><input type="text" name="username" placeholder="Username"></td>
                </tr>

                <tr>
                  <td>Password</td>
                  <td>:</td>
                  <td><input type="password" name="password" placeholder="Password"></td>
                </tr>

                <tr>
                  <td colspan="2"><input type="submit" value="Login"></td>
                </tr>
              </table>
            </form>
          </center>
        </td>
      </tr>
    </table>
</body>
</html>