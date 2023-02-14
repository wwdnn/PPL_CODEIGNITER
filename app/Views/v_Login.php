<?= $this->extend('v_Template') ?>
<?= $this->section('content') ?>

    <table>
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
              <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
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
<?= $this->endSection() ?>