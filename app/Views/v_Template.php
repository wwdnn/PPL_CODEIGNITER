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
  <table width="100%" style="height:650px">
      <tr style="background-color: #93BFCF;">
        <td>
          <center>
            HEADER    
          </center>
        </td>
      </tr>

      <tr height="30px" style="background-color: #BDCDD6;">
        <td>
          <a href="/home">HOME</a>
          <a href="/info">INFO</a>
          <a href="/mahasiswa">MAHASISWA</a>
        <a href="/logout">LOGOUT</a>
        </td>
      </tr>

      <tr>
        <td>
          <center>
            <?= $this->renderSection('content') ?>
          </center>
        </td>
      </tr>

      <tr style="background-color: #DDDDDD;">
        <td>
          <center>
            CREATED BY WILDAN SETYA NUGRAHA    
          </center>  
        </td>
      </tr>
  </table>

</body>
</html>