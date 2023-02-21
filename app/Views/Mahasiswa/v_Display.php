
<?= $this->extend('v_Template') ?>

<?= $this->section('content') ?>

  <?php
    if(session()->getFlashdata('success'))
    { ?>
      <script>
        alert('<?= session()->getFlashdata('success') ?>')
      </script>
  <?php
    }
  ?>

  <!-- Search Mahasiswa -->
  <div class="search-mahasiswa" style="padding-bottom:10px; padding-top:20px">
    <form action="/mahasiswa/search" method="post">
      <input type="text" name="keyword" placeholder="Search Mahasiswa">
      <button type="submit">Search</button>
      <?php
        if(session()->get('keyword'))
        { ?>
          <button><a href="/mahasiswa"></a>X</button>
      <?php
        }
      ?>
    </form>
  </div>

  <table border="1" class=" table-bordered">
    <tr>
      <th>NIM</th>
      <th>Nama</th>
      <th>Umur</th>
      <th>Aksi</th>

    </tr>
    <?php foreach ($mahasiswa as $mhs) { ?>
      <tr>
        <td><?= $mhs->NIM ?></td>
        <td><?= $mhs->Nama ?></td>
        <td><?= $mhs->Umur ?></td>
        <td>
          <a href="/mahasiswa/detail/<?= $mhs->NIM ?>">Detail</a>
          <a href="/mahasiswa/delete/<?= $mhs->NIM ?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')">Delete</a>
        </td>
      </tr>
    <?php } ?>
    <tr>
      <td colspan="4">
        <button><a href="/mahasiswa/add">Tambah Data</a></button>
      </td>
    </tr>

  </table>

  <div class="pagination justify-content-center p-4">
    <?= $pager->links('mahasiswa', 'bootstrap_pagination'); ?>
  </div>
       

 
<?= $this->endSection() ?>

<script>
  function confirm(message)
  {
    if(window.confirm(message))
    {
      return true;
    }
    else
    {
      return false;
    }
  }
</script>