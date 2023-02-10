<?php

  // Models
  namespace App\Models;
  use CodeIgniter\Model;
  
  class M_Mahasiswa extends Model
  { 
      protected $table = 'mahasiswa';
      protected $primaryKey = 'NIM';
      protected $allowedFields = ['NIM', 'Nama', 'Umur'];
      protected $db;

      public function __construct()
      {
        $this->db = \Config\Database::connect();
      }

      public function getAllData()
      {
        $query = "SELECT * FROM mahasiswa";
        $data = $this->db->query($query);
        return $data->getResultArray(); 
      }

      public function getMahasiswa($nim)
      {
        $query = "SELECT * FROM mahasiswa WHERE NIM = '".$nim."'";
        $data = $this->db->query($query);
        return $data->getRowArray();
      }

      public function addMahasiswa($data)
      {
        $query = "INSERT INTO mahasiswa (NIM, Nama, Umur) VALUES ('".$data['NIM']."', '".$data['Nama']."', '".$data['Umur']."')";
        return $this->db->query($query);
      }

      public function cekMahasiswa($nim)
      {
        $query = "SELECT * FROM mahasiswa WHERE NIM = '".$nim."'";
        $data = $this->db->query($query);
        return $data->getResultArray();
      }

      public function deleteMahasiswa($nim)
      {
        $query = "DELETE FROM mahasiswa WHERE NIM = '".$nim."'";
        return $this->db->query($query);
      }
      
      public function editMahasiswa($data)
      {
        $query = "UPDATE mahasiswa SET NIM = '".$data['NIM']."', Nama = '".$data['Nama']."', Umur = '".$data['Umur']."' WHERE NIM = '".$data['NIM']."'";
        
        return $this->db->query($query);
      }

      public function searchMahasiswa($keyword)
      {
        $query = "SELECT * FROM mahasiswa WHERE NIM LIKE '%".$keyword."%' OR Nama LIKE '%".$keyword."%' OR Umur LIKE '%".$keyword."%'";
        $data = $this->db->query($query);
        return $data->getResultArray();
      }

  }