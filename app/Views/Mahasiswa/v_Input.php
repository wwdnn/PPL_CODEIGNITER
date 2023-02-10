<?= $this->extend('v_Template') ?>

<?= $this->section('content') ?>
  <!-- Add Mahasiswa -->
  <form action="<?= base_url('mahasiswa/add') ?>" method="post">
    <table>
      <tr>
        <td>NIM</td>
        <td><input type="text" name="NIM"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="Nama"></td>
      </tr>
      <tr>
  
      <td>Umur</td>
        <td><input type="text" name="Umur"></td>
      </tr>
      <tr>
        <td><input type="submit" value="Simpan"></td>
        <td><button><a href="/mahasiswa">Kembali</a></button>
      </td>
      </tr>
    </table>
  </form>

<?= $this->endSection() ?>
