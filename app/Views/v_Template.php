<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

  <!-- table -->
  <table border="1" width="100%" style="min-height: 100vh" class="table  table-bordered">
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>