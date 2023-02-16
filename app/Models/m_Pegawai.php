<?php

namespace App\Models;

use CodeIgniter\Model;

class m_Pegawai extends Model
{
    protected $table = 'pegawai';
    protected $primaryKey = 'NIM';
    protected $allowedFields = ['nama', 'jk', 'noTelepon', 'email', 'pendidikan'];

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }
    
    public function tambahPegawai($data)
    {
        $query = "INSERT INTO pegawai (NIM, nama, jk, noTelepon, email, pendidikan) VALUES ('".$data['nim']."', '".$data['nama']."', '".$data['jk']."', '".$data['noTelepon']."', '".$data['email']."', '".$data['pendidikan']."')";
        
        return $this->db->query($query);
    }
}
