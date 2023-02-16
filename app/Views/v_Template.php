<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
  </title>
</head>
<body>

  <!-- table -->
  <table border="1" width="100%" style="min-height: 100vh">
      <tr style="background-color: #93BFCF;">
        <td colspan="5">
          <center>
            HEADER    
          </center>
        </td>
      </tr>

      <tr height="30px" style="background-color: #BDCDD6;">
        <td width="100px">
          <center>
            <a href="/home">HOME</a>          
          </center>
        </td>

        <td width="100px">
          <center>
            <a href="/info">INFO</a>
          </center>
        </td>

        <td width="150px">
          <center>
            <a href="/mahasiswa">MAHASISWA</a>
          </center>
        </td>

        <td width="150px">
          <center>
            <a href="/pegawai/input">PEGAWAI</a>
          </center>
        </td>

        <?php
            if(session()->get('username'))
            { ?>
              <td width="100px">
                <center>
                  <a href="/logout">LOGOUT</a>
                </center>
              </td>
          <?php
            }
          ?>
      </tr>

      <tr height="75%">
        <td colspan="5">
          <center>
            <?= $this->renderSection('content') ?>
          </center>
        </td>
      </tr>

      <tr style="background-color: #DDDDDD;" height="10%">
        <td colspan="5">
          <center>
            CREATED BY WILDAN SETYA NUGRAHA    
          </center>  
        </td>
      </tr>
  </table>

</body>
</html>