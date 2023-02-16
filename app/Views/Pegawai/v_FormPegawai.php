<?php $this->extend('v_Template'); ?>

<?php $this->section('content'); ?>
  
  <?php if (session()->get('success')) { ?>
    <div class="alert alert-success" role="alert">
      <?= session()->get('success') ?>
    </div>
  <?php } ?>

  <!-- validate input -->
  <?php if ((session()->getFlashdata('errors'))) {?>
      <div>
         <!-- only nim -->
         <?= $error = session()->getFlashdata('errors')?>
  <?php } ?>


  <table>
    <form action="/pegawai/input" method="post">  
      <?= csrf_field(); ?>
      <tr>
        <td>NIM</td>
        <td>:</td>
        <td><input type="text" name="nim" id="nim"></td>
      </tr>

      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama" id="nama"></td>
      </tr>

      <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>
          <input type="radio" name="jk" id="jk" value="Pria">Pria
          <input type="radio" name="jk" id="jk" value="Wanita">Wanita
        </td>
      </tr>

      <tr>
        <td>No Telepon</td>
        <td>:</td>
        <td><input type="text" name="noTelepon" id="noTelepon"></td>
      </tr>

      <tr>
        <td>Email</td>
        <td>:</td>
        <td><input type="text" name="email" id="email"></td>
      </tr>

      <tr>
        <td>Pendidikan</td>
        <td>:</td>
        <td>
          <select name="pendidikan" id="pendidikan">
            <!-- Default no value -->
            <option value="">Pilih Pendidikan</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
          </select>
        </td>
      </tr>

      <tr>
        <td colspan="3"><button type="submit">Simpan</button></td>
      </tr>
    </form>
  </table>
<?php $this->endSection(); ?>
