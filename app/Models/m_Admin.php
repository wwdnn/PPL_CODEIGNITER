<?php

namespace App\Models;
use CodeIgniter\Model;

class m_Admin extends Model
{
  public function __construct()
  {
    $this->db = \Config\Database::connect();
  }

  public function cekLogin($username, $password)
  {
    $query = "SELECT * FROM admin WHERE username = '".$username."' AND password = '".$password."'";
    $data = $this->db->query($query);
  
    return $data->getRowArray();
  }
}