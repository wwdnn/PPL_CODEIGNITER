<?= $this->extend('v_Template') ?>

<?= $this->section('content') ?>
<form action="/mahasiswa/edit ?>" method="post">
    <table>
      <tr>
        <td>NIM</td>
        <td><input type="text" name="NIM" value="<?= $mahasiswa['NIM'] ?>" readonly></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="Nama" value="<?= $mahasiswa['Nama'] ?>"></td>
      </tr>
      <tr>
        <td>Umur</td>
        <td><input type="text" name="Umur" value="<?= $mahasiswa['Umur'] ?>"></td>
      </tr>
      <tr>
        <td colspan="2"><button type="submit">Edit</button></td>
      </tr>
    </table>
  </form>
<?= $this->endSection() ?>
